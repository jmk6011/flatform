<?php
$conn = mysqli_connect('localhost:3306','root','sktkfpt231');
mysqli_select_db($conn,'ohnle');
$result = mysqli_query($conn,"select * from member");
$sql = "INSERT INTO `member` (`num`, `id`, `pw`, `email`, `phon`, `date`) 
		VALUES (NULL, '{$_POST['id']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['phon']}',now())";
$result = mysqli_query($conn,$sql);	
header('Location:index.php');	
//회원가입 데이터 입력 성공
?>