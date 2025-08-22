<?php
include "connect.php";

if(isset($_GET['id'])){
    $id = $_GET["id"];
    
    $commond= "DELETE FROM customers WHERE id = '$id'";
    if($connect->query($commond)===true){
        header("location:readCust.php");
    }
    else{
        header("location:readCust.php");
    }
}


?>