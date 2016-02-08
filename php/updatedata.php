<?php

    session_start();
    include('connection.php');

    $date = $_POST['date'];
    $ID = $_SESSION['id'];
    $table = 'journal'.$ID;
    
    $query = "UPDATE `".$table."` SET `ENTRY` = '".mysqli_real_escape_string($link, $_POST['data'])."' WHERE `DATE` = '".$date."' LIMIT 1";

    mysqli_query($link, $query);

?>