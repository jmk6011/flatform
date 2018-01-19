<?php
$conn = mysqli_connect('localhost','bzintruth00','tkaudtkdjq90');
mysqli_select_db($conn,'factory');
$result = mysqli_query($conn,"select * from survey");
$sql = "INSERT INTO `survey` (`num`, `name`, `taste`, `delivery`, `memo`, `price`) VALUES (NULL, '{$_POST['name']}', '{$_POST['taste']}', '{$_POST['delivery']}', '{$_POST['memo']}', '{$_POST['price']}')"; 
$result = mysqli_query($conn,$sql); 
header('Location:index.php');
?>
