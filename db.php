 <?php
$connection = mysqli_connect("localhost","root","","class_contact_mgt");


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo "Unsuccessful connnection";
  }

    
?> 
