<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function(Blueprint $table)
        {
            $table->string('id')->primary();
            $table->string('user_phone');
            $table->string('book_id');
            $table->integer('status')->default(0);
            $table->dateTime('begin_date')->nullable();
            $table->string('refuse_reason')->nullable();
            $table->integer('renew_status')->default(0);
            $table->string('renew_refuse_reason')->nullable();
            $table->boolean('is_prompt_before_5')->default(false);
            $table->boolean('is_prompt_maturity')->default(false);
            $table->dateTime('end_date')->nullable();
            $table->integer('days')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
