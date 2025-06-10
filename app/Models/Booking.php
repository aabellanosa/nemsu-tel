<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'room_id','customer_name','customer_email','start_date',
        'end_date', 'status'

    ];
}
