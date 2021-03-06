<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $fillable = ['name'];

    public function solutions ()
    {
        return $this->hasMany(Solution::class);
    }


    public function polls()
    {
        return $this->hasMany(Poll::class);
    }


}
