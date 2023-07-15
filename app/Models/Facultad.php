<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    
    use HasFactory;

    protected $fillable = ["nombre", "codigo","estado"];

    // public function getCourses()
    // {
    //     return $this->hasMany(Course::class, 'category_id','id')
    //     ->where('state','ACTIVE');
    // }
}
