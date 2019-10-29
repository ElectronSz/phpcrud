<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Advanced</title>
</head>
<body>
   <div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
        <div class="alert alert-primary" role="alert">
         PHP Date
        </div>
        <?php
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "Today is " . date("Y.m.d") . "<br>";
            echo "Today is " . date("Y-m-d") . "<br>";
            echo "Today is " . date("l");
        ?> <br>
         <?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?> 
        </div>
        <div class="col-md-6">1</div>
        <div class="col-md-4">1</div>
        
        <div class="col-md-4">1</div>
        <div class="col-md-4">1</div>
        <div class="col-md-4">1</div>

        <div class="col-md-4">1</div>
        <div class="col-md-4">1</div>
        <div class="col-md-4">1</div>
    </div>
   </div>
</body>
</html>