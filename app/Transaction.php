<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'product',
        'price',
        'quantity',
        'comments',
        'ureturn',
        'unotify',
        'ucancel',
        'format',
        'auto_redirect',
        'expired',
        'buyer_name',
        'buyer_phone',
        'buyer_email',
        'session_id',
        'session_url',
        'status',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
