<?php
   include("config.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // age,username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']);
      $myage = mysqli_real_escape_string($link,$_POST['age']);  
      
      
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
                            <input type="email" name="name" class="form-control">
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
                        
                        <input type="submit" class="btn btn-primary" value="Sign In">
                        <span> Already have account? please <a href="login.php" class="">Sign In</a> here.</span>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>