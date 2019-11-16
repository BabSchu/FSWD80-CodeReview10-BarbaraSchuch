<?php
$title = "Home";

require_once "inc/head.php";
include "inc/header.php";
require_once "inc/connect.php";
?>

  <div class="row m-0 p-1">

    <div class="col-2 bg-dark text-light p-4">
      <a href="addEntry.php" class="d-flex text-light">
        <i class="fas fa-plus-square mr-2"></i>
        <p>Add new media</p>
      </a>
      <div></div>
    </div>

    <div class="col-10">
    <!---media from database--->
    <?php

    $sql = "SELECT `id`,`img`,`title`,`author_firstname`, `author_lastname`,`publisher_name`, `type`, `status` FROM `media`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 
        "<table class='table table-striped'>
            <thead>
                <tr>
                  <th scope='col'></th>
                  <th scope='col'>Title</th>
                  <th scope='col'>Name</th>
                  <th scope='col'>Publisher</th>
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
            . $row["title"]."<a href='detail.php?id={$row["id"]}'><i class='fas fa-info-circle text-dark px-2'></i></a>". "</td><td>" 
            . $row["author_firstname"]. " " 
            . $row["author_lastname"]. "</td><td>" 
            . "<a href='publisher.php?publisher_name={$row["publisher_name"]}'class='text-dark'>".$row["publisher_name"]. "</a></td><td>"
            . $row["type"]. "</td><td>" 
            . $row["status"]."</td><td>" 
            . "<a href='a_delete.php?id={$row["id"]}'><i class='fas fa-trash text-dark'></i></a>"."</td><td>"
            . "<a href='update.php?id={$row["id"]}'><button type='button' class='btn btn-info'>Update</button></a>".
            "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

    </div>

  </div><!---row end--->

<?php
include "inc/footer.php";
?>
