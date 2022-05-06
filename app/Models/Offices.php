<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = [
        'location',
        'min_amount',
        'max_amount'
    ];

}
