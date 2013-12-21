<body>
<?php
$logfile= '/home/mylidoy1/public_html/ip/ip.html';
$IP = $_SERVER['REMOTE_ADDR'];
$logdetails=  date("F j, Y, g:i a") . ': ' . '<a href=http://whatismyipaddress.com/ip/'.$_SERVER['REMOTE_ADDR'].'>'.$_SERVER['REMOTE_ADDR'].'</a>';
$fp = fopen($logfile, "a"); 
fwrite($fp, $logdetails);
fwrite($fp, "<br>");
fclose($fp); 
?> 
</body>