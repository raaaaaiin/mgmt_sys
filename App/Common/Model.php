<?php

namespace App\Common;

use App\Common\Connection;

abstract class Model{
    protected $connection;
    protected $query;
    protected $table;

    public function __constructor(){
        $this->connection = new Connection();
    }

    public function table($columns = ['']){
    }
    
    public function get($columns = ['*'])
    {

        $this->connection = new Connection;
        $col =  implode(',', $columns);
        $sql = "SELECT $col FROM $this->table";
        $result = $this->connection -> query($sql);
        return $result;
    }

    public function where($column= [''], $operator= [''], $value = [''])
    {
        
    }
    public function limit($count){
            
    }
    public function  orderBy($orde){

    }


}

?>

