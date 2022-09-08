<?php
    $connection = mysqli_connect("localhost", "root", "", "adminpanel");

    $query = "SELECT * FROM teamimages";
    $query_run = mysqli_query($connection,$query);
    $colCount = 0;
    $teamImages = array();
    while($row = mysqli_fetch_array($query_run)){
         $teamImages[0] = $row['team1'];
         $teamImages[1] = $row['team2'];
         $teamImages[2] = $row['team3'];
         $teamImages[3] = $row['team4'];
         $teamImages[4] = $row['team5'];
         $teamImages[5] = $row['team6'];
         $teamImages[6] = $row['team7'];
         $teamImages[7] = $row['team8'];
         $teamImages[8] = $row['team9'];
         $teamImages[9] = $row['team10'];
         $teamImages[10] = $row['team11'];
         $teamImages[11] = $row['team12'];
         $teamImages[12] = $row['team13'];
         $teamImages[13] = $row['team14'];
         $teamImages[14] = $row['team15'];
         $teamImages[15] = $row['team16'];
         $teamImages[16] = $row['team17'];
         $teamImages[17] = $row['team18'];
         $teamImages[18] = $row['team19'];
         $teamImages[19] = $row['team20'];
         $teamImages[20] = $row['team21'];
         $teamImages[21] = $row['team22'];
         $teamImages[22] = $row['team23'];
         $teamImages[23] = $row['team24'];
     }
?>