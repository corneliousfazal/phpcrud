<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];
    if(is_numeric($_GET["id"])){
        $con = mysqli_connect("localhost","root","","db33");
        $result = $con->query("select * from users where id=$id");

        if($result->num_rows > 0){

            if($con->query("delete from users where id=$id")){
                header("location:index.php");
            }
        }
    }else{
        echo "wrong id";
    }
}else{
    echo "error";
}
?>