<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'paragref_porfolio',
        'desc_portfolio',
        'button_portfolio',
        'image_portfolio'

    ];

}
