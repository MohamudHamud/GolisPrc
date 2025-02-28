<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('request_forms', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable();
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->string('city')->nullable();
        $table->string('institution')->nullable();
        $table->string('project')->nullable();
        $table->text('message');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('requests');
}

};
