<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$db="ball_collision";
$connection=mysqli_connect($servername,$username,$password,$db);


function login($username, $password) {
	global $connection;
	$sql="SELECT * from users where username='{$username}' and password=MD5('{$password}')";
	$rows = mysqli_query($connection,$sql);
	// echo mysqli_num_rows($rows);
	if( mysqli_num_rows($rows) > 0)
	{
		// $data = mysqli_fetch_array($rows);
		// print_r(end($data));
		// die();
		$_SESSION['user'] = mysqli_fetch_array($rows);
		return true;

	}else {
		return false;
	}
}


function signup($username, $password,$cpassword) {
	global $connection;
	$sql1="SELECT * from users where username='{$username}'";
	$rows = mysqli_query($connection,$sql1);
	if( mysqli_num_rows($rows) > 0)
	{
		echo "<script>alert('Username already taken!')</script>";
	}
	else
	{
		if($password==$cpassword){
	$sql="INSERT INTO users set username='{$username}',password=MD5('{$password}')";
	$row = mysqli_query($connection,$sql);
	$q="SELECT id from users WHERE username='{$username}';";
	$r = mysqli_query($connection,$q);
	$id=0;
	if( mysqli_num_rows($r) > 0)
	{
		$d = mysqli_fetch_array($r);
		$id=$d['id'];

	}else {
		return 0;
	}
	$score=0;
	$query="INSERT INTO score set score='{$score}' , user_id='{$id}'";
    mysqli_query($connection,$query);
    login($username,$password);
    header("Location: index.php");
	
   }else{ echo "<script>alert('Password doesnot match!')</script>";}
   }
}



function saveScore($score) {
	//print_r($_SESSION['user']);
	$user_id = $_SESSION['user']['id'];
	global $connection;
	$sql="INSERT INTO score set score='{$score}' , user_id='{$user_id}'";
	$rows = mysqli_query($connection,$sql);

}

function getHighScore() {
	$user_id = $_SESSION['user']['id'];
	global $connection;
	$sql="SELECT * from score where user_id='{$user_id}' ORDER BY score DESC LIMIT 1";
	$rows = mysqli_query($connection,$sql);
	if( mysqli_num_rows($rows) > 0)
	{
		$data = mysqli_fetch_array($rows);
		return $data['score'];

	}else {
		return 0;
	}

}

function getScore($score){
$user_id = $_SESSION['user']['id'];
	global $connection;
	return $score;
}

?>