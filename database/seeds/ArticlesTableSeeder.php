<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <10; $i++) {
            $article = new Article();
            $article->title = $faker->sentence(3);
            $article->subtitle = $faker->paragraph(2);
            $article->author = $faker->name();
            $article->content = $faker->text(800);
            $article->publication_date = $faker->dateTime();
            $article->save();
        }
    }
}
