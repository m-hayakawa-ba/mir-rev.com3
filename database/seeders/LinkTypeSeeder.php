<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LinkType;

class LinkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (LinkType::count() == 0) {
            LinkType::create([
                'id'   => config('const.LINK_TYPE_ID.FRIEND'),
                'name' => 'ゲーム・お友達リンク',
            ]);
            LinkType::create([
                'id'   => config('const.LINK_TYPE_ID.MATERIAL'),
                'name' => '素材リンク',
            ]);
        }
    }
}
