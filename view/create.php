<?php

// WINDOWS
// require_once("C:/xampp/htdocs/BookWormNew/controller/BookController.php");
  
//  MAC 
require_once("/Applications/MAMP/htdocs/BookWormNew/controller/BookController.php");

// $controller = new BookController();
// $result = $controller->createBook($_GET['id']);
?>

<?php include "./header.php" ?>

<div class="w-full flex flex-col items-center">
  <div class="my-6 w-5/6">
    <div class="flex mb-1.5">
      <img src="../assets/images/icon_book.png" alt="Book icon" class="mr-2">
      <p class="font-sans text-blue-600 font-bold text-base">Let's create a new book!</p>
    </div>
    <div class="bg-red-600 py-0.5 rounded-md"></div>
  </div>

  <form action="#" method="POST" class = "mt-2 w-5/6">
      <div class="grid gap-5">
          <input required type="text" name="title" autofocus="autofocus" placeholder="Title" class="border border-solid border-blue-600 bg-yellow-50 rounded-md placeholder:text-blue-400 placeholder:text-sm placeholder:font-bold placeholder:font-sans p-2 w-full" title= "Please type the TITLE of the book." >

          <input required type="text" name="author" placeholder="Author" class="border border-solid border-blue-600 bg-yellow-50 rounded-md placeholder:text-blue-400 placeholder:text-sm placeholder:font-bold placeholder:font-sans p-2 w-full" title= "Please type a valid name for the AUTHOR of the book.">
          
          <input required type="text" name="ISBN" placeholder="ISBN" class="border border-solid border-blue-600 bg-yellow-50 rounded-md placeholder:text-blue-400 placeholder:text-sm placeholder:font-bold placeholder:font-sans p-2 w-full" title= "Please type a valid ISBN of the book. Numbers and hyphen only.">
          
          <input required type="text" name="book_image" placeholder="Image URL"  class="border border-solid border-blue-600 bg-yellow-50 rounded-md placeholder:text-blue-400 placeholder:text-sm placeholder:font-bold placeholder:font-sans p-2 w-full" title="Please type the URL of the image, include http://">
          
          <textarea required rows="4" cols="1" type="text" name="description" placeholder="Description" class="border border-solid border-blue-600 bg-yellow-50 rounded-md placeholder:text-blue-400 placeholder:text-sm placeholder:font-bold placeholder:font-sans p-2 w-full" title="Please type a DESCRIPTION of the book."></textarea> 
      </div>

      <div class="flex gap-5 mt-5 mb-5 justify-between">
        <a href="../index.php" class="w-1/2 py-2 bg-red-600 text-white text-sm text-center justify-center rounded-md border border-transparent" >Cancel</a>
        <button type="submit" class="w-1/2 py-2 bg-blue-600 text-white text-sm justify-center rounded-md border border-transparent" >Save</button>
      </div>
  </form>
</div>

</body>
</html>