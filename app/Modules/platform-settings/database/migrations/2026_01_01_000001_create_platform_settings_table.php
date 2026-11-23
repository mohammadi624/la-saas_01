<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('platform_settings', function (Blueprint $table) {
            $table->id();
            $table->string('scope', 32)->default('platform');
            $table->unsignedBigInteger('scope_id')->nullable();
            $table->string('group_name', 64);
            $table->string('setting_key', 100);
            $table->longText('setting_value')->nullable();
            $table->string('setting_type', 24)->default('string');
            $table->boolean('is_encrypted')->default(false);
            $table->string('description')->nullable();
            $table->timestamps();

            $table->unique(['scope', 'scope_id', 'group_name', 'setting_key'], 'platform_settings_unique_scope_key');
            $table->index(['group_name', 'scope'], 'platform_settings_group_scope_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('platform_settings');
    }
};
