<?php
header('Content-Type:text/html;charset=utf-8');
$sql="INSERT INTO bespeak(username,phonenumber,doctorname,about,state)
VALUES('$_POST[username]','$_POST[phonenumber]','$_POST[doctorname]','$_POST[about]','0');";
$mysqli =mysqli_connect('123.207.141.93','root','a96S04d02','user');
$res1="SELECT * FROM common where username='{$_POST['username']}';";
$result1 = mysqli_query($mysqli,$res1);
$row1 = mysqli_fetch_row($result1);
$res2="SELECT * FROM doctor where d_username='{$_POST['doctorname']}';";
$result2 = mysqli_query($mysqli,$res2);
$row2 = mysqli_fetch_row($result2);
if($row1 && $row2) {
    if (!mysqli_query($mysqli,$sql)) {
        echo "INSERT attempt failed";
    }
}
else {
    echo "failed";
}
header('Location:http://localhost:81/Doctor/index.html');
?>
