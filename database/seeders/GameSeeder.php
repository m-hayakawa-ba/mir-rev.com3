<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Game::count() == 0) {
            Game::create([
                'name' => '陰陽童子物語',
                'game_status_id' => config('const.GAME_STATUS_ID.FREE'),
                'link_path' => '/game_onm',
                'thumbnail_path' => '/image/banner_onm1.jpg',
                'description' => '怪しい世界を舞台とした、アクションパズル。プレイヤー様から作っていただいたエディットマップも公開しています。ゲームの紹介ページからダウンロードできます。',
                'sort_index' => 3,
            ]);
            Game::create([
                'name' => 'ティルキッス ～Princess Shade～',
                'game_status_id' => config('const.GAME_STATUS_ID.FREE'),
                'link_path' => '/game_tir',
                'thumbnail_path' => '/image/banner_tir1.jpg',
                'description' => 'ファンタジー世界を舞台とした、弾幕アクションＲＰＧ。フリーソフトとして公開中です。ゲームの紹介ページ内に、ダウンロードページへのリンクがあります。',
                'sort_index' => 2,
            ]);
            Game::create([
                'name' => 'プリンセスシェイド リビジョン',
                'game_status_id' => config('const.GAME_STATUS_ID.DEVELOP'),
                'link_path' => '/game_psr',
                'thumbnail_path' => '/image/banner_psr1.jpg',
                'description' => '幻想の世界「セルフィア大陸」を舞台とした、弾幕アクションＲＰＧ第二弾。現在鋭意開発中です。',
                'sort_index' => 1,
            ]);
        }
    }
}
