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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('abha_number')->digits(16);
            $table->string('doctor');
            $table->string('hospital');
            $table->string('disease');
            $table->string('symptoms');
            $table->string('tests');
            $table->integer('weight');
            $table->string('meds');
            $table->boolean('admit');
            $table->integer('days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
