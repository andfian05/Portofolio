<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'paragref_exp',
        'fisrt_years_exp',
        'last_years_exp',
        'desc_exp'
        

    ];
}
