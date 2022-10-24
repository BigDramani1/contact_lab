 <?php
$connection = mysqli_connect("us-cdbr-east-06.cleardb.net","bcb71959f52482","b6a928b0","heroku_97cf03f17e851f5");


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo "Unsuccessful connnection";
  }

    
?> 
