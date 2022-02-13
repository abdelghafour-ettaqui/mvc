<?php

require_once '../app/core/connection.php';

class student extends Connection {
    public function getAllstudent(){  
        $sql="SELECT * FROM student";
        $result=$this->connect()->query($sql);
        $numRows=$result->num_rows;
        if($numRows>0){
            while ($row = $result->fetch_assoc()){
                $student[] = $row;    
            }
        }
        return $student;
    }
}
