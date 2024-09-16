<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyawnaingtun\Tounicode\TounicodeTrait;

class Font extends Model
{
    use HasFactory, TounicodeTrait;
    
    protected $fillable = ['zawgyi', 'unicode', 'status'];

    protected $tounicode = ['unicode'];
}
