<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voetballer extends Model
{
    use HasFactory;

    protected $table = 'voetballer';
    public $timestamps = false;

}
