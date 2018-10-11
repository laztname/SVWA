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
    $title = $_POST['post_title'];
    $body = $_POST['post_body'];
    $user = $_SESSION['username'];
    $sql = "INSERT INTO m_post (id_post, post_title, post_body, user) VALUES ('0', '$title', '$body', '$user')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Article Updated')</script>";
    } else {
      echo "<script>alert('ERROR Article NOT Updated')</script>";
    }
}
?>
    <!-- Portfolio Grid Section -->
    </div>
    <section class="portfolio" id="portfolio">
      <div class="container">
      <form method="post">
        <label>Article Title :</label>
        <input type="text" name="post_title" value="" class="form-control"></br>
        <label>Article Body :</label> 
        <textarea id="mytextarea" name="post_body"></textarea></br>
        <input type="submit" name="submit" class="btn btn-primary btn-md" value="Update Article">
      </form>
      </div>
    </section>
<?php
?>