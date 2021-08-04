<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addot extends Model
{
    use HasFactory;
    protected $fillable=['Patient_name','date','time'];
}
