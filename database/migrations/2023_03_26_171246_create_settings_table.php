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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('latiude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('currency')->nullable();
            $table->text('about')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('admins')->nullOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('settings');
    }
};