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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

    // ارتباط با دسته‌بندی
    $table->foreignId('category_id')
          ->constrained()
          ->cascadeOnDelete();

    // اطلاعات اصلی محصول
    $table->string('name', 150);
    $table->string('slug', 180)->unique();
    $table->text('description')->nullable();

    // قیمت و موجودی
    $table->decimal('price', 12, 2);
    $table->decimal('discount_price', 12, 2)->nullable();
    $table->unsignedInteger('stock')->default(0);

    // اطلاعات محصول
    $table->string('sku', 100)->unique();
    $table->string('image')->nullable();

    // وضعیت محصول
    $table->boolean('is_active')->default(true);
    $table->boolean('is_featured')->default(false);

    // تعداد بازدید
    $table->unsignedBigInteger('views')->default(0);

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
