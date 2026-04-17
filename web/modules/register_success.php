<?php
ob_start();
include '../../config.php'
?>
<div class="contact-page section">
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-lg-6 col-md-8"> <!-- controls width -->
        <div class="card border-secondary d-flex justify-content-center align-items-center text-center"
             style="background-color:var(--background); height:400px;">
          <div>
            <h3>Registration Successful</h3>
            <p>Thank You for registering with us</p>
            <p>Please verify your email address to complete the registration process. We have sent a verification email to your inbox</p>
            <a href="login.php" class="tn-warning">Go to Login</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
include '../layout.php';
?>