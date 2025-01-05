<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;
    protected $fillable = [
        'span_title',
        'heading_title',
        'desc_title',
        'java',
        'japanese',
        'korean',
        'arabic',
        'russian',
        'resume'

    ];
}
