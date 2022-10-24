<?php
include "db.php";

$id = $_GET['id'];

if(isset($_POST['submit'])){

    $pname = $_POST['name'];
    $pphoned = $_POST['number'];

    $sql = "UPDATE `phonebook` SET `pname`='$pname',`pphoned`='$pphoned' WHERE pid = $id";

    $result = mysqli_query($connection, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    }
    else{
        echo "Failed: ". mysqli_error($connection);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE BOOK</title>
</head>
<body>
    <h3>Edit Contact Details</h3>

    <?php
        $sql = "SELECT * FROM phonebook where pid = $id";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result);


    ?>
    <form method="post">

    <div>
        <label for="name"> Contact name</label>
        <input type="text" name="name" id="name" required  value="<?php echo $row['pname'] ?>">
    
    </div>
        <br>
        <br>

    <div>
        <label for="number">Contact number</labe>
        <input type="number" name="number" id="number" required  value="<?php echo $row['pphoned'] ?>">
    </div>
        <br>
        <br>
        <button name="submit">update</button> 
    </form>
</body>
</html>

