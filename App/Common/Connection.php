<?php
class Connection{
    public $connectionString;
    public $dataSet;
    private $sqlQuery;

    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $password;
    public function __construct()
    {
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;
        $this -> databaseName = "library_dept_school";
        $this -> hostName = "127.0.0.1";
        $this -> userName = "root";
        $this -> password = "";
    }

    function dbConnect()    {
        $this -> connectionString = mysqli_connect($this -> hostName,$this -> userName,$this -> password,$this -> databaseName);
        return $this -> connectionString;
    }
    public function query($query)
    {
        return $this->connectionString->query($query);
    }

}
