<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('setting_audit_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actor_id')->nullable();
            $table->string('actor_role', 64)->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('scope', 32)->default('platform');
            $table->string('group_name', 64);
            $table->string('setting_key', 100);
            $table->string('old_value_masked')->nullable();
            $table->string('new_value_masked')->nullable();
            $table->string('reason', 500)->nullable();
            $table->timestamps();

            $table->index(['group_name', 'created_at'], 'audit_logs_group_created_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('setting_audit_logs');
    }
};
