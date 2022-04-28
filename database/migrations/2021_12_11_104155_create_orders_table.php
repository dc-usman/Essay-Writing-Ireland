<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country');
            $table->string('paper_type');
            $table->string('paper_topic');
            $table->string('language')->nullable();
            $table->integer('reference');
            $table->string('subject_area');
            $table->string('style');
            $table->string('academic_level');
            $table->integer('number_of_pages');
            $table->string('deadline');
            $table->tinyInteger('spacing')->default(1);
            $table->double('cost_per_page', 8,2);
            $table->double('total_price', 8,2);
            $table->mediumText('detail')->nullable();
            $table->boolean('is_complete')->default(false);
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
        Schema::dropIfExists('orders');
    }
}
