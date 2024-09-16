<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Series extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'series';


    public $timestamps = false;
    protected $fillable = [
        'title',
        'unicode_title',
        'publisher_id',
        'status',
        'unicode_status',
        'id'
    ];
}
