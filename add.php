<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = $_POST['n'];
    $p = $_POST['p'];

    $con = mysqli_connect("localhost","root","","db33");
    if($con->query("insert into users(name,password)values('$n','$p')")){
        header("location:index.php");
    }

}
?>
<form method="post" action="add.php">
    <input type="text" name="n" placeholder="Name"/>
    <input type="password" name="p"  placeholder="Password"/>
    <input type="submit" value="add"/>
</form>