<?php
   include "db.php";
   $sth = mysqli_query($connection,"SELECT * FROM phonebook");
   $json_array = array();
   while($rows = mysqli_fetch_assoc($sth)) {
       $json_array[] = $rows;
   }
   print json_encode($json_array);
   

?>

