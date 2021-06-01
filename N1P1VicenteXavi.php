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

// Ejercici 4


?>
<html>
<head>
</head>
<body>

    
<style>
    .red   { color: red; }
    .green { color: green; }
    .blue  { color: blue; }

</style>

<form>
    <select name="color">
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
    </select>
    <input type="submit" value="Color!">
</form>

<form method="post">	
	<input type="text" name="subject" id="subject" value="Text">
</form>
	

<?php

    if ( isset($_GET['color']) && isset($_POST['subject'])) {
       		print '<span class="'.$_GET['color'].'"> '.$_POST['subject'].' </span>';

    }

?>

<br>	

<span> Save Cookies? </span>

<form method="post">
	<input type="submit" name="si" id="si" value="Yes">
</form>

<?php 

if(isset($_COOKIE["info"])){
    echo $_COOKIE["info"];
} else{
    echo "Cookie NOT saved";
}

if(isset($_POST['si'])){
	setcookie("info", "Cookie SAVED", time()+30*24*60*60);
}


?>
    
    <?php include "N3P1Footer.php";?>

</body>
</html>