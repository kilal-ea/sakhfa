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
        Schema::create('paye', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idBon');
            $table->decimal('price');
            $table->date('Paydate');
            $table->string('type'); // cheque ou efet
            $table->timestamps();

            $table->foreign('idBon')->references('id')->on('sales'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paye');
    }
};
