<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addot extends Model
{
    use HasFactory;
    // protected $fillable=['doctor_name','doctor_email','Patient_name','date','time'];
    protected $guarded=[];

    public function operation()
    {
        return $this-> belongsTo(Operation::class,'operation_name','id');
    }
}
