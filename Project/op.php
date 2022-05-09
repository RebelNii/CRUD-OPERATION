<?php
//CRUD operation

require_once("./component/var.php");
require_once("./server.php");

$db=server();

if(isset($_POST["create"])){
    if(empty($_POST["book_name"]) || empty($_POST["book_publisher"]) || empty($_POST["price"])){
        echo "<br/>";
        textAlert(classmsg:'failure',msg:'Provide Data');
    }

    $bookname = addslashes($_POST["book_name"]);
    $bookpublisher = addslashes($_POST["book_publisher"]);
    $bookprice = addslashes($_POST["price"]);

    require_once("./conn.php");
    echo "<br/>";

    $sql = "INSERT INTO `books` SET `book_name`='${bookname}', `book_publisher`='${bookpublisher}', `book_price`='${bookprice}' ";

    $result = $db->query($sql);

    if($result === true){
        textAlert(classmsg:'success',msg:'Success');
    }else {
        textAlert(classmsg:'error',msg:'Provide Data');
    }
    

    $db->close();
}

function textAlert($classmsg,$msg){
    $element = "<h6 class='$classmsg'>$msg</h6>";
    echo $element;
}

?>


<?php


    if(isset($_POST["read"])){
        require_once("./conn.php");
    
        $sql = "SELECT * FROM `books`";

        $result = $db->query($sql);

        if($db->error){
            exit("SQL error");
        }

        if($result->num_rows === 0){
            echo "Database is empty";
        }

        $array = $result->fetch_array();
            
        $db->close();


    }

?>

<?php
//update content in database
if(isset($_POST["update"])){

    require_once("./conn.php");

    $bookid = addslashes($_POST["id"]);
    $bookname = addslashes($_POST["book_name"]);
    $bookpublisher = addslashes($_POST["book_publisher"]);
    $bookprice = addslashes($_POST["price"]);

    if($bookname && $bookprice && $bookpublisher){
    $sql = "UPDATE `books` SET `book_name`='$bookname',`book_publisher`='$bookpublisher',
    `book_price`='$bookprice' WHERE `id`='$bookid' ";}

    $result = $db->query($sql);
    if(!$result){
        textAlert(classmsg:'error',msg:'Failure');
    }

}


?>


<?php
//delete option
if(isset($_POST["delete"])){

    require_once("./conn.php");

    $bookid = addslashes($_POST["id"]);
    $bookname = addslashes($_POST["book_name"]);
    

    if($bookid && $bookname && $bookpublisher && $bookprice){

        $sql = "DELETE FROM `books` WHERE `book_name`='$bookname' ";
        $result = $db->query($sql);

        if(!$result){
            textAlert(classmsg:'error',msg:'Could not delete data');
        }else{
            textAlert(classmsg:'success',msg:'Data deleted');
        }

    }




}



?>