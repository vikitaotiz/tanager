<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorymenu()
    {
        return $this->belongsTo(Categorymenu::class);
    }
}
