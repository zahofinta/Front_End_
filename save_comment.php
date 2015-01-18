<?php
require 'config.php';
$now = new DateTime();

if ($_POST['user_name'] != '') {
	$sql = "INSERT INTO article_comments(`user_name`, `comment`, `posted`) VALUES ('" . $_POST['user_name'] . "', '" . $_POST['comment'] . "', '" . $now->format('Y-m-d g:i') . "')";
	$mysqli->query($sql);
}

//echo $mysqli->error;

$sql = 'SELECT * FROM article_comments'; 
$result = $mysqli->query($sql);
$text = '';
foreach($result as $comment){
	$text .= '<div><span style="color:red;">' . $comment['user_name'] . '</span>-<span>' . $comment['comment'] . '</span></div><br>';
};

echo $text;
?>