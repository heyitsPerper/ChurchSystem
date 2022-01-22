<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baptismal extends Model
{
    use HasFactory;
    protected $table = 'baptismal';
    public $timestamps = false;

    protected $fillable=[
        'child_name',
        'birth_date',
        'birth_place',
        'legitimate_ill',
        'mother_name',
        'father_name',
        'address',
        'baptism_date',
        'minister',
        'sponsors',
        'status'
    ];

}
