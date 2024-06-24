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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_id');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('domain')->nullable();
            $table->string('address')->nullable();
            $table->string('mail_sender_name')->nullable();
            $table->string('smtp_username')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_host')->nullable();
            $table->string('smtp_password')->nullable();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
