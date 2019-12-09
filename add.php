<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-primary text-center"><h1>Login</h1></div>
                <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                    <label><h5>Name</h5></label>
                    <input type="text" name="fullname" placeholder="Fullname" class="form-control"> 
                    </div>
                    <div class="form-group">
                    <label><h5>Password</h5></label>
                    <input type="password" name="password" placeholder="Password" class="form-control"> 
                    </div>
                    <input type="submit" name="create" value="Create" class="btn btn-block btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
   </div>
</body>
</html>
<?php
include_once "connection.php";
if(isset($_POST['create'])){
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    
    $query = mysqli_query($connection,"INSERT INTO demo(name, password) VALUES('$fullname', '$password')");
    if($query == TRUE){
        header("Location: index.php");
    }else{
        echo "Cannot Insert new record!";
    }
}
?>