<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)
                  ->unique();
            $table->text('description');
            $table->foreignId('category_id')
                  ->unsigned()
                  ->constrained('categories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->decimal('price', $precision = 10, $scale = 2)
                  ->unsigned();
            $table->integer('quantity')->unsigned();
            $table->string('sku')->unique();
            $table->string('picture');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['title', 'sku']);
            $table->index(['title']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
