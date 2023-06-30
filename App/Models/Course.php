<?php

namespace App\Models;



use App\Common\Model;

class Course extends Model
{
    //
   
    //use SoftDeletes;
    protected $table = "course";
    protected $fillable = ["name"];



}
