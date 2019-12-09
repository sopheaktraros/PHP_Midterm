<?php
    include_once "connection.php";
    $id = $_GET["id"];

    $query = mysqli_query($connection, "DELETE FROM demo WHERE id = $id");

    if($query == TRUE){
        header("location: index.php");
    }else{
        echo "cannot delete";
    }
?>