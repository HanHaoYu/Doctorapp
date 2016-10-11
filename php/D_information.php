<?php
session_start();
$name=$_SESSION['name'];
$mysqli=mysqli_connect('123.207.141.93','root','a96S04d02','user');
$res1="SELECT d_username,d_email,d_phonenumber,d_type,d_introduce,d_picture FROM doctor WHERE d_username='$name';";
$result1=mysqli_query($mysqli,$res1);
$out1=mysqli_fetch_row($result1);
$arr[0]=$out1;
$res2="SELECT username,phonenumber,about FROM bespeak WHERE username='$name' AND state='0';";
$result2=mysqli_query($mysqli,$res2);
$out2=mysqli_fetch_row($result2);
$arr[1]=$out2;
$res3="SELECT username,phonenumber,about FROM bespeak WHERE username='$name' AND state='1';";
$result3=mysqli_query($mysqli,$res3);
$out3=mysqli_fetch_row($result3);
$arr[2]=$out3;
$res4="SELECT d_username,d_email,d_phonenumber,d_type,d_password,d_introduce FROM doctor WHERE d_username='$name';";
$result4=mysqli_query($mysqli,$res4);
$out4=mysqli_fetch_row($result4);
$arr[3]=$out4;
$json=json_encode($arr);
echo $json;
?>
