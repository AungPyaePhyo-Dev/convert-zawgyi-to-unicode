<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Reader extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'readers';

    protected $fillable = [
        "id",
        "status",
        "image",
        "name",
        "unicode_name",
        "unicode_status"
    ];

}