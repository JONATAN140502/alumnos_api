<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    
    protected $fillable = ["nombres","apellidos","dni", "codigo","estado","escuela_id"];

    // public function getCourses()
    // {
    //     return $this->hasMany(Course::class, 'category_id','id')
    //     ->where('state','ACTIVE');
    // }
}
