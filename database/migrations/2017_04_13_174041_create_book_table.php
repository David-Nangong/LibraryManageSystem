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
            $table->string('id')->primary();
            $table->string('name');
            $table->string('author')->nullable();
            $table->string('synopsis',256)->nullable();
            $table->text('introduction')->nullable();
            $table->string('publisher')->nullable();
            $table->date('publish_date')->nullable();
            $table->dateTime('last_borrow_date')->nullable();
            $table->decimal('prize',6,2)->nullable();
            $table->string('isbn')->nullable();
            $table->string('series')->nullable();
            $table->string('owner')->nullable();
            $table->boolean('is_borrow')->default(false);
            $table->integer('borrow_times')->nullable();
            $table->boolean('is_frozen')->default(false);
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
        Schema::dropIfExists('books');
    }
}
