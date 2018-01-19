

<!DOCTYPE html>
<html>
<head>
  <title>오늘</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header><?php echo file_get_contents('header.php');?></header>


<ul class='title'>
  <li>QnA</li>
</ul>  

 <table class='menubar'>
  <tr style="height: 40px;">
    <td><a href='board.php'>BOARD</a></td>
    <td><a href='qna.php'>QnA</a></td>
  </tr>
</table>  


<?php
				$conn = mysqli_connect('localhost','bzintruth00','tkaudtkdjq90');
				mysqli_select_db($conn,'factory');
				$result = mysqli_query($conn,"SELECT * FROM `board` ORDER BY `board`.`num` DESC");
				?>	

		
	


 		<?php	//db 데이터 출력코드 
			while($row = mysqli_fetch_assoc($result)){ 
					echo '<ol class="bbox">'.'<li>'.'<b>'.htmlspecialchars($row['title']).'</b>'.'<br />'; 
					echo '<div>'.htmlspecialchars($row['contents']).'</div>'.'</li>'.'</ol>'; 
					
	}
?>
	
</div>
		



























<footer>  <?php echo file_get_contents('footer.php');?> </footer>
</body>
</html>