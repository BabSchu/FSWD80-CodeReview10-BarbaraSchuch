<?php
require_once "inc/connect.php";
$publisher = $_GET['publisher_name'];

$title = $publisher;

require_once "inc/head.php";
include "inc/header.php";
?>

<div class="container p-5">

<?php
        if(isset($_GET["publisher_name"])){
          $id = $_GET["publisher_name"];
          $sql = "SELECT * FROM media WHERE publisher_name = '$publisher'";
          $result = $conn->query($sql);
        }

        echo "<h3 class='text-info'>List of Media from ". $publisher ."</h3>";
            
        if ($result->num_rows > 0) {
            echo 
            "<table class='table table-striped'>
                <thead>
                    <tr>
                      <th scope='col'></th>
                      <th scope='col'>Title</th>
                      <th scope='col'>Name</th>
                      <th scope='col'>ISBN/GTIN</th>
                      <th scope='col'>Published</th>
                      <th scope='col'>Type</th>
                      <th scope='col'>Status</th>
                      <th scope='col'></th>
                      <th scope='col'></th>
                    </tr>
                </thead>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>"
                #. "<p class='d-none p-0 m-0'>".$row["id"]. "</></td><td>" 
                . "<img src=". $row["img"]." width='85'/>". "</td><td>" 
                . $row["title"]."<a href='detail.php?id={$row["ID"]}'><i class='fas fa-info-circle text-dark px-2'></i></a>". "</td><td>" 
                . $row["author_firstname"]. " " 
                . $row["author_lastname"]. "</td><td>"
                . $row["ISBN/EAN/GTIN"]. "</td><td>" 
                . $row["publish_date"]. "</td><td>"
                . $row["type"]. "</td><td>" 
                . $row["status"]."</td><td>" 
                . "<a href='delete.php?id={$row["ID"]}'><i class='fas fa-trash text-dark'></i></a>"."</td><td>"
                . "<a href='update.php?id={$row["ID"]}'><button type='button' class='btn btn-info'>Update</button></a>".
                "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

$conn->close();
?>

    <a href="catalogue.php"><button type="button" class="btn btn-dark">Back</button></a>
</div>

<?php
include "inc/footer.php";
?>
