<?php
    session_start();
    include('connection.php');

    if (!$_SESSION['id']) header("Location:index.php?login=1");

    if ($_POST['submit']) {
        $date = $_POST['date'];
    } else {
        $date = date('m/d/Y');
    }

    $ID = $_SESSION['id'];
    $table = 'journal'.$ID;

    $date_mm = date('m');
    $date_dd = date('d');
    $date_yy = date('Y');
    
    $query = "SELECT * FROM ".$table." WHERE date = '".$date."' LIMIT 1";

    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_array(mysqli_query($link, $query));

    if(!$row){
        $query = "INSERT INTO `".$table."` (`date`) VALUES ('".$date."')";
        mysqli_query($link, $query);
        $query = "SELECT * FROM ".$table."WHERE date = '".$date."' LIMIT 1";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array(mysqli_query($link, $query));
    }
    
    $data = $row['ENTRY'];

