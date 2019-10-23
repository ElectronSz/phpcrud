<?php
session_start();
//check if session['user'] exist
if(isset($_SESSION['user'])){

    //redirect user to landing page
    header("location:index.php");

    //exit proccesses
    die();
 }
 
   include("config.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // age,username and password sent from form 
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']);
      $age = mysqli_real_escape_string($link,$_POST['age']);  
      
      //sql string
      $sql = "INSERT INTO `users` (`username`, `password`, `age`) VALUES ('".$myusername."','".$mypassword."', '".$age."')";
    
      $query = mysqli_query($link, $sql);
      
    if ($query) {
           
    //login user
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

         //redirect user to landing page
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }

        mysqli_close($link);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Sign Up</title>
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
                        <h2>Sign Up User</h2>
                    </div>
                    <p>Please fill this form and submit to sign up user to the system.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group ">
                            <label>Username</label>
                            <input type="email" name="username" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <span class="help-block"></span>
                        </div>
                       <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Sign Up">
                        <span> Already have account? please <a href="login.php" class="">Sign In</a> here.</span>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>