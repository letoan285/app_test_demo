<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function getResult(Request $request)
    {
    	$text = $request->text;
    	$sub_text = $request->sub_text;


    	dd($text);

    	return view('welcome', compact('text'));
    }

    public function getSearchResult(Request $request)
    {
    	dd($request);
    }
}
