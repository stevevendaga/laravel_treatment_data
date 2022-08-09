<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treatment_data extends Model
{
    use HasFactory;
    protected $fillable = ['data1',
    'data2',
    'data3',
    'data4',
    'data5',
    'winning_company',
    'data7',
    'date',
    'amount',
    'cpv',
    'data11',
    'data12',
    'data13'
    ];   
}
