<?php  

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "Not successful";
}

mysqli_select_db($con, 'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments =  $_POST['comments'];

$query = "insert into userinfodata(user,email,mobile,comments) values ('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);

echo $query;

header('location:index.php');
?>