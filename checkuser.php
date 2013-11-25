<?php
$users[] = "aaaaaa";
$users[] = "bbbbbb";
$users[] = "cccccc";
$users[] = "111111";
$users[] = "111112";
$users[] = "111113";

$username = "";
if (!isset($_GET['fusername'])) {
	echo json_encode(false);
	exit();
} else {
	$username = $_GET['fusername'];
}

if (in_array($username, $users)) {
	echo json_encode(false);
	exit();
} else {
	echo json_encode(true);
	exit();
}
