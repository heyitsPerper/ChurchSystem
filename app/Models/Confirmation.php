<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    use HasFactory;
    protected $table = 'confirmation';
    public $timestamps = false;

    protected $fillable = [
        'child_name',
        'baptism_date',
        'baptism_place',
        'mother_name',
        'father_name',
        'address',
        'confirmation_date',
        'minister',
        'sponsors',
        'status'
    ];
}
