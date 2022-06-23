<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('size', 255);
            $table->string('weight', 255);
            $table->string('code', 255);
            $table->string('slug', 255)->unique();
            $table->text('description', )->nullable();
            $table->unsignedInteger('quantity');
            $table->float('price');
            $table->boolean('featured')->default(0);
            $table->integer('category_id')->nullable()->references('id')->on('categories')->onDelete('CASCADE');
            $table->integer('collection_id')->nullable()->references('id')->on('collections')->onDelete('CASCADE');
            $table->integer('metal_id')->references('id')->on('metals')->onDelete('CASCADE');
            $table->float('discount');
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
};
