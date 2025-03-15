<?php

class Model {
    public $connection;
    public function __construct(){
        $this->connection = new mysqli("localhost","root","","marchmvc");
        // if(isset($this->connection)){
        //     echo "db connected";
        // }
        // else{
        //     echo "db error";
        // }
    }

    public function insertData($table,$insertArray){
        //insert into table (col1,col2)values('val1','val2');
       $key = implode(",", array_keys($insertArray));
       $value = implode("','",array_values($insertArray));
       $query = "insert into $table ($key) values('$value')";
        $res = $this->connection->query($query);
        return $res;
        
    }

    public function selectData($table){
        $query = "select * from $table";
        $res=$this->connection->query($query);
        while($row=$res->fetch_object()){
            $rw[]=$row;
        }
        return $rw ?? [];
    }
    
}

?>