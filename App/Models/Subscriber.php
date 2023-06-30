<?php

namespace App\Models;


use App\Common\Model;
use Illuminate\Notifications\Notifiable;

class Subscriber extends Model
{
    //
    use CustomCache,Notifiable;
    protected $guarded = ["id"];
}
