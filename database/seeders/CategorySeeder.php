<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'گیاهان دارویی',
                'slug' => 'herbal-medicines',
                'description' => 'انواع گیاهان دارویی و محصولات طبیعی',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'دمنوش‌ها',
                'slug' => 'herbal-teas',
                'description' => 'انواع دمنوش‌های گیاهی',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'عرقیجات',
                'slug' => 'herbal-distillates',
                'description' => 'انواع عرقیات گیاهی',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'روغن‌های گیاهی',
                'slug' => 'herbal-oils',
                'description' => 'انواع روغن‌های گیاهی و طبیعی',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'ادویه‌ها',
                'slug' => 'spices',
                'description' => 'انواع ادویه و چاشنی‌های طبیعی',
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($categories as $category) {
    Category::updateOrCreate(
        ['slug' => $category['slug']],
        $category
    );
}

    }
}
