<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatRoomUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_room_users', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->timestamps();
	    $table->integer('chat_room_id'); // この行を追加
            $table->integer('user_id'); // この行を追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_room_users');
    }
}
