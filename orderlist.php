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



 <form action="delivery.php" method="post" >
    <table class="orderlist">
        <tr>
            <td colspan="2" style="text-align: center;">주문 내역</td></tr>  
        <tr>
            <td>주 소</td>
            <td><input type="text" class="inp" name="name" value="
             <?php echo $_POST['name'];?>" readonly></td></tr> 
        <tr>
            <td>연 락 처</td>
            <td><input type="text" name="phon" value="
             <?php echo $_POST['phon'];?>" readonly></td></tr> 
        <tr>
            <td>도착시간</td>
            <td><input type="text" name="htime" value="
             <?php echo $_POST['htime'];?>" readonly></td></tr> 
        <tr>
            <td>품 명 / 수 량</td>
            <td class="point"><input type='text' name='menu-list' value="<?php echo $_POST['menu-list']; 
                        echo "-";
                         echo $_POST['menu-num'];?>" readonly ></td>
            </tr>  
        <tr>
            <td>계좌번호</td>
            <td>기업:01037892012</td></tr>       
        <tr>
            <td>예금주</td>
            <td>주 무 광</td></tr>   
        <tr>
            <td colspan="2"><input type='submit' value='확 인' class='orin'></td></tr>  

    </table>             
           

  </form>


  
       

       
        <!--
        가 격:<input type='text' value="<?php
            if($_POST['menu-list'] == standard){
                $sum = 5900 * $_POST['menu-num'];
                echo $sum;
            }

            if($_POST['menu-list'] == standard2){
                $sum = 7900 * $_POST['menu-num'];
                echo $sum;
            }

            if($_POST['menu-list'] == standard3){
                $sum = 9900 * $_POST['menu-num'];
                echo $sum;
            }
        ?>">
    -->
        
       

        
       		

 



  
 
  		<footer> </footer>
	</body>
</html>














