<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',20);
            $table->string('keywords',)->nullable();
            $table->string('description',)->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id',)->nullable();
            $table->integer('user_id',)->nullable();
            $table->integer('quantity',)->default(1);
            $table->integer('minquantity')->default(5);
            $table->integer('basim_tarihi')->nullable();
            $table->string('yazar_adi')->nullable();
            $table->integer('kitap_id')->nullable();
            $table->text('detail',)->nullable();
            $table->string('slug',75);
            $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('products');
    }
}
