<?php

namespace App\Models;

use App\Common\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserDataMeta extends Model
{
   
   
    protected $table = "user_datametas";
    public $timestamps = true;
    protected $guarded = ["id"];

    public function getSearchesRecomendation($userid = null)
    {
        if (!isset($userid)) {
            $tmp = UserDataMeta::where("meta_key", "Searches")->get();
        } else {
            $tmp = UserDataMeta::where("meta_key", "Searches")->where("user_id", $userid)->get();
        }
        return $tmp ? $tmp->meta_value : "";


    }

    
}
