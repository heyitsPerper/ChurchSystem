<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baptismal extends Model
{
    use HasFactory;
    protected $table = 'baptismal';
    public $timestamps = false;
}
