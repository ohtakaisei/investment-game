<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stock;

class StockController extends Controller
{
    public function index()
    {
        $stock = Stock::orderBy('created_at', 'desc')->first();
        
        return view('stocks.index', [
            'stock' => $stock,
        ]);
    }
}
