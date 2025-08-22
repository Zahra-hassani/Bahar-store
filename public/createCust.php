<?php
include "connect.php";
$commond= "CREATE TABLE customers(id INT(11) NOT NULL AUTO_INCREMENT,name VARCHAR(50) NOT NULL, address_province VARCHAR(30) NOT NULL, address_district VARCHAR(20) NOT NULL, address_town VARCHAR(20) NOT NULL,product_id INT NOT NULL,amount INT NOT NULL,price INT NOT NULL,sales_date DATETIME DEFAULT CURRENT_TIME,PRIMARY KEY (id),FOREIGN KEY (product_id) REFERENCES products (id))";
if ($connect->query($commond)=== true) {
    echo "table customers created successfully";
}
else{
    echo "can not create table";
}


?>