<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treatment_data extends Model
{
    use HasFactory;
    protected $fillable = ['Data1',
    'Data2',
    'Data3',
    'Data4',
    'Data5',
    'Winning_company',
    'Data7',
    'Date',
    'Amount',
    'CPV',
    'Data11',
    'Data12',
    'Data13'
    
    ];   
    protected $casts = [
        'Date' => 'datetime:d/m/Y',
        'Data7' => 'datetime:d/m/Y',
    ];
}
