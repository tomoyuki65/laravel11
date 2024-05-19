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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->integer('member_id')->unique()->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->datetimes();
            $table->softDeletesDatetime();
            $table->unique(['email', 'deleted_at'], 'unique_email_deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
