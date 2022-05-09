<?php
function server(){
    $server = "localhost";
    $user = "Rebel";
    $password = "kingnii100";
    $dbname = "bookstore";

    //connect to server
    $db = @new mysqli($server,$user,$password);
    //error handling
    if($db->connect_error){
        exit("can't connect");
    }

    //create new database
    $sql ="CREATE DATABASE IF NOT EXISTS $dbname ";

    if($db->query($sql)){
        $db = @new mysqli($server,$user,$password,$dbname);

        //create table
        $sql = "
        CREATE TABLE IF NOT EXISTS books(
          id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
          book_name VARCHAR(25) NOT NULL,
          book_publisher VARCHAR(30),
          book_price FLOAT 
        );
        
        ";
        //error handling
        if($db->query($sql)){
            
        }else{
            echo "failure";
        };

    }else{
        echo "failure";
    }

}


?>