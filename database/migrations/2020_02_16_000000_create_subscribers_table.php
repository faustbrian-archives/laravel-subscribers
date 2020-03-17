<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create(Config::get('subscribers.tables.subscribers'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('subscribable');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Config::get('subscribers.tables.subscribers'));
    }
}
