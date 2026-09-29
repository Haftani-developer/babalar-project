<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $herbal = Category::where('slug', 'herbal-medicines')->firstOrFail();
        $tea = Category::where('slug', 'herbal-teas')->firstOrFail();
        $distillate = Category::where('slug', 'herbal-distillates')->firstOrFail();
        $oil = Category::where('slug', 'herbal-oils')->firstOrFail();
        $spice = Category::where('slug', 'spices')->firstOrFail();

        $products = [
            [
                'category_id' => $herbal->id,
                'name' => 'گل گاوزبان',
                'slug' => 'gol-gavzaban',
                'description' => 'گل گاوزبان خشک با کیفیت مناسب برای تهیه دمنوش.',
                'price' => 120000,
                'discount_price' => 99000,
                'stock' => 50,
                'image' => null,
                'is_active' => true,
            ],
            [
                'category_id' => $herbal->id,
                'name' => 'بابونه خشک',
                'slug' => 'babuneh',
                'description' => 'بابونه خشک مناسب برای تهیه دمنوش‌های گیاهی.',
                'price' => 95000,
                'discount_price' => null,
                'stock' => 40,
                'image' => null,
                'is_active' => true,
            ],
            [
                'category_id' => $tea->id,
                'name' => 'دمنوش آرامش',
                'slug' => 'aramash-herbal-tea',
                'description' => 'ترکیبی از گیاهان معطر برای تهیه یک دمنوش خوش‌عطر.',
                'price' => 180000,
                'discount_price' => 149000,
                'stock' => 30,
                'image' => null,
                'is_active' => true,
            ],
            [
                'category_id' => $distillate->id,
                'name' => 'عرق نعنا',
                'slug' => 'araq-naana',
                'description' => 'عرق نعنا با کیفیت مناسب برای مصرف روزانه.',
                'price' => 85000,
                'discount_price' => null,
                'stock' => 25,
                'image' => null,
                'is_active' => true,
            ],
            [
                'category_id' => $oil->id,
                'name' => 'روغن سیاه‌دانه',
                'slug' => 'black-seed-oil',
                'description' => 'روغن سیاه‌دانه طبیعی.',
                'price' => 220000,
                'discount_price' => 189000,
                'stock' => 20,
                'image' => null,
                'is_active' => true,
            ],
            [
                'category_id' => $spice->id,
                'name' => 'دارچین',
                'slug' => 'cinnamon',
                'description' => 'دارچین خوش‌عطر و با کیفیت.',
                'price' => 110000,
                'discount_price' => null,
                'stock' => 60,
                'image' => null,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
    Product::updateOrCreate(
        ['slug' => $product['slug']],
        $product
    );
}


    }
}
