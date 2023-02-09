<?php

//WINDOWS
// require_once("C:/xampp/htdocs/BookWormNew/controller/BookController.php");
        
// MAC
require_once("/Applications/MAMP/htdocs/BookWormNew/controller/BookController.php");

$controller = new BookController();
$result = $controller->displayBooks($_GET['$id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Display bookworms</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/main.css">
  </head>
<body>
  <?php include "./header.php" ?>
  <div class="flex flex-col place-content-center items-center">
    <div href='#' class="p-5 flex flex-col justify-center items-center  lg:p-10 lg:w-3/4">
        <div class='flex  overflow-hidden rounded-r-2xl drop-shadow-lg my-6 lg:w-72 '>
        <img src='<?php echo $result["book_image"]?>' alt='<?php echo $result["title"] ?>' class='box-content'>
        </div>
        <div class="w-full">
        <p class='font-sans text-lg font-bold pt-3'><?php echo $result["title"]; ?></p>
        <p class='font-sans text-sm text-blue-600 pb-4'><?php echo $result["author"]; ?></p>
        <p class="font-sans text-sm pb-4">ISBN <?php echo $result["ISBN"]; ?></p>
        <p class="font-sans text-sm pb-10"><?php echo $result["description"]; ?></p>
        </div>
        <div class='flex w-full gap-3 pb-10'>
            <a title='Edit Book' class='w-2/4 h-14 bg-orange-300 rounded-md flex items-center justify-center  hover:bg-orange-400' href='editpage.php?id=<?php echo $id?>' > <img src='./assets/images/edit.svg' alt='Edit button' class='h-8'></a>

            <a href='deletepage.php?id=<?php echo $id ?>' class='w-2/4 h-14 bg-red-500 rounded-md flex items-center justify-center hover:bg-red-600'> <img src='./assets/images/delete.svg' alt='Delete button' class='h-8'></a>
        </div>
    </div>
    </div>
</body>
</html>