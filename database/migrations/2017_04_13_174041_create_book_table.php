<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books',function(Blueprint $table)
        {
            $table->string('id');
            $table->string('name');
            $table->string('author');
            $table->string('publisher');
            $table->dateTime('publish_date');
            $table->dateTime('last_borrow_date');
            $table->decimal('prize',6,2);
            $table->string('isbn');
            $table->string('series');
            $table->string('owner');
            $table->boolean('is_borrow');
            $table->integer('borrow_times');
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
    }
}
