<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $guarded = [
        'id', 'created_at ', 'updated_at','user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
        public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
