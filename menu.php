<!DOCTYPE html>
<html>
<head>
  <title>오늘</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class='me'>
   <header><?php echo file_get_contents('header.php');?></header>


	
<ul class='title'>
  <li>MENU</li>
</ul>  
 

<table class='menubar'>
  <tr style="height: 40px;">
    <td><a href='menu.php'>MENU</a></td>
    <td><a href='review.php'>REVIEW</a></td>
  </tr>
</table>  





<ul class="menulist">
    <li class='menu-fs'>SALAD IN LIFE</li>
    <li><a href="one.php"><img src="img/me4.jpg"></a></li>
    <li class='menu-se'><a href="one.php">salad standard</a></li>

     

   

   
</ul> 
      








<!-- 주문 bar -->
<div class='fexid'>
  <a href='order.php'>주문하기</a>
</div>  

<!--주문--><?php  echo file_get_contents('fexid.php');?>
 
  		
	</body>
</html>


















                            