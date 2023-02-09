<?php
require_once "config.php";
 
$title = $author = $ISBN = $description = $book_image ="";
$title_err = $author_err = $ISBN_err = $description_err = $book_image_err = "";
 
if(isset($_POST["id"]) && !empty($_POST["id"])){

    $id = $_POST["id"];
    
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";     
    } else{
        $title = $input_title;
    }

    $input_author = trim($_POST["author"]);
    if(empty($input_author)){
        $author_err = "Please enter an author.";
    } elseif(!filter_var($input_author, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $author_err = "Please enter a valid author.";
    } else{
        $author = $input_author;
    }

    $input_ISBN = trim($_POST["ISBN"]);
    if(empty($input_ISBN)){
        $ISBN_err = "Please enter a ISBN.";     
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
        $book_image_err = "Please enter a book image.";     
    } else{
        $book_image = $input_book_image;
    }
    
    if(empty($title_err) && empty($author_err) && empty($ISBN_err) && empty($description_err) && empty($book_image_err)){

        $sql = "UPDATE books SET title=:title, author=:author, ISBN=:ISBN, description=:description, book_image=:book_image
        WHERE id=:id";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":title", $param_title);
            $stmt->bindParam(":author", $param_author);
            $stmt->bindParam(":ISBN", $param_ISBN);
            $stmt->bindParam(":description", $param_description);
            $stmt->bindParam(":book_image", $param_book_image);
            $stmt->bindParam(":id", $param_id);
            
            $param_title = $title;
            $param_author = $author;
            $param_ISBN = $ISBN;
            $param_description = $description;
            $param_book_image = $book_image;
            $param_id = $id;
            
            if($stmt->execute()){
                ?>
                <script>
                    swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your book has been updated.',
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
} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);
        
        $sql = "SELECT * FROM books WHERE id = :id";
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":id", $param_id);
            
            $param_id = $id;
            
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    $title = $row["title"];
                    $author = $row["author"];
                    $ISBN = $row["ISBN"];
                    $description = $row["description"];
                    $book_image = $row["book_image"];
                } else{
                    echo "More than one book is attempting to be changed";
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        unset($stmt);
        unset($pdo);
    }  else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>


