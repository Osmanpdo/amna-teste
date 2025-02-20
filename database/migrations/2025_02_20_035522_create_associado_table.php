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
        Schema::create('associado', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->date('association_date');
            $table->enum('status', ['Active', 'Inactive']);
            $table->foreign('user_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associado');
    }
};