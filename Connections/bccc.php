<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_bccc = "127.0.0.1";
$database_bccc = "test";
$username_bccc = "root@localhost";
$password_bccc = "";
$bccc = mysql_pconnect($hostname_bccc, $username_bccc, $password_bccc) or trigger_error(mysql_error(),E_USER_ERROR); 
?>