<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Stock; 

class StockCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getnikkei';

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
        $stockapi = file_get_contents('https://api.matumo.com/kabu/kabu_ave_realtime_api_v1.php?type=1');
        $row_array = explode(",", $stockapi);
        $stock = new Stock;
        $stock->price = $row_array[4];
        $stock->save();
        }
}
