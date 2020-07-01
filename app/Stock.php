<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Bet;

class Stock extends Model
{
    protected $guarded = [
        'id', 'created_at ', 'updated_at',
    ];
    
    public function bets()
    {
        return $this->hasMany(Bet::class);
    }
}
