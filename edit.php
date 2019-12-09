<?php
    include_once "connection.php";
    $id = $_GET["id"];

    $query = mysqli_query($connection, "SELECT * FROM demo WHERE id = $id");
    while($result = mysqli_fetch_array($query)){
?>
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
                    <input type="hidden" name="id" value="<?php echo $result ["id"];?>">
                    </div>
                    <div class="form-group">
                    <label><h4>Name</h4></label>
                    <input type="text" name="fullname" placeholder="Fullname" class="form-control" value="<?php echo $result ["name"];?>"> 
                    </div>
                    <div class="form-group">
                    <label><h4>Password</h4></label>
                    <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $result ["password"];?>"> 
                    </div>
                    <input type="submit" name="edit" value="Edit" class="btn btn-info btn-block">
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
    }

    if(isset($_POST["edit"])){
        $fullname = $_POST["fullname"];
        $password = $_POST['password'];
        $id = $_POST["id"];
    
        $update = mysqli_query($connection, "UPDATE demo SET name = '$fullname', password = '$password' WHERE id = $id");
        if($update == TRUE){
            header("location: index.php");
        }else{
            echo "Cannot Update";
        }
    }
?>