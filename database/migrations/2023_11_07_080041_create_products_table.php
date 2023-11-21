<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('prodNo');
            $table->string('category', 30);
            $table->string('category2', 30)->nullable();
            $table->string('name', 200);
            $table->decimal('price', 10, 2)->nullable();
            $table->string('img', 300)->nullable();
            $table->text('description')->nullable();
            $table->integer('size')->nullable();
            $table->string('color', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
