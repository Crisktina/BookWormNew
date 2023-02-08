<?php

//WINDOWS
require_once("C:/xampp/htdocs/BookWormNew/controller/BookController.php");
        
// MAC
// require_once("/Applications/MAMP/htdocs/BookWormNew/controller/BookController.php");

$controller = new BookController();
$result = $controller->getBooks();
?>

<div class="grid content-center justify-center max-w-2xl pt-4 pb-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-10">
        <div class="grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-3 lg:grid-cols-4 lg:gap-y-14 lg:gap-x-12">

            <?php if ($result): ?>
                <?php foreach ($result as $book): ?>
                    <div href='#' >
                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-r-2xl drop-shadow-lg ">
                            <a href="./view/display.php/<?= $book['id'] ?>" title="View Book">
                                <img src="<?= $book['book_image'] ?>" alt="<?= $book['title'] ?> " class=" hover:opacity-75">
                            </a>
                        </div>
                        <p class="font-sans text-base font-bold pt-3">
                            <?= $book['title'] ?>
                        </p>
                        <p class="font-sans text-xs text-blue-600 pb-3">
                        <?= $book['author'] ?>
                        </p>
                        <div href='#' class="flex gap-3">
                            <a class="w-2/4 bg-orange-300 rounded-md flex items-center justify-center h-10 hover:bg-orange-400"
                                href="./editpage.php/<?= $book['id'] ?>" title="Edit Book"> <img
                                    src="./assets/images/edit.svg" alt="Edit button" class="w-6"></a>

                            <a class="w-2/4 bg-red-500 rounded-md flex items-center justify-center h-10 hover:bg-red-600"
                                href="./view/deletepage.php/<?= $book['id'] ?>" title="Delete Book" data-toggle="tooltip"> <img
                                    src="./assets/images/delete.svg" alt="Delete button" class="h-6"></a>
                        </div>
                    
                    </div>
                <?php endforeach; ?>

                <?php else : ?> 
                        <h3>there is not book</h3>
            <?php endif; ?>


        </div>
</div>