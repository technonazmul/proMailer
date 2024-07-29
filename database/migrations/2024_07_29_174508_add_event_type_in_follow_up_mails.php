<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('follow_up_mails', function (Blueprint $table) {
            $table->string('event_type')->after('time_gap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('follow_up_mails', function (Blueprint $table) {
            $table->dropColumn('event_type');
        });
    }
};
