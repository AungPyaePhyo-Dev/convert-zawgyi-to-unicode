<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Publisher extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'publishers';

    protected $fillable = [
        "idx",
        "gid",
        "name",
        "unicode_name",
        "unicode_status",
        "username",
        "password",
        "password_hash",
        "book_count",
        "rent_book_count",
        "phone_no",
        "contract_type",
        "start_date",
        "is_audio",
        "is_author",
        "active"
    ];
}
