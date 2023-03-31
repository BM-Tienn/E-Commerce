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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code', 255)->unique();
            $table->decimal('coupon_value', 10, 2);
            $table->enum('coupon_type', ['percent', 'fixed_amount']);
            $table->date('coupon_start_date');
            $table->date('coupon_end_date');
            $table->decimal('coupon_min_spend', 10, 2);
            $table->decimal('coupon_max_spend', 10, 2);
            $table->integer('coupon_uses_per_customer');
            $table->integer('coupon_uses_per_coupon');
            $table->enum('coupon_status', ['active', 'expired', 'disabled']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
