<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * جدول تعریف پنل‌ها. نام با پیشوند (panel_definitions) تا با جدول‌های دیگر تداخل نکند.
 * قیمت‌ها به تومان و عدد صحیح (بدون اعشار) ذخیره می‌شوند.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('panel_definitions', function (Blueprint $t) {
            $t->id();
            $t->string('title', 100);
            $t->string('code', 40)->unique();                       // شناسهٔ لاتین، مثل basic یا pro
            $t->text('description')->nullable();
            $t->unsignedBigInteger('price_monthly')->default(0);    // تومان
            $t->unsignedBigInteger('price_yearly')->default(0);     // تومان
            $t->boolean('users_unlimited')->default(false);
            $t->unsignedInteger('max_users')->default(0);           // وقتی نامحدود نیست؛ ۰ = تک‌کاربره
            $t->json('features')->nullable();                       // فهرست امکانات (هر خط یک مورد)
            $t->boolean('is_active')->default(true);
            $t->integer('sort')->default(0);
            $t->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $t->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $t->timestamps();
            $t->softDeletes();
            $t->index(['is_active', 'sort']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panel_definitions');
    }
};
