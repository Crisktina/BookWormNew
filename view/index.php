<?php
require_once "../controller/BookController.php";
$controller = new BookController();
$result = $controller->getBooks();
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
    <title>Bookworms library</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
    <div class="grid content-center justify-center max-w-2xl pt-4 pb-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-10">
        <div class="grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-3 lg:grid-cols-4 lg:gap-y-14 lg:gap-x-12">

            <?php if ($result): ?>
                <?php foreach ($result as $book): ?>


                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-r-2xl drop-shadow-lg ">
                        <a href="./displaypage.php?id=<?= $book['id'] ?>" title="View Book" data-toggle="tooltip">
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
                            href="./editpage.php?id=<?= $book['id'] ?>" title="Edit Book"> <img
                                src="./assets/images/edit.svg" alt="Edit button" class="w-6"></a>

                        <a class="w-2/4 bg-red-500 rounded-md flex items-center justify-center h-10 hover:bg-red-600"
                            href="./deletepage.php?id=<?= $book['id'] ?>" title="Delete Book" data-toggle="tooltip"> <img
                                src="./assets/images/delete.svg" alt="Delete button" class="h-6"></a>
                    </div>


                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>