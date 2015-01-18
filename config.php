<?php
session_start();
global $mysqli;
$mysqli= new mysqli("localhost","root","" ,"donpimpon");

if($mysqli ->connect_errno)
{
die("DB connection error! " . $mysqli -> connect_error );
}
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
}

// $now = new DateTime();

// $sql = "INSERT INTO article_comments(`user_name`, `comment`, `posted`) VALUES ('marian', 'super', '" . $now->format('Y-m-d g:i') . "')";
// $mysqli->query($sql);
// echo $mysqli->error;