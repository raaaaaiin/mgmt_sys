<?php

namespace App\Models;

use App\Common\Model;

class Borrowed extends Model
{
    protected $table = "borroweds";
    public $timestamps = true;
    protected $guarded = ["id"];

  

}
