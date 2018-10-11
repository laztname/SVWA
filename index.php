<?php
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
	header('Location: index.php');
	exit();
}
require 'db/koneksi.php';
require 'header.php';
require 'page.php';
require 'footer.php';
?>