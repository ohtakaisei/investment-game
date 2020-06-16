<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Bet;

use App\Stock;

class JudgeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'judge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//         $judges = Bet::find($user_id); //判定するBetを決める

// $user = User::find($user_id); //判定するユーザー

// 　$old_stocks = Stock::　//現在ジャッジしているBetの時の株価を入れる

// $new_stocks = Stock::orderBy('created_at', 'desc')->first('price');　　　　//現在の株価

// $old_time = $judges->created_at;　　　//Betの作成日

// $direction = $judges->direction; //ベットの方向

// $point = $judges->point; //ベットのポイント

// $new_time = Stock::orderBy('created_at', 'desc')->first('created_at');　//現在の時間

// ＊2　if ($old_timeの30分後 = $new_time) {
//     if ($direction == up && $new_stocks > $old_stocks) {
//         $answer = "あなたの回答は正解です！";                            //正解コール格納
//         $user->update(['point' => $point + $user->point]);
        
//         return view('stocks.stock', [
//              'answer' => $answer,
//             ])
//     }
//     }
}
}