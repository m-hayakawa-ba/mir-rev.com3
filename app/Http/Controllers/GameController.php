<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Inertia\Inertia;

class GameController extends Controller
{
    public function index(){
        return Inertia::render('Game/Index',[
            'games' => Game::all()
        ]);
    }
}
