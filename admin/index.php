<?php
session_start();
require '../db/koneksi.php';

//var_dump($_FILES['file']);
//exit();

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
if (isset($_FILES['file'])) {
	$dir = "../assets/img/";

	$name = basename($_FILES["file"]["name"]);
	
	/* Start Patched File Upload

	$original_name = basename($_FILES["file"]["name"]);
	$allowed_ext = ['jpg', 'png', 'bmp', 'jpeg', 'JPEG', 'PNG'];
	$ext = end(explode('.', $original_name));


	
	if(!in_array($ext, $allowed_ext)){
		echo "<script>alert('Only image')</script><meta http-equiv='refresh' content='0;index.php'>";
		//header("Location: index.php");
		exit();
	}
	

	$name = $original_name;

	End Patched File Upload */
	
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