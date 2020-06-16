<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bet;

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
        
        return view('stock.create', [
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
        $bet->bets_point = $request->bets_point;
        $bet->direction = $request->direction;
        $bet->save();
        
        return view("stocks.stock", [
            "answer" => "Betを完了しました！",
            ]);
    }
    
}
