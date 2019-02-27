<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Programmazione', 'Giardinaggio', 'Viaggi'];

        foreach ($categories as $category) {

          $newCategory = new Category;
          $newCategory->title = $category;
          $newCategory->slug = str_slug($category);
          $newCategory->save();
        }
    }
}
