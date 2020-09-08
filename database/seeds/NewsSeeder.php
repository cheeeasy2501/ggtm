<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\News::class, 50)->create()->each(function ($news) {
            $news->comments()->saveMany(factory(App\Models\Comment::class, 10)->make());
        });
    }
}
