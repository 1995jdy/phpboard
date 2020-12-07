
<?php

$number = $_GET['number'];
$connect = mysqli_connect('localhost', 'root', '123456', 'test');
$query = "delete from board where number=$number";
$result = $connect->query($query);


echo "<script>location.href='index.php';</script>";

?>
