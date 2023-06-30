<?php

namespace App\Models;

use App\Common\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserMeta extends Model
{
   
   
    protected $table = "user_metas";
    protected $guarded = ["id"];
    public $timestamps = true;
    public function get_address()
    {
      
    }

    public function get_phone()
    {
    }

    public function get_education()
    {
      
    }

    public function get_about_me()
    {
      
    }
    public function get_gender()
    {
        
    }

    public function get_assign()
    {
       
    }

    public function get_user_photo()
    {
       
    }
    //1 = everyone
    //2 = witincoure
    //3 = withinyear
    //4 = withinsection
    //5= Only me
    public function getprivacysearch($userid){
          
    }
    public function getprivacyborrow($userid){
    }
    public function getprivacyprofile($userid){
    }
    public function getprivacyleaderboard($userid){
    }
    public function getprivacyfuture($userid){
    }
    public function getgeneralprivacy($userid){
    }
    public function systempermission($userid){
    }
    
}
