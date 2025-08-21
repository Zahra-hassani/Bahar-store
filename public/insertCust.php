<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer registration</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="relative h-screen w-full bg-linear-120 from-gray-50 from-50% to-cyan-600 to-50% bg-size-[250%] bg-right animate-bg-change">
    <h1 class="absolute top-4 left-5 -z-10 text-3xl uppercase font-arial bg-clip-text text-transparent font-black bg-white bg-linear-60 from-white from-50% to-sky-600 to-50% bg-size-[400%] bg-right text-shadow-xs animate-bg-change ">Bahar Store</h1>
    <div class="h-full w-full flex justify-center items-center z-50">
    <div class="h-[65%] w-[55%] bg-cyan-600 flex justify-center items-center rounded shadow-md shadow-gray-500">
    <form class="h-full w-[50%] flex flex-col gap-3 p-4 bg-gray-50 rounded" action=<?php  echo $_SERVER["PHP_SELF"]  ?> method="post">
        <h1 class="text-center font-extrabold text-2xl py-3">Registering customers</h1>
        <input type="text" name="name" placeholder="Name" class="py-2 px-3 rounded-md shadow-xs shadow-gray-400 focus:outline-0 focus:shadow-0 focus:border-b-2 focus:border-b-cyan-600">
        <div class="h-fit w-full grid grid-cols-3 grid-rows-1">
            <input type="text" name="add_pro" placeholder="Province" class="py-2 px-3 rounded-md shadow-xs shadow-gray-400 focus:outline-0 focus:shadow-0 focus:border-b-2 focus:border-b-cyan-600">
            <input type="text" name="add_dis" placeholder="District" class="py-2 px-3 rounded-md shadow-xs shadow-gray-400 focus:outline-0 focus:shadow-0 focus:border-b-2 focus:border-b-cyan-600">
            <input type="text" name="add_town" placeholder="Town" class="py-2 px-3 rounded-md shadow-xs shadow-gray-400 focus:outline-0 focus:shadow-0 focus:border-b-2 focus:border-b-cyan-600">
        </div>
        <input type="number" name="product_id" placeholder="Product id" class="py-2 px-3 rounded-md shadow-xs shadow-gray-400 focus:outline-0 focus:shadow-0 focus:border-b-2 focus:border-b-cyan-600">
        <input type="number" name="amount" placeholder="Amount" class="py-2 px-3 rounded-md shadow-xs shadow-gray-400 focus:outline-0 focus:shadow-0 focus:border-b-2 focus:border-b-cyan-600">
        <input type="number" name="price" placeholder="Price" class="py-2 px-3 rounded-md shadow-xs shadow-gray-400 focus:outline-0 focus:shadow-0 focus:border-b-2 focus:border-b-cyan-600">
        <button class="px-6 py-1 text-white text-xl font-bold text-center bg-cyan-600 rounded">Save</button>
    </form>
    <div class="h-full w-[50%]">
        <img src="../public/img/images (8).jpeg" class="h-full w-full" alt="">
    </div>
    </div>
    </div>
</body>
</html>