<?php

define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);


if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

// echo 'Connection Successful to ', DB_NAME;

$value = isset($_POST['CourseID']) ? $_POST['CourseID'] : '';
$sql = '';

if ( isset($_POST['CourseID'])) { 
    $value = $_POST['CourseID'];
}

$sql = "INSERT INTO course (CourseID) VALUES ('$value')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();
?>