<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bet;

use App\Stock;

use Illuminate\Support\Facades\Auth;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bet = new Bet;
        
        return view('stocks.create', [
            'bet' => $bet,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bet = new Bet;
        $stock = Stock::orderBy('created_at', 'desc')->first();
        $bet->bets_point = $request->bets_point;
        $bet->direction = $request->direction;
        $bet->user_id = Auth::user()->id;
        $bet->stock_id = $stock->id;
        $bet->save();
        
       return view("stocks.complete", [
            "bet" => $bet,
            ]);
    }
    
   
    
    
}
