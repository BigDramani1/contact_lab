
<?php
$url = "https://contactlab.herokuapp.com/view.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
echo $result

?>