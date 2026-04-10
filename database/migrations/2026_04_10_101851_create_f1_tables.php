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

    Schema::create('teams', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('points')->default(0);
        $table->timestamps();
    });

    Schema::create('drivers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('nationality');
        $table->integer('points')->default(0);
        $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
        $table->timestamps();
    });
}
};
