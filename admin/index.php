<?php
session_start();
require '../db/koneksi.php';
if (isset($_GET['logout'])) {
	session_destroy();
	header('Location: login.php');
	exit();
}

if (!isset($_SESSION['username'])) {
	header('Location: login.php');
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$sql = "DELETE FROM m_post WHERE id_post = $id";
	if (mysqli_query($conn, $sql)) {
		echo "<body onLoad='javascript:window.history.back();'>";
	} else {
		echo "<script>alert('article cannot deleted')</script>";
	}
}
error_reporting(E_ERROR | E_PARSE);
if ($_POST['file'] = "upload") {
	$dir = "../assets/img/";
	$name = basename($_FILES["file"]["name"]);
    $tmp_name = $_FILES["file"]["tmp_name"];

	if (move_uploaded_file($tmp_name, "$dir/$name")) {
	$username = $_SESSION['username'];
	$sql = "UPDATE `m_user` SET `profile` = '$name' WHERE `username` = '$username'";
	    if (mysqli_query($conn, $sql)) {
	      echo "<script>alert('profile picture updated')</script>";
		}
	}
}

require 'header.php';

	$file = $_GET['file'];
	if( isset( $file ) )
		include($file);
	else {
		header( 'Location:?file=page.php' );
		exit;
	}
	
require 'footer.php';
?>