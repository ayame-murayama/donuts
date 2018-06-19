<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donut extends Model
{
    protected $fillable = ['name','title','content','tag','category','user_id'];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
