<?php
$con=mysqli_connect("123.207.141.93","root","a96S04d02","user");
function _post($str){
    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
    return $val;
}

 $name=_post('name');
 $password=_post('password');
$sql = "select * from doctor where d_username='$name' and d_password='$password'";
$result = mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row===1)
{
	session_start();
    $_SESSION['name'] = $name;
    echo "成功";
}
else
    echo "登录失败！";
?>
