<?php
	include '../db/koneksi.php';

	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	  http_response_code(500);
	  exit();
	}

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $time = date('Y-m-d H:i:s');
    $sql = "INSERT INTO m_message (`id`, `name`, `email`, `phone`, `message`, `time`) VALUES ('', '$name', '$email', '$phone', '$message', '$time')";
    if (mysqli_query($conn, $sql)) {
	  	http_response_code(200);
	} else {
		http_response_code(500);
	}
?>