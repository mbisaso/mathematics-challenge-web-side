<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('representatives', function (Blueprint $table) {
            $table->id('representativeId');
            $table->string('name');
            $table->string('emailAddress')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('school_registration_number');
            $table->string('password');
            $table->timestamps();
            $table->foreign('school_registration_number')->references('school_registration_number')->on('schools')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('representatives');
    }
};