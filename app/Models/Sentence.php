<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    protected $fillable = ['sentence', 'correct_order'];

    protected $casts = [
        'correct_order' => 'array'
    ];
}
