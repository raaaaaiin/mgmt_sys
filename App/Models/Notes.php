<?php

namespace App\Models;

use App\Common\Model;

class Notes extends Model
{
    protected $table = "notes";
    protected $guarded = ["id"];
    protected $casts = ["files_attached" => "array"];

 
}
