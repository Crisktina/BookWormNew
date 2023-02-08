<?php

// WINDOWS

include ("C:/xampp/htdocs/BookWormNew/view/header.php");
include("C:/xampp/htdocs/BookWormNew/view/create_button.php");

  

//   <!-- MAC -->
//   include ("/Applications/MAMP/htdocs/BookWormNew/view/header.php") 
//   include ("/Applications/MAMP/htdocs/BookWormNew/view/create_button.php")


require_once("C:/xampp/htdocs/BookWormNew/controller/BookController.php");
        
// MAC
// require_once("/Applications/MAMP/htdocs/BookWormNew/controller/BookController.php");

$controller = new BookController();
$result = $controller->deleteBook($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Delete Book</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>

<form action="" method="post" class="flex justify-center">
    <div class="bg-orange-300 p-10 m-10 rounded-md ">
        <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
        <p class="font-sans text-lg text-white font-bold text-shadow">Are you sure you want to delete this book from the database?</p>
        <div class="flex gap-4 mt-2">
            <button type="submit" class="bg-red-600  text-white font-sans font-bold mt-4 w-20 h-10 rounded-md flex justify-center items-center hover:bg-red-700">Yes</button>
            <a href="index.php" class="bg-blue-500  text-white font-sans font-bold mt-4 w-20 h-10 rounded-md flex justify-center items-center hover:bg-blue-600" >No</a>
        </div>
    </div>
</form>

</body>
</html>