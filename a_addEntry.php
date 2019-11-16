<?php

### TODO: Validation

require_once "inc/connect.php";
$title = "a_addEntry";

require_once "inc/head.php";
include "inc/header.php";

$ISBN = $_POST['isbn_gtin'];
$title = $_POST['title'];
$img = $_POST['img_url'];
$author_firstname = $_POST['author_firstname'];
$author_lastname = $_POST['author_lastname'];
$description = $_POST['description'];
$publish_date = $_POST['publish_date'];
$publisher_name = $_POST['publisher'];
$publisher_size = $_POST['publisher_size'];
$publisher_adress = $_POST['publisher_adress'];
$type = $_POST['type'];
$status = $_POST['status'];

$sql = "INSERT INTO `media`(`ISBN/EAN/GTIN`, `title`, `img`, `author_firstname`, `author_lastname`, `description`, `publish_date`, `publisher_name`, `publisher_size`, `publisher_adress`, `type`, `status`) 
VALUES ('$ISBN','$title','$img','$author_firstname','$author_lastname','$description','$publish_date','$publisher_name','$publisher_size','$publisher_adress','$type','$status')";

if ($conn->query($sql) === TRUE) {
    echo "<h1 class='text-center m-5'> New record created successfully </h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    // echo
    // "<script>
    // //Using setTimeout to execute a function after 5 seconds.
    // setTimeout(function () {
    //     //Redirect with JavaScript
    //     window.location.href= 'insert.php';
    // }, 5000);
    // </script>"
    //header('refresh:5,location: insert.php');
?>

    <div class="d-flex justify-content-center pb-4">
        <a class="btn btn-info m-5" href="addEntry.php" role="button">New Entry</a>
        <a class="btn btn-outline-info m-5" href="catalogue.php" role="button">Catalogue</a>
    </div>
<?php
include "inc/footer.php";
?>