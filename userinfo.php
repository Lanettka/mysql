<?php
$host = "localhost";
$name = "root";
$pass = '';
$db = "portal"; 
$res = mysql_connect($host,$name,$pass);
if($res == true) {
$db = mysql_select_db($db,$res);
if($db == false) {
 echo "Database not found";
};
} else {
echo "Data is entered incorrectly";
};
 
$user_data = mysql_query("SELECT * FROM `users`");
if(mysql_num_rows($user_data)>0) {
$row = mysql_fetch_array($user_data);
} else {
echo "Table is empty";
};
 
echo $row['nik'];
?>