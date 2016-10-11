<?php
header('Content-Type:text/html;charset=utf-8');
$sql="INSERT INTO doctor(d_username,d_email,d_phonenumber,d_type,d_introduce,d_password) 
  VALUES('$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[classify]','$_POST[introduce]','$_POST[password]');";
$mysqli = new mysqli('123.207.141.93', 'root', 'a96S04d02', 'user');
$res="SELECT * FROM doctor where d_username='{$_POST['username']}';";
$result = mysqli_query($mysqli,$res);
$row = mysqli_fetch_row($result);
if($row) {
     $json=json_encode(1);
    echo $json;
}
else 
    if (mysqli_query($mysqli,$sql) != TRUE) {
         $json=json_encode(2);
    echo $json;
    }
    else
    {
    	  $json=json_encode(3);
    echo $json;
    }
?>