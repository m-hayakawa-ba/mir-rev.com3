<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Game;
use App\Models\History;

class MirRevController extends Controller
{
    /**
     * コンストラクタ
     */
    function __construct(
        private Game $gameModel,
        private History $historyModel,
    ) {

    }

    /**
     * トップページ
     */
    public function index()
    {
        return Inertia::render('Index', [
            "games" => $this->gameModel->orderBy('sort_index')->get(),
            "histories" => $this->historyModel->orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * ゲーム
     */
    public function game()
    {
        return Inertia::render('Game', [
            "games" => $this->gameModel->orderBy('sort_index')->get(),
        ]);
    }

    /**
     * リンク
     */
    public function link()
    {
        return Inertia::render('Link');
    }

    /**
     * プロフィール
     */
    public function profile()
    {
        return Inertia::render('Profile');
    }
}
