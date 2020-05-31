<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount', 'paid_at'
    ];

    protected $dates = ['paid_at'];
}
