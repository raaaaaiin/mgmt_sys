<?php

namespace App\Models;

use App\Common\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BookMeta Extends Model
{
public $timestamps = true;//meta has
// views
// borrower
// clicked
// visitorcount
// read

   
   
    protected $table = "book_metas";
    protected $fillable = ["meta_value","meta_key","unique_id",];


    
}
