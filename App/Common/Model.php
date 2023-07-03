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
    
    public function get(...$columns)
    {
        if (empty($columns)) {
            $columns = ['*']; // Select all columns
        } elseif (count($columns) === 1 && is_array($columns[0])) {
            $columns = $columns[0]; // Select specific columns
        }

        $this->connection = new Connection();
        $col = implode(', ', $columns);
        $sql = "SELECT $col FROM $this->table";
        $sql .= $this->query;
        $result = $this->connection->query($sql);
        
        var_dump(($sql));
        return $result;
    }

    public function where($columns = [], $operators = [], $values = [])
    {
        if (count($columns) !== count($operators) || count($columns) !== count($values)) {
            echo "<script>alert('Number of columns, operators, and values must be the same');</script>";
            return $this;
        }
        if (empty($this->query)) {
            $this->query .= " WHERE ";
        } else {
            $this->query .= " AND ";
        }
    
        $conditions = [];
        for ($i = 0; $i < count($columns); $i++) {
            $column = $columns[$i];
            $operator = $operators[$i];
            $value = $values[$i];
            $condition = "$column $operator '$value'";
            $conditions[] = $condition;
        }
    
        $this->query .= implode(' AND ', $conditions);
        return $this;
    }
    public function limit($count)
    {
        $this->query .= " LIMIT $count";
        var_dump($this->query);
        return $this;
    }
    public function orderBy($order)
{
    if (empty($this->query)) {
        $this->query .= " ORDER BY ASC";
    } else {
        $this->query .= " ORDER BY ";
    }

    $this->query .= $order;
    return $this;
}


}

?>

