<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReaderModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'readers';

    public $timestamps = false;
}
