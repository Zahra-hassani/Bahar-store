<?php
include "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <a href="insertCust.php" class="bg-sky-500 rounded-l-md p-4 absolute top-24 right-0 animate-move">➕</a>
    <nav class="h-20 w-full bg-gray-300 flex justify-between items-center gap-5 px-4 shadow-xs shadow-gray-800">
        <h1 class="text-3xl font-arial bg-clip-text text-transparent font-black bg-white bg-linear-60 from-white from-50% to-sky-600 to-50% bg-size-[400%] bg-right text-shadow-xs animate-bg-change">BAHAR STORE</h1>
        <ul class="flex justify-between items-center gap-4">
            <li class="font-bold p-3"><a href="readPro.php" class="0">Products</a></li>
            <li class="font-bold p-3 relative after:content-[''] after:h-[3px] after:w-full after:absolute after:bottom-0 after:left-0 after:rounded-full after:bg-sky-500"><a href="readCust.php" class="">Customers</a></li>
            <li class="font-bold p-3"><a href="" class="">Lone</a></li>
            <li class="font-bold p-3"><a href="" class="">Employee</a></li>
            <li class="font-bold p-3"><a href="" class="">Yearly expences</a></li>
        </ul>
    </nav>
    <?php
    $selection= "SELECT * FROM customers";
    $selectedData= $connect->query($selection);
    if($selectedData->num_rows>0){
        echo "<table class='bg-gray-50 mx-auto my-5 text-center'>";
        echo "<tr>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white rounded-tl-md'>ID</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Name</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Home address</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Product ID</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Amount</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Price</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Sales Date</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Delete</th>";
        echo "<th class='px-3 py-1 bg-sky-500 font-bold text-white'>Update</th>";
        echo "</tr>";
        while ($row= $selectedData->fetch_assoc()) {
            echo "<tr class='odd:bg-gray-50 even:bg-gray-300'>";
            echo "<td class='px-3 py-1 text-center'>".$row['id']."</td>";
            echo "<td class='px-3 py-1 text-center'>".$row['name']."</td>";
            echo "<td class='px-3 py-1 text-center'>".$row['address_province'].",".$row['address_district'].",".$row['address_town']."</td>";
            echo "<td class='px-3 py-1 text-center'>".$row['product_id']."</td>";
            echo "<td class='px-3 py-1 text-center'>".$row['amount']."</td>";
            echo "<td class='px-3 py-1 text-center'>".$row['price']."</td>";
            echo "<td class='px-3 py-1 text-center'>".$row['sales_date']."</td>";
            echo "<td class='px-3 py-1 text-center'><a href='deleteCust.php?id=".$row['id']."'>Delete</a></td>";
            echo "<td class='px-3 py-1 text-center'><a href='updateCust.php?id=".$row['id']."'>Update</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    ?>
</body>
</html>