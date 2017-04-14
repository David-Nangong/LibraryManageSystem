<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReminderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reminders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('order_id');
            $table->integer('type');
            $table->string('content',1024);
            $table->dateTime('send_time')->nullable();
            $table->boolean('is_send')->default(false);
            $table->softDeletes();
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
        //
        Schema::dropIfExists('reminders');
    }
}
