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
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->smallInteger('water')->default(0);
            $table->smallInteger('milk')->default(0);
            $table->smallInteger('espresso')->default(0);
            $table->smallInteger('cream')->default(0);
            $table->smallInteger('chocolate')->default(0);
            $table->smallInteger('whipped_cream')->default(0);
            $table->smallInteger('syrup')->default(0);
            $table->smallInteger('frothed_milk')->default(0);
            $table->smallInteger('whiskey')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beverages');
    }
};
