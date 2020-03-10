<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    protected $dates = ['reservation_date', 'created_at'];

    protected $dateFormat = 'Y-m-d H:i';
}
