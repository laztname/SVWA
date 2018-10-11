<?php
include 'db/koneksi.php';
require 'header.php';
?>
<?php
if (isset($_GET['id'])) { 
$sql = mysqli_query($conn, "select * from m_post where id_post = ".$_GET['id']."");
while($row = mysqli_fetch_array($sql)){
?>
<section>
	<div class="container">
		<article>
            <h1><?=$row['post_title']?></h1>
			<h6>Author <?=$row['user']?></h6>
			<div>
                <?=$row['post_body']?>
            </div>
		</article>
	</div>
</section>
<?php } ?>
<?php
}  else echo "error";
require 'footer.php';
?>