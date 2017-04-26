<?php
$n = "";
$p = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = $_POST['n'];
    $p = $_POST['p'];

    $con = mysqli_connect("localhost","root","","db33");
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if(is_numeric($_GET["id"])){
            $con = mysqli_connect("localhost","root","","db33");
            $result = $con->query("select * from users where id=$id");
           
            if($result->num_rows > 0){
               
                if($con->query("update users set name='$n' ,password='$p' where id=$id")){
                    header("location:index.php");
                }
            }
        }else{
            echo "wrong id";
        }
    }else{
        echo "error";
    }

}else{
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if(is_numeric($_GET["id"])){
            $con = mysqli_connect("localhost","root","","db33");
            $result = $con->query("select * from users where id=$id");

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $n = $row["name"];
                $p = $row["password"];
            }
        }else{
            echo "wrong id";
        }
    }else{
        echo "error";
    }
}
?>
<form method="post" action="edit.php?id=<?php echo $_GET['id']; ?>">
    <input type="text" name="n" value="<?php echo $n; ?>" placeholder="Name" />
    <input type="password" value="<?php echo $p; ?>" name="p" placeholder="Password" />
    <input type="submit" value="add" />
</form>