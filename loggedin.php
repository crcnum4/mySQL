<?php

    //setcookie("id", "1234", time()+60*60*24)

    //$_COOKIE['is']

    /*
    
    if (mysqli_connect_error()) {
        die("Could not connect database");
    }

    //$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Missa', 'missa@3csonline.com', 'missa123')";

    $query = "UPDATE `users` SET `email` = 'ian@gmail.com' WHERE `id`= 2 LIMIT 1";
    mysqli_query($link, $query);

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)) {
        $row = mysqli_fetch_array($result);
        print_r($row);
    } else {
        echo"query failed";
    }
    */

    session_start();
    include('php/connection.php');
    include('php/loggedin.php');
    
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
    <head>
        <title>Cloud Journal</title>
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
        
        <!-- script for date picker-->
        <script>
            $(function() {
                $( "#datepicker" ).datepicker();
            });
        </script>
        
    </head>
    <body>
        
        <div class='navbar navbar-default navbar-fixed-top'>
            <div class='container'>
                <div class='navbar-header pull-left'>
                    <a class='navbar-brand'>Cloud Journal</a>
                </div>
                <ul class='nav navbar-nav pull-right'>
                    <li class='nav-item>'>
                        <a class='nav-link' href="index.php?logout=1">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class='container-fluid jumbotron-fluid'>
            <div class='container'>
                <div class='spacer100'></div>
                <div class='navbar navbar-inverse'>
                    <p class='navbar-brand'>Date: </p>
                    <button class='navbar-toggle collapsed pull-right' data-target='#collapse' data-toggle='collapse' type='button'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <div id='collapse' class='collapse navbar-collapse pull-right'>
                        <form method="post" class='navbar-form navbar-right'>
                            <div class='input-group'>
                                <input type='text' class="form-control" name='date' id='datepicker' placeholder='date' value=<?php echo $date ?> />
                                <span class='input-group-addon'>
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            <input type='submit' name='submit' value='Change' id='change' />
                            <a class='nav-link' href="#" data-toggle='modal' data-target='#help'>
                                <span class="glyphicon glyphicon-question-sign"></span>
                            </a>
                            
                            <!--modal-->
                            <div id='help' class="modal fade" role='dialog'>
                                <div class='modal-dialog'>
                                    
                                    <!-- model content-->
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type="button" class='close' data-dismiss='modal'>&times;</button>
                                            <h4 class='modal-title'>Using Cloud Journal</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <p>Hello and thank you for testing out my cloud journal page. This journal is very easy to use. You are already ready to use. Simply by logging into the site you've already created an entry for this day. The system also automatically saves as you type so you never have to worry about forgetting to save or loosing what you type in because you lost internet or accidentally closed the window. This simple web application is very simple to use. You can view or create new entries simply by changing the date and clicking change. This will either create the page if you have never viewed that date before or load what's already in your journal if you written stuff there before.</p>
                                            <h4>Hidden Pages</h4>
                                            <p>Even though the pages are identified by dates they are not bound to them. You can actually enter any series of numbers and slashes to create a diary entry. This in a way creates hidden pin based pages. In other words if you like the number 7575 you could enter that in the date field and the system will create a 7575 entry. This is hidden because only when that is entered manually can you pull up that page and view the content. There is no way for the date picker to pick 7575. This in a way creates a completely hidded page that even if you left your diary logged in no one would be able to find this unless you left it on that hidden page. Clicking through the dates would not allow someone to find this. Other then this their isn't much else to do explain.</p>
                                            <h4>Improvements</h4>
                                            <p>I'm always looking for challenges and ways to improve my system. If you can come up with a feature you think could be nice to enter into this website let me know and I'll see what I can do. You can submit ideas to me by going to 3csonline.com/pages/contact.php I'll be happy to listen to any ideas you can give me. Enjoy my little challenge site.</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type="button" class='btn btn-default' data-dismiss='modal'>Close</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <label class='sr-only' for='page'>Journal Page</label>
                <textarea class='form-control' id='page' name='page' placeholder="Enter whatever you want!"><?php echo $data ?></textarea>
            </div>
        </div>
        
        <script type="text/javascript">
            var $currentDate = $('#datepicker').val();
            
            $("#page").css('height', $(window).height()-200)+"px";
            
            $('#page').keyup(function(){
                $.post("php/updatedata.php", {data:$('#page').val(), date:$currentDate});
            })
            
        </script>
    </body>
</html>