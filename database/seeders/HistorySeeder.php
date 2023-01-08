<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\History;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (History::count() == 0) {
            History::create([
'content'   => "「プリンセスシェイド リビジョン」
　 開発ブログ 更新

「ティルキッス～PrincessShade～」
　 ご案内 更新",
'created_at' => '2016-12-31 00:00:00',
'updated_at' => '2016-12-31 00:00:00',
            ]);
            History::create([
'content'   => "「プリンセスシェイド リビジョン」
　 開発ブログ 更新

「ティルキッス～PrincessShade～」
　 フリーソフトとして公開開始",
'created_at' => '2017-12-31 00:00:00',
'updated_at' => '2017-12-31 00:00:00',
            ]);
            History::create([
'content'   => "「プリンセスシェイド リビジョン」
　 開発ブログ 更新",
'created_at' => '2018-12-31 00:00:00',
'updated_at' => '2018-12-31 00:00:00',
            ]);
        }
    }
}
