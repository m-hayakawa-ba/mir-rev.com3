<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MirRevController extends Controller
{
    /**
     * トップページ
     */
    public function index()
    {
        return Inertia::render('Index');
    }

    /**
     * ゲーム
     */
    public function game()
    {
        return Inertia::render('Game');
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
