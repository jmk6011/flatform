<!DOCTYPE html>
<html>
<head>
	<title>오늘</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="order-body">
   <header><?php echo file_get_contents('header.php');?></header>




<ul class="orderlist">
    <li>주문자 정보</li>
</ul>    
 
 <form action="orderlist.php" method="post">
    
 
    <div class='user-order'>
        <input type='search' placeholder="&nbsp&nbsp&nbsp별명 및 애칭" autofocus="autofocus" required="required" name="name"><br>
        <input type='search' placeholder="&nbsp&nbsp&nbsp연 락 처" autofocus="autofocus" required="required" name="phon"><br>
        <input type='search' placeholder="&nbsp&nbsp&nbsp상세 주소를 적어주세요" autofocus="autofocus" required="required" name="address"><br>
        <input type='time' autofocus="autofocus" required="required" name="htime"><p>(*배송 희망시간을 입력해주세요)</p><br>
                    
     
</div>


<ul class="orderlist">
    <li>상품 정보</li>
</ul> 


           <div class="delivery-order"> 
            <select name='menu-list' class='menulist'>
                <option>Menu</option>
                <option>S type</option>
                <option>E type</option>
                <option>C type</option>
            </select>

            <select name='menu-num' class='menulist'>
                <option>Number</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        
    


  <input class='fexid' type='submit' value='주문완료'>

				
</form>






  
 
  		<footer> </footer>
	</body>
</html>














