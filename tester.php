
<?php

    session_start();
    include('php/connection.php');

    $date = $_POST['date'];
    $ID = $_SESSION['id'];
    $table = 'journal'.$ID;
    
    $query = "UPDATE `".$table."` SET `ENTRY` = '".mysqli_real_escape_string($link, $_POST['data'])."' WHERE `DATE` = '".$date."' LIMIT 1";

    echo $query;

    mysqli_query($link, $query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
    <head>
        <title>Cloud Diary</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="author" content="Clifton Choiniere for 3csOnline.com" />
        <meta name="description" content="Home page for Clifton Choiniere and 3csOnline. Providence Web and Software Developer." />
        <meta name="keywords" content="web developer, coding, javascript, php, software developer, Clifton Choiniere, 3cs, 3csonline, 3cs online" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        
        <!-- bootstrap links -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="styles/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <!--pages css-->
        <link rel="stylesheet" href="styles/style.css">
        <script type="text/javascript" src="js/moment.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script>
            $(function() {
                $( "#datepicker" ).datepicker();
            });
        </script>
        
    </head>
    <body>
        
        <div class="contatiner">
            <form method="post">
                <div class='form-group'>
                    <label for="date">date</label>
                    <input type='text' class="form-control" name='date' id='datepicker' />
                    <textarea name='data' id='page'></textarea>
                </div>
                <input type='submit' class='btn btn-default' name='submit' id='submit' value='submit' />
            </form>
        </div>
        
    </body>
</html>
