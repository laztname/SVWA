<?php
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: login.php');
  exit();
}

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
}

require '../db/koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $title = $_POST['post_title'];
    $body = $_POST['post_body'];
    $sql = "UPDATE `m_post` SET `post_title` = '$title', `post_body` = '$body' WHERE `id_post` = '$id'";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Article Updated')</script>";
    } else {
      echo "<script>alert('ERROR Article NOT Updated')</script>";
    }
}

/* Start Vulnerable IDOR

$sql = mysqli_query($conn, "SELECT * FROM m_post WHERE id_post = ".$_GET['id']."");
$row = mysqli_fetch_array($sql);

End Vulnerable IDOR */


// /* Start Patch IDOR


$sql = mysqli_query($conn, "Select * FROM m_post WHERE id_post = ".$_GET['id']."");
$row = mysqli_fetch_array($sql);

if($_SESSION['username'] != $row['user']){
  echo "<script>alert('Unauthorized')</script>";
  echo "<meta http-equiv='refresh' content='0;index.php'>";
  exit();
}

// End Patch IDOR */



?>
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
      <form method="post">
        <label>Article Title :</label>
        <input type="text" name="post_title" value="<?=$row['post_title'];?>" class="form-control"></br>
        <textarea id="mytextarea" name="post_body"><?=$row['post_body'];?></textarea></br>
        <input type="submit" name="submit" class="btn btn-primary btn-md" value="Update Article">
      </form>
      </div>
    </section>
<?php

?>