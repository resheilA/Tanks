<?php
/*
include("session.php");
$session_name = $sender_name;

include("connect.php");
$sql1 = "SELECT * FROM $sender_chatroom";
		 
 $sql_result1 = mysql_query($sql1,$connection);
 
 
 while($row1 = mysql_fetch_array($sql_result1))
 { 		
	$name = $row1['Sender'];
	$message = $row1['Message'];	
	$phptime = $row1['Time'];
	$time = date ("G:i a", strtotime($phptime));
	
	if($name == $session_name){	 
	echo "<p id='chatmsg-s'> <b> $name at $time</b><br> $message </p>";
	}
	else{
	echo "<p id='chatmsg-r'> <b> $name at $time</b><br> $message </p>";
	}
  }
*/
$player2_file = "player2file.txt";
$fp = fopen($player2_file, 'r'); 
$port = fgets($fp, 1024); 
fclose($fp); 
echo $port;  
?>