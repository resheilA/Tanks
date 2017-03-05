<?php
$message=$_POST['data'];
$player1_file = "player1file.txt";
$fp = fopen($player1_file, 'w'); 
fwrite($fp, $message); 
fclose($fp);
?>