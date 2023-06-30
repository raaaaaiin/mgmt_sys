<?php

namespace App\Models;

use App\Common\Model;

class Payment extends Model
{
    protected $table = "payments";
    protected $guarded = ["id"];
    
}
