<?php
    include_once "connection.php";

    $query = mysqli_query($connection,"SELECT * FROM demo");
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
        <a href="add.php" class="btn btn-primary ">Add New Contact</a>
        <table class="table table-bordered mt-3">
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php
            while($result = mysqli_fetch_array($query))
            {
            ?>
                <tr>
                    <td><?php echo $result['id'];?></td>
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['password'];?></td>
                    <td><a href="edit.php?id=<?php echo $result ["id"];?>" class="btn btn-primary">EDIT</a>  
                    <a href="delete.php?id=<?php echo $result ["id"];?>" class="btn btn-danger" onClick="return confirm('Are you sure to delete?')">DELETE</a></td>
                </tr>
            <?php 
            }
            ?>
        </table>
        </div>
    </div>
    </body>
    </html>