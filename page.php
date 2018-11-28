  <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <?php
        if (isset($_GET['s'])) {
          
            echo "<h2 class=\"text-center text-uppercase text-secondary mb-0\">Found Result For ".$_GET['s']."</h2><br><hr>";

            /* Start Patch XSS Search

            echo "<h2 class=\"text-center text-uppercase text-secondary mb-0\">Found Result For ".htmlspecialchars(filter_var($_GET['s']))."</h2><br><hr>";
            
            End Patch XSS */
        } else {
            echo "<h2 class=\"text-center text-uppercase text-secondary mb-0\">List Article</h2><br><hr>";
        }
        ?>
      	<table class="table" id="list">
  	      <thead>
            <tr class="info">
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
          </thead>
          <tbody>
              <?php
                  include 'db/koneksi.php';
                  if (isset($_GET['s'])) {
                      $search = $_GET['s'];
                      $sql = mysqli_query($conn, "SELECT * FROM `m_post` WHERE (`post_title` LIKE '%".$search."%' OR `post_body` LIKE '%".$search."%' OR `user` LIKE '%".$search."%') LIMIT 50");
                      if ($sql) {
                          while ($row = mysqli_fetch_array($sql)) {
                          echo "
                          <tr>
                              <td>".$row['id_post']."</td>
                              <td>".$row['post_title']."</td>
                              <td>".$row['user']."</td>
                          </tr>";
                        }
                      }
                  } else {
                      $sql = mysqli_query($conn, "select * from m_post");
                      while($row = mysqli_fetch_array($sql)){
                          echo "
                          <tr onclick=\"window.location='read.php?id=".$row['id_post']."';\">
                              <td>".$row['id_post']."</td>
                              <td><a href='read.php?id=".$row['id_post']."'>".$row['post_title']."</a></td>
                              <td>".$row['user']."</td>
                          </tr>";
                      }
                  }
              ?>
		      </tbody>
      	</table>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">My Vuln Web is a Vulnerable website that created from free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Whether you are a student who wants to show off hacking skills, a professional who wants to do a demo, or a graphic artist who wants to learn about hacking, this website is the perfect starting point!</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#">
            <i class="fas fa-download mr-2"></i>
            Download Now!
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="number" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>