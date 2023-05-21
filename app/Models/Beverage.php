<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'water',
        'espresso',
        'milk',
        'cream',
        'chocolate',
        'whipped_cream',
        'syrup',
        'frothed_milk',
        'whiskey'
    ];
}
