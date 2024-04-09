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
        Schema::create('user_check_ins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('使用者 ID');
            $table->date('date')->nullable()->comment('日期');
            $table->datetime('check_in')->nullable()->comment('刷卡 IN');
            $table->datetime('check_out')->nullable()->comment('刷卡 OUT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_check_ins');
    }
};
