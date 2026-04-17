<?php
ob_start();
include '../../function.php';
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
                $sql = "SELECT * FROM user where user_email =  '$email'";
                $result = $con->query($sql);
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    if (password_verify($password, $row['user_password'])) {
                        header('Location:dashboard.php');
                        exit();
                    }}
            }catch(exception $e){
              die("Error: " . $e->getmessage());
            }
        
        }
    }
?>

<div class="container mt-5 p-5">
        <div class="card">
            <div class="row">
                <div class="col-2 p-4">
                    <a href="<?=  WEB_URL ?>index.php"><i class="material-icons">home</i>Back Home</a>
                </div>
                <div class="col-8 d-flex justify-content-center mt-4">
                    <h2 class="d-flex justify-content-center align-items-center my-5">Log In</h2>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data" novalidate>
                <div class="row my-2">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label>User Email</label>
                    </div>
                    <div class="col-6 d-flex">
                        <input type="text" name="user_email" id="user_email" placeholder="User Email" required />
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label>Password</label>
                    </div>
                    <div class="col-6 d-flex">
                        <input type="password" name="password" id="password" placeholder="Password" required />
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 d-flex justify-content-center">
                        <p><?= @$message['message'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 d-flex justify-content-end">
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
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <img src="<?=  WEB_URL ?>assets/images/mountains.png" alt="mountains_1" style="width:100%; border-radius: 10px;position:absolute;bottom:0;left:0;z-index: 0;">
                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
include '../layout.php';
?>