<?php
    $connection = mysqli_connect("localhost", "root", "", "adminpanel");

    $query = "SELECT * FROM reguser";
    $query_run = mysqli_query($connection,$query);
    $colCount = 0;
?>