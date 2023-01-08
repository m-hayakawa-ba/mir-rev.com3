<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Game;
use App\Models\History;
use App\Models\LinkType;

class MirRevController extends Controller
{
    /**
     * コンストラクタ
     */
    function __construct(
        private Game $gameModel,
        private History $historyModel,
        private LinkType $linkTypeModel,
    ) {

    }

    /**
     * トップページ
     */
    public function index()
    {
        //必要なデータを取得
        $games = $this->gameModel->orderBy('sort_index')->get();
        $histories = $this->historyModel->orderBy('created_at', 'desc')->get();

        //ビューにデータを渡す
        return Inertia::render('Index', compact(
            'games',
            'histories',
        ));
    }

    /**
     * ゲーム
     */
    public function game()
    {
        //必要なデータを取得
        $games = $this->gameModel->orderBy('sort_index')->get();

        //ビューにデータを渡す
        return Inertia::render('Game', compact(
            'games',
        ));
    }

    /**
     * リンク
     */
    public function link()
    {
        //必要なデータを渡す
        $link_types = $this->linkTypeModel
            ->with(['links' => function ($query) {
                $query->orderBy('sort_index');
            }])
            ->get();

        return Inertia::render('Link', compact(
            'link_types',
        ));
    }

    /**
     * プロフィール
     */
    public function profile()
    {
        return Inertia::render('Profile');
    }
}
