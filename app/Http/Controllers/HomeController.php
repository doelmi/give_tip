<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Notification;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (!env('IPAYMU_KEY')) {
            dd("Please set Ipaymu Key first in .env file!");
        }
    }

    public function index(Request $request)
    {
        // success=true&trx_id=883380&via=qris&channel=linkaja&status=berhasil
        $data = [
            'siteLink' => url(),
            'siteName' => "D'Tip",
            'siteTitle' => 'Give a tip to Doelmi',
            'siteDescription' => 'The website is using for giving some tip or donation to Doelmi for Open Source project what have he done.',
            'siteImage' => '',
            'siteUrl' => url(),
            'siteType' => 'website',
            'siteAuthor' => 'Abdullah Fahmi',
            'facebookUrl' => 'https://s.doelmi.id/f6pBk',
            'twitterUrl' => 'https://s.doelmi.id/xA23P',
            'instagramUrl' => 'https://s.doelmi.id/Z8kpE',
            'linkedInUrl' => 'https://s.doelmi.id/RGWp6'
        ];
        $query = [
            'isset' => isset($request->success),
            'success' => $request->success == "true",
            'trx_id' => $request->trx_id,
            'via' => $request->via,
            'channel' => $request->channel,
            'status' => $request->status
        ];
        // dd(, $request->success);
        return view('home', array_merge($data, $query));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if (!$request->has('ctip')) {
                throw new \Exception("Parameter `ctip` required", 400);
            }
            if ($request->ctip == '') {
                throw new \Exception("Parameter `ctip` required", 400);
            }
            if (!$request->has('cname')) {
                throw new \Exception("Parameter `cname` required", 400);
            }
            if ($request->cname == '') {
                throw new \Exception("Parameter `cname` required", 400);
            }
            if (!$request->has('cphone')) {
                throw new \Exception("Parameter `cphone` required", 400);
            }
            if ($request->cphone == '') {
                throw new \Exception("Parameter `cphone` required", 400);
            }
            $data = [
                "key" => env('IPAYMU_KEY'),
                "product" => "D'Tip",
                "price" => $request->ctip,
                "quantity" => 1,
                "comments" => "Give a tip to Doelmi",
                "ureturn" => url(),
                "unotify" => url('notify'),
                "ucancel" => url(),
                "format" => "json",
                "auto_redirect" => "5",
                "expired" => "3",
                "buyer_name" => $request->cname,
                "buyer_phone" => $request->cphone,
                "buyer_email" => $request->cemail
            ];

            $transaction = Transaction::create(array_merge($data, [
                'status' => 'pending'
            ]));

            $data["reference_id"] = $transaction->id;

            $response = $this->_post("https://my.ipaymu.com/payment", $data, ['Content-type: application/x-www-form-urlencoded'], true, 'http_build_query', "POST");

            $transaction->session_id = $response->sessionID;
            $transaction->session_url = $response->url;
            $transaction->save();
            DB::commit();
            return $this->buildResponse(true, 200, 'Create link success', $transaction);
        } catch (\Throwable $th) {
            DB::rollback();
            return $this->buildResponse(false, $th->getCode(), $th->getMessage(), null);
        }
    }

    public function notify(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'trx_id' => $request->trx_id,
                'sid' => $request->sid,
                'status' => $request->status
            ];
            $notification = Notification::create($data);
            $transaction = Transaction::where('session_id', $notification->sid)->first();
            $transaction->status = $notification->status;
            $transaction->save();
            DB::commit();
            return $this->buildResponse(true, 200, 'Save notify success', $notification);
        } catch (\Throwable $th) {
            DB::rollback();
            return $this->buildResponse(false, $th->getCode(), $th->getMessage(), null);
        }
        return $request;
    }

    public function _post($url, $data, $headers, $ssl = false, $jsonEncode = 'json_encode', $method = "POST")
    {
        if ($jsonEncode == 'json_encode') {
            $data = json_encode($data);
        } else if ($jsonEncode == 'http_build_query') {
            $data = http_build_query($data);
        }

        $curlHandle = curl_init($url);

        if ($ssl) {
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curlHandle, CURLOPT_VERBOSE, true);
            curl_setopt($curlHandle, CURLOPT_CAINFO, app()->storagePath('app\cacert.pem'));
            curl_setopt($curlHandle, CURLOPT_CAPATH, app()->storagePath('app\cacert.pem'));
        }

        curl_setopt($curlHandle, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 30);
        $exec = curl_exec($curlHandle);
        $respon = json_decode($exec);

        if (curl_error($curlHandle)) {
            throw new \Exception(curl_error($curlHandle));
        }

        curl_close($curlHandle);

        return $respon;
    }
}
