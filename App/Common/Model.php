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
        $sql = "SELECT $columns FROM $this->table";
        var_dump($sql);
        $result = $this->connection -> query($sql);
        return $result;
    }

    public function where($column, $operator = null, $value = null, $boolean = 'and')
    {

    }
    public function limit(){

    }
    public function  orderBy(){

    }


}

?>

