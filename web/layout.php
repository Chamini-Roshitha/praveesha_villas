<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Praveesha Villas</title>

    <link href="<?= WEB_URL ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= WEB_URL ?>assets/css/mystyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>

  <!-- ***** Header Area ***** -->

  <div class="row m-0 p-0">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light col-11" style="background-color:var(--secondary)">
      <a href="<?= WEB_URL ?>index.php" class="logo">
        <img src="<?=  WEB_URL ?>assets/images/logoPV.png" width="40" height="50" class="ms-4">
      </a>
      <a class="navbar-brand" href="<?= WEB_URL ?>index.php"><h3 class="h3 m-0 p-0 ms-4">Praveesha Villas</h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto d-flex align-items-center">
          <li class="nav-item me-5">
            <a class="nav-link navbar_titles" href="<?= WEB_URL ?>index.php">Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link navbar_titles" href="<?= WEB_URL ?>modules/about_us.php">About Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link navbar_titles" href="<?= WEB_URL ?>modules/villa.php">Villas</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link navbar_titles" href="<?= WEB_URL ?>modules/gallery.php">Gallery</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link navbar_titles" href="<?= WEB_URL ?>modules/contact_us.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="col-1 m-0 p-0">
        <a class="btn nav-section" href="<?= WEB_URL ?>modules/login.php">Manage Booking</a>
    </div>
</div>

  <!-- ***** Header Area End ***** -->

  <?php echo $content ?> 

<!-- ***** Footer Area ***** -->
 

<footer class="bg-dark text-light py-4">
          <div class="row ps-5">
            <!-- Company Info -->
            <div class="col-lg-6 col-md-3">
                <h5 class="mb-4">About Us</h5>
                <p class="mb-4">We are dedicated to providing innovative solutions that help businesses grow and succeed
                    in the digital age.</p>
                <div class="social-links">
                    <a href="#" class="social-icon bg-primary"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon bg-info"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon bg-danger"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon bg-primary"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-6 col-md-6">
                <h5 class="mb-4">Contact Info</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        123 Business Street, New York, NY 10001
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-phone me-2"></i>
                        <a href="tel:+1234567890" class="footer-link">+1 (234) 567-890</a>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:contact@example.com" class="footer-link">contact@example.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-2">
            <div class="col-12">
                <hr class="mb-1">
                <div class="text-center">
                    <p class="mb-0">&copy; 2024 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>

</footer>

  <!-- ***** Footer Area End ***** -->

  <!-- Java Scripts -->
  <script src="<?= WEB_URL ?>assets/js/bootstrap.js"></script>
  <script src="<?= WEB_URL ?>assets/js/mystyle.js"></script>

</body>
</html>