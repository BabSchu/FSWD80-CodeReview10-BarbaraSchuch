<?php

##### TODO: Validation 
##### TODO: fix -> type and status are not updated

require_once "inc/connect.php";
$title = "inc/a_update";

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
$id = $_POST['id'];

// echo $status;
// echo $type;
// echo "<h1 class='text-danger'>".$status."</h1>";


//mysql update statement
$sql = "UPDATE `media` 
        SET 
            `ISBN/EAN/GTIN` = '$ISBN',
            `title` = '$title', 
            `img` = '$img', 
            `author_firstname` = '$author_firstname', 
            `author_lastname`= '$author_lastname', 
            `description` = '$description', 
            `publish_date` = '$publish_date', 
            `publisher_name` = '$publisher_name', 
            `publisher_size` = '$publisher_size', 
            `publisher_adress` = '$publisher_adress', 
            `type` = `type`, 
            `status` = '$status'
        WHERE
            `ID` = $id";

//executes update statement
if ($conn->query($sql) === TRUE) {
    echo "<h1 class='success m-4'> Record updated successfully </h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

### Using JS to redirect after 5 sec.

// echo
// "<script>
// setTimeout(function () {
//     window.location.href= 'insert.php';
// }, 5000);
// </script>"

#### Using PHP to redirect immediatly
//header('location: insert.php');
?>

    <a class="btn btn-info m-4" href="catalogue.php" role="button">Back</a>

<?php
include "inc/footer.php";
?>