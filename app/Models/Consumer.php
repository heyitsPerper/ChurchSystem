<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class Consumer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'purok',
        'contact_number',
        'email',
        'password'
    ];

    public function fullName()
    {
        return $this->firstname . " " . $this->lastname;
        // return Str::title($this->firstname) ." ". Str::title($this->lastname);
    }

    public function prettyPurok()
    {
        return Str::title($this->purok);
    }
}
