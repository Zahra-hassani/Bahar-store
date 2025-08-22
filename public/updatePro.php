<?php
include "connect.php";

if(isset($_GET['id'])){
    $id= $_GET['id'];

    $selection= "SELECT * FROM products WHERE id =".$id;
    $selectedData= $connect->query($selection);
    $row= $selectedData->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name= $_POST["name"];
    $amount= $_POST["amount"];
    $total= $_POST["total"];
    $import= $_POST["import"];

    $commond= "UPDATE products SET name='$name', amount='$amount', total_price='$total', importation_date= '$import' WHERE name='$name'";

    if ($connect->query($commond)===true) {
        header("location:readPro.php");
    }
    else {
        header("location:readPro.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Updating</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="h-screen w-full flex justify-center items-center bg-linear-180 from-sky-500 to-gray-300 from-50% to-50%">
    <div class="h-[55%] w-[53%] flex justify-between items-center rounded shadow-lg shadow-gray-400">
        <form method="post" action=<?php echo $_SERVER["PHP_SELF"] ?> class="h-full w-[50%] bg-gray-100 flex flex-col gap-3 p-3 rounded shadow-md mx-auto">
            <h1 class="text-2xl font-extrabold text-center font-sans py-4">Update Product</h1>
        <input value="<?php echo $row['name'] ?>" class="px-3 py-1 rounded focus:outline-0 shadow-md shadow-gray-300 bg-gray-50" type="text" name="name" placeholder="Product Name">
        <input value="<?php echo $row['amount'] ?>" class="px-3 py-1 rounded focus:outline-0 shadow-md shadow-gray-300 bg-gray-50" type="number" name="amount" placeholder="Amount">
        <input value="<?php echo $row['total_price'] ?>" class="px-3 py-1 rounded focus:outline-0 shadow-md shadow-gray-300 bg-gray-50" type="number" name="total" placeholder="Total Price">
        <input value="<?php echo $row['importation_date'] ?>" class="px-3 py-1 rounded focus:outline-0 shadow-md shadow-gray-300 bg-gray-50" type="date" name="import" placeholder="Importation date">
        <button class="text-white font-bold rounded border-white bg-sky-500 px-5 py-1" class="px-6">Save</button>
    </form>
    <div class="h-full w-[50%]">
        <img src="../public/img/images (6).jpeg" class="h-full w-full rounded rounded-l-none" alt="">
    </div>
    </div>
</body>
</html>