<?php
include "connect.php";

if (isset($_GET['id'])) {
    $id= $_GET['id'];
    
    $commond= "DELETE FROM products WHERE id='$id'";
    if ($connect->query($commond)===true) {
        header("location:readPro.php");
    }
    else {
        header("location:readPro.php");
    }
}

?>