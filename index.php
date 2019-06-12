<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");      
header('Access-Control-Allow-Methods:POST,GET');     
 header("Access-Control-Allow-Headers: Origin, No-Cache, X-Requested-With, If-Modified-Since, Pragma, Last-Modified, Cache-Control, Expires, Content-Type, X-E4M-With");  
require_once("./init.php");
@$uname=$_REQUEST['uname'];
$sql1="select * from user where uname='$uname'";
$result=sql_execute($sql1);
$uid=$result[0]["uid"];
$sql="SELECT * FROM detail where user_id='$uid' order by did desc";
$output=sql_execute($sql);

echo json_encode($output);


?>