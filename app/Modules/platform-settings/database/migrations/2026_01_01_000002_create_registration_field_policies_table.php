<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('registration_field_policies', function (Blueprint $table) {
            $table->id();
            $table->string('field_key', 64)->unique();
            $table->string('field_label', 120);
            $table->string('state', 24)->default('optional');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registration_field_policies');
    }
};
