<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Class\Game;

Route::post('/score-word', [Game::class, "scoreWord"]);

