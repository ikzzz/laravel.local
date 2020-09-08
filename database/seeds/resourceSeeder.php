<?php

use Illuminate\Database\Seeder;

class resourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = [
            [
                'resource' => 'https://lenta.ru/rss/news',
            ],
            [
                'resource' => 'https://news.yandex.ru/auto.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/auto_racing.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/army.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/gadgets.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/index.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/martial_arts.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/communal.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/health.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/games.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/internet.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/cyber_sport.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/movies.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/cosmos.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/culture.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/championsleague.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/music.rss',
            ],
            [
                'resource' => 'https://news.yandex.ru/nhl.rss',
            ],

        ];

        DB::table('resources')->insert($resource);
    }
}
