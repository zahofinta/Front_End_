<?php
require 'config.php';
$now = new DateTime();

if ($_POST['user_name'] != '') {
	$sql = "INSERT INTO article_comments(`user_name`, `comment`, `posted`,`article_type`) VALUES ('" . $_POST['user_name'] . "', '" . $_POST['comment'] . "', '" . $now->format('Y-m-d g:i') . "', '" . $_POST['article_type'] . "')";
	$mysqli->query($sql);
}

//echo $mysqli->error;
//var_dump($_POST);
$sql = 'SELECT * FROM article_comments WHERE article_type = "' . $_POST['article_type'] . '"'; 
$result = $mysqli->query($sql);
$text = '';
foreach($result as $comment){
	$text .='<div class="comment-block">
				<span style="color:red;">' . $comment['user_name'] . '</span>
				:
				<span>' . $comment['comment'] . '</span>
			</div>
			<br>';
};

echo $text;
?>