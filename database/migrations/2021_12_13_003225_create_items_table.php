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
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('title', 100);
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->string('sku');
            $table->string('picture');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['title', 'sku']);
            $table->index(['title']);
            $table->foreign('company_id')->references('id')->on('categories')->onUpdate('cascade');
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
