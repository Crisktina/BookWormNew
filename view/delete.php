

<?php include "../view/header.php" ?>

<form action="" method="POST" class="flex justify-center">
    <div class="bg-orange-300 p-10 m-10 rounded-md ">
       
        <p class="font-sans text-lg text-white font-bold text-shadow">Are you sure you want to delete this book from the database?</p>
        <div class="flex gap-4 mt-2">
            <button type="submit" class="bg-red-600  text-white font-sans font-bold mt-4 w-20 h-10 rounded-md flex justify-center items-center hover:bg-red-700">Yes</button>
            <a href="../index.php" class="bg-blue-500  text-white font-sans font-bold mt-4 w-20 h-10 rounded-md flex justify-center items-center hover:bg-blue-600" >No</a>
        </div>
    </div>
</form>

</body>
</html>

<?php

// WINDOWS
// require_once("C:/xampp/htdocs/BookWormNew/controller/BookController.php");
  
//  MAC 
require_once("/Applications/MAMP/htdocs/BookWormNew/controller/BookController.php");

$controller = new BookController();
$result = $controller->deleteBook($_GET['id']);
?>