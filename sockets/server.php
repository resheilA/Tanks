<?php 
$port_file = "portfile.txt";
$sock = socket_create_listen(0); 
socket_getsockname($sock, $addr, $port); 
print "Server Listening on $addr:$port\n"; 
$fp = fopen($port_file, 'w'); 
fwrite($fp, $port); 
fclose($fp); 
$message = "Hello, This is server !!";
while($c = socket_accept($sock)) { 
   /* do something useful */ 
   // read client input
   $input = socket_read($c, 1024) or die("Error");
   echo $input; 
   
   //$message = fgets(STDIN);
   socket_write($c, fgets(STDIN), 1024) or die("Error");
   
   socket_getpeername($c, $raddr, $rport); 
   print "Received Connection from $raddr:$rport\n"; 
}    
socket_close($sock); 
?> 