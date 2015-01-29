<?php
include('../Template.php');
$template = new Template();

if(isset($_GET['username'])) {
	$template->username = $_GET['username'];
}

$template->content = $template->fetch('content.php');
$template->display('wrapper.php');
