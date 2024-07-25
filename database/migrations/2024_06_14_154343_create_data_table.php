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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('company_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('event_type')->nullable();
            $table->string('event_type_id')->nullable();
            $table->string('event_date')->nullable();
            $table->string('venue_address')->nullable();
            $table->text('likes_deslikes')->nullable();
            $table->string('notes')->nullable();
            $table->string('campaign_ids')->nullable();
            $table->boolean('status')->default(1);
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
