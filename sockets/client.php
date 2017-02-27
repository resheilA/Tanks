<?php 
$port_file = "portfile.txt";
$fp = fopen($port_file, 'r'); 
$port = fgets($fp, 1024); 
fclose($fp); 
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); 
socket_connect($sock, '127.0.0.1', $port); 
    
	$st = "Hello from the other side";
    $sent = socket_write($sock, $st, strlen($st));
	if($sent == False){   echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";}else{echo "Done";}
    
    $input = socket_read($sock, 1024) or die("Error");
    echo $input; 	
	 
socket_close($sock); 
?>