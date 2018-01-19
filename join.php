<!DOCTYPE html>
<html>
<head>
  <title>오늘</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--비밀번호 확인 코드-->
  <script>
			function pass(){
	 			var pw=document.getElementById('pw').value;
	 			var pw2=document.getElementById('pw2').value;

	 			if(pw !== pw2){
	 				alert('비밀번호를 다시 확인하세요');
	 				return false;
	 			}
			}
	</script>
</head>
<body>
  <header>  <?php echo file_get_contents('header.php');?>  </header>
 
 
<div class="member-box">회원가입
	<form action="join-1.php" method="post">	
		<input type='text' placeholder="아이디" autofocus="autofocus" required="required" name="id"><br />
		<input type='password' placeholder="비밀번호" required="required" id="pw" name="pw">
		<br />
		<input type='password' placeholder="비밀번호 확인" required="required" id="pw2" name="pw2"><br />
		<input type='email' placeholder="이메일" required="required" name="email" onclick="pass()"><br />
		<input type='text' placeholder="연락처" required="required" name="phon"><br />
		<input type='submit' value='회원가입' class="button"><br />
	</form>	
</div>	
 
 
  <footer>  <?php echo file_get_contents('footer.php');?> </footer>
</body>
</html>