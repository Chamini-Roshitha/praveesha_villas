<?php
session_start();
include_once '../function.php';
include_once '../config.php';
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        extract($_POST);
        $email =trim($user_email);

        $error =[];

         // validation
            if (empty($email)) {
                $error['email'] = "Email is required";
            }
            if (empty($password)) {
                $error['password'] = "Password is required";
            }
        if (empty($error)) {
            try{
                $con=dbConnect();
                $sql = "SELECT * FROM users where user_email =  '$email'";
                $result = $con->query($sql);
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    if (password_verify($password, $row['user_password'])) {
                        $_SESSION['ISLOGIN'] = true;
                        $_SESSION['USER_EMAIL'] = $row['user_email'];
                        $_SESSION['USER_ID'] = $row['user_id'];
                        header('Location:dashboard.php');
                        exit();
                    }}
            }catch(exception $e){
              die("Error: " . $e->getmessage());
            }
        
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Praveesha Villas</title>

    <link href="<?= SYS_URL ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= SYS_URL ?>assets/css/mystyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>
<div class="row m-0 p-0">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light col-12" style="background-color:var(--secondary)">
      <a href="<?= WEB_URL ?>index.php" class="logo">
        <img src="<?=  WEB_URL ?>assets/images/logoPV.png" width="40" height="40" class="ms-4">
      </a>
      <a class="navbar-brand" href="<?= WEB_URL ?>index.php"><h4 class="h3 m-0 p-0 ms-4">Praveesha Villas</h4></a>
    </nav>
</div>
<div class="row">
    <div class="col-7 p-0 m-0">
        <img src="<?= WEB_URL ?>assets/images/banner-01.jpg" alt="" style="width: 100vw; height: 90vh; object-fit: cover;">  <!-- mask-image:linear-gradient( to top, transparent 5%, black 50%); -->
    </div>
    <div class="col-5 p-5 m-0" style="background-color:var(--background_translucent);position:relative;right:0; height: 90vh;">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-4">
                    <h2 class="d-flex justify-content-center align-items-center my-5">Log In</h2>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data" novalidate>
                <div class="row my-2">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label class="whitetxt">User Email</label>
                    </div>
                    <div class="col-6 d-flex whitetxt" style="z-index: 1;">
                        <input class="whitetxt" type="text" name="user_email" id="user_email" placeholder="User Email" required />
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-4 d-flex justify-content-end align-items-center whitetxt">
                        <label class="whitetxt">Password</label>
                    </div>
                    <div class="col-6 d-flex" style="z-index: 1;">
                        <input class="whitetxt" type="password" name="password" id="password" placeholder="Password" required />
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 d-flex justify-content-center">
                        <p><?= @$message['message'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 d-flex justify-content-end" style="z-index: 1;">
                        <p> Forgot Password ? <a href="recover.php"> Recover password </a></p>
                    </div>
                </div>
                <div class="row mt-3 mb-5" >
                    <div class="col-10 d-flex justify-content-end">
                        <button id="submit_btn" class="success-btn mx-4" style="z-index: 1;">Login</button>
                        <button id="clear_btn" class="fail-btn" style="z-index: 1;">Clear</button>
                    </div>
                </div>
            </form>
    </div>
</div>



  <!-- Java Scripts -->
  <script src="<?= SYS_URL ?>assets/js/bootstrap.js"></script>
  <script src="<?= SYS_URL ?>assets/js/mystyle.js"></script>

</body>
</html>