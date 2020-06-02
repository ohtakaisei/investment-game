<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stock;

class StockController extends Controller
{
    public function index()
    {
        $stock = Stock::lastInsertId();

        return view('stock.index', [
            'stock' => $stock,
        ]);
    }
}
