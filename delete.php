<?php

include "db.php";
$id = $_GET['id'];
$sql = "DELETE FROM phonebook WHERE pid = $id";
$result = mysqli_query($connection, $sql);
if($result){
    header("Location: view.php?msg=Record deleted successfully");
}
else{
    echo "Failed: " . mysqli_error($connection);
}


?>