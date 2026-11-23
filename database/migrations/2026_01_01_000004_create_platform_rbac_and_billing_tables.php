<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $prefix = config('platform-settings.table_prefix', 'ps_');

        if (!Schema::hasTable($prefix . 'plans')) {
            Schema::create($prefix . 'plans', function (Blueprint $table) {
                $table->id();
                $table->string('code', 64)->unique();
                $table->string('name', 120);
                $table->unsignedBigInteger('monthly_price_minor')->default(0);
                $table->unsignedBigInteger('annual_price_minor')->default(0);
                $table->unsignedSmallInteger('trial_days')->default(14);
                $table->unsignedSmallInteger('grace_days')->default(3);
                $table->unsignedInteger('max_users')->default(5);
                $table->unsignedInteger('max_sites')->default(1);
                $table->unsignedInteger('max_domains')->default(1);
                $table->unsignedInteger('storage_quota_mb')->default(1024);
                $table->json('modules')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable($prefix . 'discount_campaigns')) {
            Schema::create($prefix . 'discount_campaigns', function (Blueprint $table) {
                $table->id();
                $table->string('title', 160);
                $table->string('code', 64)->unique();
                $table->string('type', 16)->default('percent'); // percent | fixed
                $table->unsignedBigInteger('value');
                $table->unsignedBigInteger('max_discount_minor')->default(0);
                $table->string('validity_mode', 24)->default('absolute');
                $table->timestamp('starts_at')->nullable();
                $table->timestamp('ends_at')->nullable();
                $table->unsignedInteger('relative_days')->default(0);
                $table->unsignedBigInteger('min_purchase_minor')->default(0);
                $table->unsignedInteger('total_usage_limit')->default(0);
                $table->unsignedInteger('used_count')->default(0);
                $table->unsignedInteger('per_user_limit')->default(1);
                $table->boolean('first_purchase_only')->default(false);
                $table->boolean('renewal_allowed')->default(true);
                $table->boolean('stackable')->default(false);
                $table->json('eligible_plan_codes')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        $prefix = config('platform-settings.table_prefix', 'ps_');
        Schema::dropIfExists($prefix . 'discount_campaigns');
        Schema::dropIfExists($prefix . 'plans');
    }
};
