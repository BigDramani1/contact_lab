

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE BOOK</title>
</head>
<body>

   <a href="add.php"> Add New</a>
   <table>
   <thread>
    <tr>
        
        <th>Contact Name</th>
        <th>Contact Number</th>
        <th>Action</th>
    </tr>
   </thread>
   <tbody>
    <?php
    include "db.php";
        $sql = "SELECT * FROM phonebook";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
    <tr>
    
        <td><?php echo $row['pname']?></td>
        <td><?php echo $row['pphoned']?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['pid']?>">Edit</a>
            <a href="delete.php?id=<?php echo $row['pid']?>">Delete</a>
        </td>
    </tr>

   </tbody>

    <?php } ?>
    </table>
</body>
</html>



