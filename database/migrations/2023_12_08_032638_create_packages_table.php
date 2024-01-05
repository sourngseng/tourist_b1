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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name')->nullable();
            $table->bigInteger('location_id')->nullable();
            $table->string('description')->nullable();
            $table->longText('detail')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('durations')->nullable();
            $table->integer('guest')->nullable();
            $table->boolean('status')->default(true);
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
