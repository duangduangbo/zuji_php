<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$did=$_REQUEST["did"];
@$dtitle=$_REQUEST["dtitle"];
@$drecord=$_REQUEST["drecord"];
@$dtime=$_REQUEST["dtime"];
@$detime=$_REQUEST["detime"];
@$dfood=$_REQUEST["dfood"];
@$dhouse=$_REQUEST["dhouse"];
@$dimage=$_REQUEST["dimage"];
@$dminutes=$_REQUEST["dminutes"];
@$dfriend=$_REQUEST["dfriend"];
@$isSee=$_REQUEST["isSee"];
$sql="update detail set dtitle='$dtitle',drecord='$drecord',dtime='$dtime',dfood='$dfood',dhouse='$dhouse',dimage='$dimage',dfriend='$dfriend',isSee=$isSee,detime='$detime',dminutes='$dminutes'  where did=$did";
$output=sql_execute($sql);

if($output==1)
{
	echo '{"code":"1"}';
	
} 
else echo '{"code":"0"}';



?>