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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('bkey')->nullable();
            $table->string('time')->nullable();
            $table->string('url')->nullable();
            $table->string('dr_id')->nullable();
            $table->string('lid')->nullable();
            $table->string('amount')->nullable();
            $table->string('co_id')->nullable();
            $table->string('bstatus')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
