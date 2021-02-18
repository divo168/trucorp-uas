<?php

$link = mysqli_connect("172.12.0.2/16","root","toor","Trucorp");
if(!$link){
echo "Failed to Connect" . PHP_EOL;
echo "<br>";
exit;
}
echo "Connect Success" . PHP_EOL;
echo "<br>";
echo "<br>";

mysqli_set_charset($link, "utf8mb4");
$result = mysqli_query($link, 'SELECT count(*) FROM users');
$num_rows = mysqli_fetch_row($result)[0];
echo "Total Jumlah Users: $num_rows \n"

?>
