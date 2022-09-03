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
            $table->integer('ply_id');
            $table->double('commission_rate');
            $table->double('discount_rate');
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->string('currency');
            $table->string('developer_name');
            $table->string('publisher_name');
            $table->string('merchant_id',190)->default(null);
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
