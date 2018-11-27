<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SVWA</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../assets/css/freelancer.min.css" rel="stylesheet">
    <script src="..//assets/js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      height: 500,
      menubar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help wordcount'
      ],
      toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css']
    });
    </script>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="http://localhost/svwa">SVWA (SHL Vulnerable Web App)</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <?php error_reporting(E_ERROR | E_PARSE);
              if ($_SESSION['username']) {
                echo "
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"?file=add.php\">Add Article</a>
            </li>
            <li class=\"nav-item mx-0 mx-lg-1\">
              <a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"?logout\">Logout</a>
            </li>";
              } else {
                echo "<a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"../admin\">Login</a>
            </li>";
              }
              ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <?php
        $username = $_SESSION['username'];
        $sql = mysqli_query($conn, "SELECT profile FROM m_user WHERE username = '$username'");
        $row = mysqli_fetch_array($sql);
        if ($row['profile'] == NULL) {
          echo "<img class='img-fluid mb-5 d-block mx-auto' src='../assets/img/profile.png' style='width:250px;height:200px' >";
        } else {
          echo "<img class=\"img-fluid mb-5 d-block mx-auto\" src=\"../assets/img/".$row['profile']."\" width='256' height='256'>";
        }
        
        if ($_SESSION['username']) {
        echo
        "<form method=\"POST\" enctype=\"multipart/form-data\"><input type=\"file\" name=\"file\"><br>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Change Profile Pictures\"></form>";
        }
        ?>
        <h1 class="text-uppercase mb-0">H3llcome <?php echo $_SESSION['username'];?></h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Howdy are you?, what we'll do today?</h2>
      </div>
    </header>
