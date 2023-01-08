<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GameStatus;

class GameStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (GameStatus::count() == 0) {
            GameStatus::create([
                'id'   => config('const.GAME_STATUS_ID.DEVELOP'),
                'name' => '開発中',
            ]);
            GameStatus::create([
                'id'   => config('const.GAME_STATUS_ID.SALE'),
                'name' => '販売中',
            ]);
            GameStatus::create([
                'id'   => config('const.GAME_STATUS_ID.FREE'),
                'name' => '無料公開中',
            ]);
            GameStatus::create([
                'id'   => config('const.GAME_STATUS_ID.NOPUBLIC'),
                'name' => '公開終了',
            ]);
        }
    }
}
