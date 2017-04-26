<?php
$con = mysqli_connect("localhost","root","","db33");
$result = $con->query("select * from users");
?>

<a href="add.php">Add</a>
<table>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td>
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a> | 
<a href="del.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
    </tr>
    <?php 
    }
    ?>
</table>