<?php
require_once "config.php";
 
$ID = $title = $author = $ISBN = $description = $book_image ="";
$ID_err = $title_err = $author_err = $ISBN_err = $description_err = $book_image_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title for the book.";     
    } else{
        $title = $input_title;
    }

    $input_author = trim($_POST["author"]);
    if(empty($input_author)){
        $author_err = "Please enter an author for the book.";
    } elseif(!filter_var($input_author, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $author_err = "Please enter a valid name for the author.";
    } else{
        $author = $input_author;
    }
    
    $input_ISBN = trim($_POST["ISBN"]);
    if(empty($input_ISBN)){
        $ISBN_err = "Please enter an ISBN.";     
    } else{
        $ISBN = $input_ISBN;
    }
    
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter a description.";     
    } else{
        $description = $input_description;
    }

    $input_book_image = trim($_POST["book_image"]);
    if(empty($input_book_image)){
        $book_image_err = "Please enter an URL for the image.";     
    } else{
        $book_image = $input_book_image;
    }
    
    if(empty($title_err) && empty($author_err) && empty($ISBN_err) && empty($description_err) && empty($book_image_err)){

        $sql = "INSERT INTO books (title, author, ISBN, description, book_image) VALUES ('" . $title . "', '" . $author . "', '" . $ISBN . "', '" . $description . "', '" . $book_image . "')";
        
        if($stmt = $pdo->prepare($sql)){           
            if($stmt->execute()){
                ?>
                <script>
                    swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your book has been saved.',
                    type: 'success',
                    }).then(function (result) {
                    if (true) {
                        window.location = "index.php";
                    }
                    })
                </script>
            <?php
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        unset($stmt);
    }
    
    unset($pdo);
}
?>



