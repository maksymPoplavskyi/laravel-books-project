<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'books';

    public $timestamps = false;
}
