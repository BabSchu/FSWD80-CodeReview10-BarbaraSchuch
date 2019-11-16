<?php
require_once "inc/connect.php";
$title = "Delete";

require_once "inc/head.php";
include "inc/header.php";
?>
    <div class="text-center m-5">
    <?php 
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $sql = "DELETE FROM `media` WHERE id = $id";
            if(mysqli_query($conn ,$sql)){
                echo "<h1 class='text-danger'>Record Deleted</h1> 
                <a href='catalogue.php'><button type='button' class='btn btn-info mt-4'>Back</button></a>";
            }
        }
    ?>
    </div>

<?php
include "inc/footer.php";
?>