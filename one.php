<!DOCTYPE html>
<html>
<head>
  <title>오늘</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="detail">
  <header><?php echo file_get_contents('header.php');?></header>


<ul class='title'>
  <li>STANDARD</li>
</ul>  


<table class='menubar'>
  <tr style="height: 40px;">
    <td><a href='menu.php'>MENU</a></td>
    <td><a href='review.php'>REVIEW</a></td>
  </tr>
</table>  

 
   <ul class='depg'>
      <li><img src="img/me4.jpg"></li>
      <li class="depg1">S type 9.8</li>
      <li class="depg2">▷닭가슴,아보카도,제철과일</li>
      
      <li class='menu-fs'>SALAD IN </li>
      <li><a href="one.php"><img src="img/me2.jpg"></a></li>
      <li class='menu-se'><a href="one.php">E type : 7,9</a></li>

      <li class='menu-fs'>SALAD IN </li>
      <li><a href="one.php"><img src="img/me2.jpg"></a></li>
      <li class='menu-se'><a href="one.php">C type : 5,9</a></li>





   </ul>  
  


<!--주문--><?php  echo file_get_contents('fexid.php');?>
  
</body>
</html>














