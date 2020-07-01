<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stock;

use App\User;

use App\Bet;

class StockController extends Controller
{
    public function index()
    {
        $stock = Stock::orderBy('created_at', 'desc')->first();
       $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $bets = $user->bets()->orderBy('created_at', 'desc')->paginate(10);
            
        
        return view('stocks.index', [
            'stock' => $stock,
            'user' => $user,
            'bets' => $bets,
        ]);
        }
    }
}
