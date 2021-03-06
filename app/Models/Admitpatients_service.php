<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admitpatients_service extends Model
{
    use HasFactory;
    protected $table='admitpatients_service';
    protected $guarded=[];


    public function admitpatients(){
        return $this-> belongsTo(Admitpatients::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
