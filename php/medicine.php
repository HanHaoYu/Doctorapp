<?php
include_once('json-fun.php');
function return_doctor($type)
{
	header('Content-Type:text/html;charset=utf-8');
	$mysqli=mysqli_connect('123.207.141.93','root','a96S04d02','user');
	$res="SELECT name,type,about,price,picture FROM medicine where type='$type';";
	$result=mysqli_query($mysqli,$res);
	while($out= mysqli_fetch_row($result))
	{
		$arr[]=$out;
	}
	$json=ch_json_encode($arr);
	echo $json;
}
session_start();
$type=$_SESSION['number'];
return_doctor($type);
unset($_SESSION['number']);
?>
