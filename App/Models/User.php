<?php

namespace App\Models;

use App\Common\Authentication;
use App\Common\Model;

class User extends Authentication{
    protected $table = "users";
  
   
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active',
        'id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function get_current_user_name()
    {
      
    }
    public static function get_current_id(){

    }

    public static function get_user_photo($user_id = null)
    {

      
    }


    public function get_user_image()
    {
        
    }



    public static function get_user_address($user_id = null)
    {
   
    }


    public static function get_phone_no($user_id = null)
    {
       
    }

    public function get_phone()
    {

    }

    public function get_academic_details()
    {

        
    }

  
    public static function get_specific_user_proof($user_id = null)
    {
        
    }

    public static function get_user_name($user_id = null)
    {
        
    }


    public static function get_current_user_roles_in_array()
    {

       
    }

    public static function get_current_user_roles($v_id = null)
    {
    
    }

    public static function check_if_user_has_role($role_name)
    {
        
    }

    public static function check_if_give_user_has_role($uid, $role_name)
    {
       
    }


    public static function check_if_user_has_access_to_this_std_div($cstd, $cdiv)
    {
       
    }

    public static function get_users_by_role($role_name)
    {
      
    }

    public function user_meta()
    {
    }

    public function get_property($property_name, $user_id = 0)
    {
      
    }

    public function get_course($user_id)
    {
       
    }

    public function get_year($user_id)
    {
        
    }

    public function get_users_with_role($role_name)
    {
        
    }

    public function get_active()
    {
       
    }

    public function get_in_active()
    {
        //return $this->where("active", 0);
    }

    public function get_proof()
    {
      
    }
}
