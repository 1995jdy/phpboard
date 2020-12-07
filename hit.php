
<?php

$number = $_GET['number'];
$connect = mysqli_connect('localhost', 'root', '123456', 'test');
$query = "update board set hit = hit+1 where number=$number";
$result = $connect->query($query);


echo "<script>location.href='index.php';</script>";

?>
