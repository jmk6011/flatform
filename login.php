

<!DOCTYPE html>
<html>
<head>
  <title>오늘</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>  <?php echo file_get_contents('header.php');?>  </header>

 
<div class="member-box">로그인
	<form action="login.php" method="post">	
		<input type='text' placeholder="아이디를 입력하세요" autofocus="autofocus" required="required" name="id"><br />
		<input type='password' placeholder="비밀번호를 입력하세요" required="required" name="pw"><br />
		<input type='submit' value='로그인' class="button"><br />
	</form>	
</div>	



<?php
$id= $row['id'];
$pw= $row['pw'];


if($id !== $_POST['id']){
	echo "<script> document.write('등록되지 않은 회원입니다.') </script>";	

}else if($id.$pw===$_POST['id'].$_POST['pw']){
	echo "<script> alert('로그인 성공') </script>";	

}else{
	echo "<script> alert('아이디/비번을 확인하세요') </script>";
}

?>
 
  <footer>  <?php echo file_get_contents('footer.php');?> </footer>
</body>
</html>