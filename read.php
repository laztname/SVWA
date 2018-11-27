<?php
include 'db/koneksi.php';
require 'header.php';
?>
<?php
$id = $_GET['id'];
if (isset($id)) { 

/* Start Patch SQLi

$stmt_read = mysqli_prepare($conn, "select * from m_post where id_post = ?");
mysqli_stmt_bind_param($stmt_read, "i", $id);
mysqli_stmt_execute($stmt_read);
mysqli_stmt_bind_result($stmt_read, $id_post, $title, $body, $user);
while($row = mysqli_stmt_fetch($stmt_read)){

// don't forget to comment vulnerable SQLi

End Patch SQLi */ 

// /* Start Vulnerable SQLi

$sql = mysqli_query($conn, "select * from m_post where id_post = ".$id."");
while($row = mysqli_fetch_array($sql)){
$title = $row['post_title'];
$user = $row['user'];
$body = $row['post_body'];

// End Vulnerable SQLi */
?>
<section>
	<div class="container">
		<article>
            <h1><?=$title?></h1>
			<h6>Author <?=$user?></h6>
			<div>
                <?=$body?>
            </div>
		</article>
	</div>
</section>
<?php } ?>
<?php
}  else echo "error";
require 'footer.php';
?>