<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered_Users extends Model
{
    use HasFactory;
    protected $table = 'consumers';
    public $timestamps = false;

    public function fullName()
    {
        return $this->firstname . " " . $this->lastname;
        // return Str::title($this->firstname) ." ". Str::title($this->lastname);
    }
}
