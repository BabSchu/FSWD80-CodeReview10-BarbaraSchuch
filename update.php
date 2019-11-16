<?php

##### TODO: Validation 
##### TODO: fix -> type and status are not updated

$title = "Update";

require_once "inc/head.php";
include "inc/header.php";
require_once "inc/connect.php";

if(isset($_GET["id"])){
  $id = $_GET["id"];
  $sql = "SELECT * FROM media WHERE id = $id ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}
$id = $_GET['id'];

// echo "<h1 class='text-danger'>".$row['status']."</h1>";
// echo $row['type'];
?>
    <div class="container-fluid my-5">
        <form method="POST" action="a_update.php"> 
            <div class="form-group m-5 row">
                <label class="col-sm-2 col-form-label"for="id">ID</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="id" name="id" readonly value="<?php echo $id ?>">
                <label class="col-sm-2 col-form-label">ISBN/EAN/GTIN</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="isbn_gtin" name="isbn_gtin" placeholder="ISBN/EAN/GTIN" value="<?php echo $row['ISBN/EAN/GTIN'] ?>">
                <label class="col-sm-2 col-form-label">Title</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="title" name="title" placeholder="Title" value="<?php echo $row['title'] ?>">
                <label class="col-sm-2 col-form-label">Author Firstname</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="author_firstname" name="author_firstname" placeholder="Firstname" value="<?php echo $row['author_firstname'] ?>">
                <label class="col-sm-2 col-form-label">Author Lastname</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="author_lastname" name="author_lastname" placeholder="Lastname" value="<?php echo $row['author_lastname'] ?>">
                <label class="col-sm-2 col-form-label">Publisher</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="publisher" name="publisher" placeholder="Publisher" value="<?php echo $row['publisher_name'] ?>">
                <label class="col-sm-2 col-form-label">Publisher Adress</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="publisher_adress" name="publisher_adress" value="<?php echo $row['publisher_adress'] ?>" placeholder="Streetname, Nr., ZIP-Code, City">
                <label class="col-sm-2 col-form-label">Publisher Size</label>
                <select class="form-control col-sm-10 mb-4" id="publisher_size" name="publisher_size" value="<?php echo $row['publisher_size'] ?>">
                    <option></option>
                    <option>small</option>
                    <option>medium</option>
                    <option>big</option>
                </select>
                <label class="col-sm-2 col-form-label">Image URL</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="img_url" name="img_url" value="<?php echo $row['img'] ?>" placeholder="https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_1280.jpg">
                <label class="col-sm-2 col-form-label">Description</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="description" name="description" placeholder="Description" value="<?php echo $row['description'] ?>">
                <label class="col-sm-2 col-form-label">Publish Date</label>
                <input type="date" class="form-control col-sm-10 mb-4" id="publish_date" name="publish_date" placeholder="Description" value="<?php echo $row['publish_date'] ?>">
                <label class="col-sm-2 col-form-label">Type</label>
                <select class="form-control col-sm-10 mb-4" id="type" name="type" value="<?php echo $row['type'] ?>">
                    <option></option>
                    <option>book</option>
                    <option>cd</option>
                    <option>dvd</option>
                    <option>ebook</option>
                    <option>software</option>
                </select>
                <label class="col-sm-2 col-form-label">Status</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="status" name="status" placeholder="availale" value="<?php echo $row['status'] ?>">
                
                <!-- <div id="status" class="d-block">
                    <label>Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="<?php echo $row['status'] ?>" id="available">
                        <label class="form-check-label" for="available">
                        available
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="<?php echo $row['status'] ?>" id="reserved">
                        <label class="form-check-label" for="reserved">
                        reserved
                        </label>
                    </div>
                </div> -->
            </div>
            <div class="d-flex justify-content-center">
                <Input type="submit" class="btn btn-info mx-2 mb-5" value="Enter">
                <button type="reset" class="btn btn-outline-info mx-2 mb-5">Reset</button>
            </div>
        </form>
    </div>
<?php
include "inc/footer.php";
