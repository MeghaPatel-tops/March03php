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

    public function selectDataJoin($table,$join){

        $query = "select * from $table";//join category on category.cid=product.catid
        foreach($join as $key=>$value ){
            $query .= " join ".$key ." on ".$value;
        }
        $res=$this->connection->query($query);
        while($row=$res->fetch_object()){
            $rw[]=$row;
        }
        return $rw ?? [];
    }
    public function selectDataJoinWhere($table,$join,$where){

        $query = "select * from $table ";//join category on category.cid=product.catid
        foreach($join as $key=>$value ){
            $query .= " join ".$key ." on ".$value;
        }
        $query.= " where 1=1  ";
        foreach($where as $key => $value){
            $query.= " AND ".$key ." = '". $value ."'";
        }
        $res=$this->connection->query($query);
        while($row=$res->fetch_object()){
            $rw[]=$row;
        }
        return $rw ?? [];
    }


    public function deleteData($table,$where){
        //delete from table where id=1;
        //where =[id=1]
        $query = "delete from $table where 1=1";
        foreach($where as $key => $value){
            $query.= " AND ".$key ." = '". $value ."'";
        }
        $res = $this->connection->query($query);
        return $res;

    }

    public function findOne($table,$where){
        //delete from table where id=1;
        //where =[id=1]
        $query = "select * from $table where 1=1";
        foreach($where as $key => $value){
            $query.= " AND ".$key ." = '". $value ."'";
        }
        $res = $this->connection->query($query);
        $rw= $res->fetch_object();
        return $rw ?? [];

    }
    public function findById($table,$where){
        //delete from table where id=1;
        //where =[id=1]
        $query = "select * from $table where 1=1";
        foreach($where as $key => $value){
            $query.= " AND ".$key ." = '". $value ."'";
        }
        $res = $this->connection->query($query);
        while($row=$res->fetch_object()){
            $rw[]=$row;
        }
        return $rw ?? [];

    }

    public function updateData($table,$setArray,$where){
        //update table set col=val,col=val where id=1;
        $query = "update $table set ";
       echo  $count = count($setArray);
        $i=0;
        foreach($setArray as $key => $value){
            if($i < $count-1){
                $query.= "  ".$key ." = '". $value ."',";
            }
            else{
                $query.= "  ".$key ." = '". $value ."' ";
            }
            $i++;
            
        }
        $query.= " where 1=1";
        foreach($where as $key => $value){
            $query.= " AND ".$key ." = '". $value ."'";
        }
        $res = $this->connection->query($query);
        return $res;
    }
    
}

?>