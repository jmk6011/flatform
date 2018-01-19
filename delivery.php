<?php
$conn = mysqli_connect('localhost','bzintruth00','tkaudtkdjq90');
mysqli_select_db($conn,'');
$result = mysqli_query($conn,"select * from order-list");
$sql = "INSERT INTO `order-list` (`num`, `name`, `phon`, `htime`, `menu-list`, `menu-num`, `date`)
    VALUES (NULL,'{$_POST['name']}','{$_POST['phon']}','{$_POST['htime']}','{$_POST['menu-list']}','{$_POST['menu-num']}',now())";
$result = mysqli_query($conn,$sql); 
header('Location:orderlist.php');
?>



