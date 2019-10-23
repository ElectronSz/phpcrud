<?php
//start an existing or new session
session_start();

//check if session['user'] exist
if(isset($_SESSION['user'])){

    //redirect user to landing page
    header("location:index.php");

    //exit proccesses
    die();
 }

//require config for db connection
require_once("config.php");
   
//execute when form submit button is clicked
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
      
      //sql string
      $sql = "SELECT `username`, `password` FROM `users` WHERE `username` = '$myusername' AND `password` = '$mypassword'";
      
      //create query to database ['result']
      $result = mysqli_query($link,$sql);

      //fetch the user related to the info provided & decode to objects of an array
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      //count the rows returned
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {

        //set the current user to a session using [$_POST['username']]
        //$_SESSION['user'] = $mypassword;

         //set the current user to a session using one form db['username']]
         $_SESSION['user'] = $row['username'];

         //set a cookie to track user
        //  $cookie_value = $row;
        //  setcookie("user_cookie", $cookie_value, time()+3600, $myusername, "localhost", 1, 1);

         //redirect user to landing page
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Sign In User</h2>
                    </div>
                    <p>Please fill this form and submit to sign in to the system.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group ">
                            <label>Username</label>
                            <input type="email" name="username" required class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" required class="form-control">
                            <span class="help-block"></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Sign In">
                        <span> Don have account? please <a href="register.php" class="">Sign Up</a> here.</span>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>