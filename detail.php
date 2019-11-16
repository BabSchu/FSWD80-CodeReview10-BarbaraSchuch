<?php

require_once "inc/connect.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM media WHERE id = $id ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
$id = $_GET['id'];

$title = "Home".$row['title'];
require_once "inc/head.php";
include "inc/header.php";

?>

  <div class="row m-0 p-1">
    <div class="col-2 bg-dark text-light p-4">
      <a href="catalogue.php" class="d-flex text-light">
      <i class="fas fa-arrow-circle-left mr-2"></i>
        <p>Back</p>
      </a>
      <div></div>
    </div>

    <div class="col-10">
<!--Mediadetail from Database-->
        <div class="card m-3 shadow p-3 mb-5 bg-white rounded border-0">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo $row['img'] ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title'] ?></h5>
                        <h6 class="card-title"><?php echo $row['author_firstname']." ".$row['author_lastname'] ?></h6>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <div class="row">
                            <p class="card-text col-4">
                                <small class="font-weight-bold d-block">Published</small>
                                <small class="text-muted"><?php echo $row['publish_date'] ?></small>
                            </p>
                            <p class="card-text col-4">
                                <small class="font-weight-bold d-block">Publisher</small>
                                <small class="text-muted"><?php echo $row['publisher_name'] ?></small>
                            </p>
                            <p class="card-text col-4">
                                <small class="font-weight-bold d-block">ISBN/GTIN</small>
                                <small class="text-muted"><?php echo $row['ISBN/EAN/GTIN'] ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div><!---row end--->

<?php
$conn->close();
include "inc/footer.php";
?>
