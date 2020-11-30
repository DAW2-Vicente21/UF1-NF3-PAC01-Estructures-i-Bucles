<?php
session_start(); 

// Ejercici 6

if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
echo"Times you have visited the page = ".$_SESSION['views']."<br/><br/>"; 
  

date_default_timezone_set('UTC');

// Ejercici 1

$fechaActual = date("d-m-Y");

$ayer = date("l", strtotime("-1 day", strtotime($fechaActual)));
echo "Yesterday it was " .$ayer. ".<br/>";

$previousMonth = date("F", strtotime("+1 month", strtotime($fechaActual)));
echo "The previous month is " .$previousMonth.".<br/>";

$daysLeft = (int)date("t", strtotime($fechaActual))- (int)date("j", strtotime($fechaActual));
echo "There are ".$daysLeft." days left in this month. <br/>";

$monthsLeft = 12 - (int)date("m", strtotime($fechaActual));
echo "There are ".$monthsLeft." months left in the current year. <br/>";

// Ejercici 3

$mesActual = date("m");

if($mesActual >= '06' && $mesActual <= '09'){
    echo "Good Summer!";
}

if($mesActual >= '12' || $mesActual <= '03'){
    echo "Good Winter";
}


?>
<html>
<head>
</head>
<body>

    
    


    <?php include "N3P1Footer.php";?>

</body>
</html>

