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
        Schema::create('newoffers', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('title');
            $table->string('sub_title');
            $table->text('details')->nullable();
            $table->string('author')->nullable();
            $table->string('status')->default(true);
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('newoffers');
    }
};