<?php
if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: login.php');
  exit();
}

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
}
require '../db/koneksi.php';

?>    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">List Article</h2><br><hr>
      	<table class="table">
  	      <thead>
            <tr class="info">
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql = mysqli_query($conn, "select * from m_post");
          while($rowp = mysqli_fetch_array($sql)){
          ?>
        <tr>
          <td><?=$rowp['id_post']?></td>
		    	<td><?=$rowp['post_title']?></td>
		    	<td><?=$rowp['user']?></td>
          <?php
          if ($_SESSION['username'] == $rowp['user']) {
              echo "<td><a href=\"?file=edit.php&id=".$rowp['id_post']."\">Edit</a></td>";
          } else {
              echo "<td>X</td>";
          }
          ?>
          <?php
          if ($_SESSION['username'] == $rowp['user']) {
              echo "<td><a href=\"?delete=".$rowp['id_post']."\">Delete</a></td>";
          } else {
              echo "<td>X</td>";
          }


          ?>
		    </tr>
		   <?php } ?>
		  </tbody>
      	</table>
      </div>
      <br><br>
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">List Message</h2><br><hr>
        <table class="table">
          <thead>
            <tr class="info">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Time/Date</th>
                <th>Reply</th>
            </tr>
          </thead>
          <tbody>
        <tr>
          <?php
          $sql = mysqli_query($conn, "select * from m_message");
          while($row = mysqli_fetch_array($sql)){
          ?>
          <td><?=$row['id']?></td>
          <td><?=$row['name']?></td>
          <td><?=$row['email']?></td>
          <td><?=$row['phone']?></td>
          <td><?=$row['message']?></td>
          <td><?=$row['time']?></td>
          <td><a href="mailto:<?=$row['email']?>">Reply</a></td>
        </tr>
       <?php } ?>
      </tbody>
        </table>
      </div>
    </section>