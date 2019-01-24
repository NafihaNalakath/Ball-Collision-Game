<?php 
require_once('connection.php');

if($_POST) {
	$score = $_POST['score'];
	saveScore($score);
	echo getHighScore();
}
