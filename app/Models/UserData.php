<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{

    protected $table = 'user_data';


    protected $fillable = [
        'date',
        'electricity',
        'water',
        'gas',
        'amount',
        'due_date',
        'user_id',
    ];

}
