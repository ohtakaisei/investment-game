<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Bet;

use App\Stock;

use App\User;

use Carbon\Carbon;

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
        
        
        $now_stock = Stock::latest()->first();
        $stock = Stock::whereBetween('created_at', [Carbon::now()->subMinute(1)->format('Y-m-d H:i:s'),Carbon::now()->subMinute(0)->format('Y-m-d H:i:s')])->where('is_finished',false)->first();
        $result = "";
        
        foreach($stock->bets as $bet) {
 // now_stockとbetの賭けを比較して判定
           if ($stock->price > $now_stock->price && $bet->direction == "down") {
               $user = User::where("id", $bet->user_id)->first();
               $user->point += $bet->bets_point;
               $user->save();
               $result = "お見事！当たりましたので".$bet->bets_point."ポイント追加されます";
               
           }elseif ($stock->price > $now_stock->price && $bet->direction == "up") {
               $user = User::where("id", $bet->user_id)->first();
               $user->point -= $bet->bets_point;
               $user->save();
               $result = "残念！外れましたので".$bet->bets_point."ポイント失われました";
                
           }elseif ($stock->price < $now_stock->price && $bet->direction == "up") {
               $user = User::where("id", $bet->user_id)->first();
               $user->point += $bet->bets_point;
               $user->save();
               $result = "お見事！当たりましたので".$bet->bets_point."ポイント追加されます";
                
           }elseif ($stock->price < $now_stock->price && $bet->direction == "down") {
               $user = User::where("id", $bet->user_id)->first();
               $user->point -= $bet->bets_point;
               $user->save();
               $result = "残念！外れましたので".$bet->bets_point."ポイント失われました";
                
           }elseif ($stock->price == $now_stock->price) {
               $user = User::where("id", $bet->user_id)->first();
               $ra = mt_rand(10, 1000);
               
               $user->point -= $ra;
               $user->save();
               $result = "株価が変わりませんでした".$ra."円の損失です。";
           }else {
               $result = "失敗";
           }
           $stock->is_finished = true;
    $stock->save();
    echo $result;
    }
    
}
}