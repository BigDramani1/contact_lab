

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE BOOK</title>
</head>
<body>
    <h3>Enter Contact Details</h3>
    <p>Complete the form to add a new contact</p>
    <form method="post">

    <div>
        <label for="name"> Contact name</label>
        <input type="text" name="name" id="name" required placeholder="Name">
    
    </div>
        <br>
        <br>

    <div>
        <label for="number">Contact number</labe>
        <input type="tel" name="number" id="number" required placeholder="+233" pattern="^[\W][0-9]{3}?[\s]?[0-9]{2}?[\s]?[0-9]{3}[\s]?[0-9]{4}$" title="Phon number should start with +233 and remaing 9 digit with 0-9. eg +233 548342821">
    </div>
        <br>
        <br>
        <button name="submit">submit</button> 
    </form>
</body>
</html>

<?php
include "db.php";

if(isset($_POST['submit'])){

    $pname = $_POST['name'];
    $pphoned = $_POST['number'];

    $sql = "INSERT INTO phonebook (`pname`,`pphoned`)
     VALUES ('$pname','$pphoned')";

    $result = mysqli_query($connection, $sql);

    if($result){
        header("Location: view.php");
    }
    else{
        echo "Failed: ". mysqli_error($connection);
    }
}

?>

