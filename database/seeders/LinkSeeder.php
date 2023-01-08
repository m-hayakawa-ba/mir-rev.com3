<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Link::count() == 0) {
            Link::create([
                'name' => 'ＣｌａｓｓｉＣ思考回路',
                'link_type_id' => config('const.LINK_TYPE_ID.FRIEND'),
                'link_url' => 'http://classic-shikoukairo.jpn.org/',
                'thumbnail_path' => '/image/link_clas.jpg',
                'description' => 'クオリティの高いゲームを多数制作されていらっしゃるサークル様。新潟の期待の星です。',
                'sort_index' => 1,
            ]);
            Link::create([
                'name' => '音の杜',
                'link_type_id' => config('const.LINK_TYPE_ID.MATERIAL'),
                'link_url' => 'https://otonomori.info/',
                'thumbnail_path' => '/image/link_otom.jpg',
                'description' => '効果音に加えて、声の素材も公開されています。ティルキッスの悲鳴を使わせていただきました。',
                'sort_index' => 2,
            ]);
            Link::create([
                'name' => '音人',
                'link_type_id' => config('const.LINK_TYPE_ID.MATERIAL'),
                'link_url' => 'https://on-jin.com/',
                'thumbnail_path' => '/image/link_onji.gif',
                'description' => '多くの効果音素材が、分かりやすく分類されています。生録の効果音もたくさんあります。',
                'sort_index' => 3,
            ]);
            Link::create([
                'name' => 'ザ・マッチメイカァズ',
                'link_type_id' => config('const.LINK_TYPE_ID.MATERIAL'),
                'link_url' => 'http://osabisi.sakura.ne.jp/m2/',
                'thumbnail_path' => '/image/link_mach.png',
                'description' => '言わずと知れた効果音素材の老舗サイト。効果音素材の数は１０００を超えています！',
                'sort_index' => 4,
            ]);
            Link::create([
                'name' => 'STAR DUST素材館',
                'link_type_id' => config('const.LINK_TYPE_ID.MATERIAL'),
                'link_url' => 'http://lunar.littlestar.jp/stardust/',
                'thumbnail_path' => '/image/link_star.jpg',
                'description' => '綺麗で高クオリティの画像素材が多数公開されています。一部素材はゲームにも使用できるようです。',
                'sort_index' => 5,
            ]);
            Link::create([
                'name' => 'TAM Music Factory',
                'link_type_id' => config('const.LINK_TYPE_ID.MATERIAL'),
                'link_url' => 'https://www.tam-music.com/',
                'thumbnail_path' => '/image/link_tamm.gif',
                'description' => 'BGMと効果音の素材を公開されています。特にBGMは種類も多く、素晴らしい曲ばかりです。',
                'sort_index' => 6,
            ]);
            Link::create([
                'name' => 'propanmode',
                'link_type_id' => config('const.LINK_TYPE_ID.MATERIAL'),
                'link_url' => 'https://propanmode.net/',
                'thumbnail_path' => '/image/link_prop.gif',
                'description' => '効果音だけでなく、ループ素材や、ジングルなど、クオリティの高いデータを多数公開されています。',
                'sort_index' => 7,
            ]);
        }
    }
}
