<?php
require_once "inc/connect.php";
$title = "Add";

require_once "inc/head.php";
include "inc/header.php";
?>

<div class="container-fluid my-4">
        <form method="POST" action="a_addEntry.php"> 
            <div class="form-group m-2 row">
                <label class="col-sm-2 col-form-label">ISBN/EAN/GTIN</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="isbn_gtin" name="isbn_gtin" placeholder="ISBN/EAN/GTIN">
                <label class="col-sm-2 col-form-label">Title</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="title" name="title" placeholder="Title">
                <label class="col-sm-2 col-form-label">Author Firstname</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="author_firstname" name="author_firstname" placeholder="Firstname">
                <label class="col-sm-2 col-form-label">Author Lastname</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="author_lastname" name="author_lastname" placeholder="Lastname">
                <label class="col-sm-2 col-form-label">Publisher</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="publisher" name="publisher" placeholder="Publisher">
                <label class="col-sm-2 col-form-label">Publisher Adress</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="publisher_adress" name="publisher_adress" placeholder="Streetname, Nr., ZIP-Code, City">
                <label class="col-sm-2 col-form-label">Publisher Size</label>
                <select class="form-control col-sm-10 mb-4" id="publisher_size" name="publisher_size">
                    <option>small</option>
                    <option>medium</option>
                    <option>big</option>
                </select>
                <label class="col-sm-2 col-form-label">Image URL</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="img_url" name="img_url" placeholder="https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_1280.jpg">
                <label class="col-sm-2 col-form-label">Description</label>
                <input type="text" class="form-control col-sm-10 mb-4" id="description" name="description" placeholder="Description">
                <label class="col-sm-2 col-form-label">Publish Date</label>
                <input type="date" class="form-control col-sm-10 mb-4" id="publish_date" name="publish_date" placeholder="Description">
                <label class="col-sm-2 col-form-label">Type</label>
                <select class="form-control col-sm-10 mb-4" id="type" name="type">
                    <option>book</option>
                    <option>cd</option>
                    <option>dvd</option>
                    <option>ebook</option>
                    <option>software</option>
                </select>
                <div id="status" class="d-block">
                    <label>Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="available" id="available">
                        <label class="form-check-label" for="available">
                        available
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="reserved" name="status" id="reserved">
                        <label class="form-check-label" for="reserved">
                        reserved
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pb-4">
                <button type="submit" class="btn btn-info mx-2">Enter</button>
                <button type="reset" class="btn btn-outline-info mx-2">Reset</button>
            </div>
        </form>

<?php
$conn->close();
?>

</div>
<?php
include "inc/footer.php";
?>
