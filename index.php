<?php
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
    include('php/register.php');
    
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
        
        <!-- bootstrap links -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="styles/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <!--pages css-->
        <link rel="stylesheet" href="styles/style.css">
        <script type="text/javascript" src="js/moment.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        
        <div class='navbar navbar-default navbar-fixed-top'>
            <div class='container'>
                <div class='navbar-header'>
                    <a class='navbar-brand pull-left'>Cloud Journal</a>
                    <button class='navbar-toggle collapsed pull-right' data-target='#collapse' data-toggle='collapse' type='button'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                </div>
                
                <div id='collapse' class='collapse navbar-collapse pull-right'>
                    <form class='navbar-form navbar-right' method="post">
                        <div class='form-group'>
                            <input class='form-control' type='email' name='loginemail' id='loginemail' placeholder='email' />
                            <input class='form-control' type='password' name='loginpassword' id='loginpassword' placeholder='password' />
                        </div>
                        <input class='btn btn-default' type="submit" name='submit' value="Login" />
                    </form>
                </div>
            </div>
        </div>
        
        <div class='container-fluid jumbotron-fluid'>
            <div class='spacer'></div>
            <div class='container main'>
                <h1>Private Diary</h1>
                <p>Welcome to my mySQL challenge. This page uses a database to allow you to register and login to view and keep your very own private diary. This website uses a combination of HTML, CSS, Bootstrap, PHP, Javascript, JQuery and mySQL to accomplish this task. Please register below to create an account. Already registered? click here to access your journal:</p>
                <div class='row'>
                    <div class='col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3'>
                        
                        <?php
                            if ($error) {
                                echo "<div class='alert alert-danger' id='error'>".addslashes($error)."</div>";
                            }
                        
                            if ($message) {
                                echo "<div class='alert alert-success' id='error'>".addslashes($message)."</div>";
                            }
                        
                        ?>
                        
                        <form method="post">
                            <fieldset class="form-group">
                                <div class='form-group'>
                                    <label class='sr-only' for='name'>Name</label>
                                    <input type="text" class='form-control' id='name' name="name" placeholder="Name" value=<?php echo "'".addslashes($_POST['name'])."'"?>>
                                </div>
                                <div class='form-group'>
                                    <label class='sr-only' for='email'>eMail</label>
                                    <input type='email' class='form-control' id='email' name="email" placeholder="eMail Address" value=<?php echo "'".addslashes($_POST['email'])."'"?>>
                                </div>
                                <div class='form-group'>
                                    <label class='sr-only' for='password'>Password</label>
                                    <input type="password" class="form-control" id='password' name="password" placeholder="Password" value=<?php echo "'".addslashes($_POST['password'])."'"?>>
                                </div>
                                <div class='form-group'>
                                    <label class='sr-only' for='confirm'>Confirm Password</label>
                                    <input type='password' class='form-control' id='confirm' name='confirm' placeholder="Confirm Password" value=<?php echo "'".addslashes($_POST['confirm'])."'"?>>
                                </div>
                                <input type="submit" class='form-control btn btn-success pull-left' id='submit' name='submit' value='Register'>
                            </fieldset>
                        </form>
                    </div>
                </div>
                
            </div>
                 
        </div>
        
    </body>
</html>