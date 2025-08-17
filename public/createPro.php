<?php
include "connect.php";
$commond= "CREATE TABLE products(id int(11) not null auto_increment,name varchar(50) not null,amount int not null,total_price int not null,importation_date datetime,primary key (id))";
if($connect->query($commond)===true){
    echo "products table is created successfully";
}
?>
