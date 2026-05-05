<?php
ob_start();
include '../../config.php';
include '../../function.php';
$conn = dbConnect();
?>
<div class="contact-page section">
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-lg-6 col-md-8"> <!-- controls width -->
        <div class="card border-secondary d-flex justify-content-center align-items-center text-center"
             style="background-color:var(--background); height:400px;">
          <div>
            <h3>Updated your Profile Information Successfully</h3>
            <p>Thank You for staying with us</p>
            <a href="login.php" class="tn-warning">Go to Profilen</a>
            <a href="login.php" class="tn-warning">Logout</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php
$content=ob_get_clean();
include '../layout.php';
?>