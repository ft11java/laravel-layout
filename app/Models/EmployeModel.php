<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeModel extends Model
{
    protected $table='employe';
    protected $fillable=['name','lastname','telefon','email','bilgi','created_at','updated_at'];
}
