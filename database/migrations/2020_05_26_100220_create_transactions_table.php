<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key')->nullable();
            $table->string('product')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('comments')->nullable();
            $table->string('ureturn')->nullable();
            $table->string('unotify')->nullable();
            $table->string('ucancel')->nullable();
            $table->string('format')->nullable();
            $table->string('auto_redirect')->nullable();
            $table->string('expired')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('buyer_phone')->nullable();
            $table->string('buyer_email')->nullable();
            $table->string('session_id')->nullable();
            $table->string('session_url')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
