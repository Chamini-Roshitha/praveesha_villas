<?php
ob_start();
include '../../function.php';
?>

<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
          extract($_POST);

          echo $fname;

          $fname       = trim($fname ?? '');
          $lname       = trim($lname ?? '');
          $id          = trim($id ?? '');
          $email       = trim($email ?? '');
          
          $address_1   = trim($address_1 ?? '');
          $address_2   = trim($address_2 ?? '');
          $address_3   = trim($address_3 ?? '');

          $telephone   = trim($telephone ?? '');
          $mobile      = trim($mobile ?? '');

          $error =[];

          if(empty($fname)){
            $error['fname']= "First Name is required";
          }
          if(empty($lname)){
            $error['lname']= "Last Name is required";
          }
          if (empty($id)) {
            $error['id'] = "ID Number is required";
          }
          if (empty($email)) {
          $error['email'] = "Email is required";
          }
          if (empty($password)) {
          $error['password'] = "Password is required";
          }

          if (empty($confirm_pw)) {
              $error['confirm_pw'] = "Confirm Password is required";
          }

          if (empty($telephone)) {
          $error['telephone'] = "Telephone is required";
          }
          if (empty($gender)) {
          $error['gender'] = "Gender is required";
          }
          
          $file_name_new = NULL;
          if(empty($error)){
            if(!empty($_FILES['profile_pic']['name'])){
              $file=$_FILES['profile_pic'];

              $file_name=$file['name'];
              $file_tmp=$file['tmp_name'];
              $file_size=$file['size'];
              $file_error=$file['error'];

              $file_ext = explode('.', $file_name);
              $file_ext = strtolower(end($file_ext));

              $allowed_ext =['jpg', 'jpeg','png','gif',];

              if(in_array($file_ext,$allowed_ext)){
                if($file_error===0){
                  if($file_size<=2097152){
                    $file_name_new=uniqid('', true) . '.' . $file_ext;
                    $file_destination='../assets/img/uploads/'. $file_name_new;
                    move_uploaded_file($file_tmp, $file_destination);
                  }else{
                    $error['profile_pic']="File size must be less than 2MB";
                  }
                }else{
                  $error['profile_pic']="Error upload file";
                }
              }else{
              $error['profile_pic']="Profile picture is required";
              }
            }
          }

          if (empty($error)) {
            $con = dbConnect();

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user 
            (first_name, last_name, user_nic, user_email, user_password, address, city, province, telephone, mobile, gender, preferences, profile_image) 
            VALUES (
            '$fname',
            '$lname',
            '$id',
            '$email',
            '$hashed_password',
            '$address_1',
            '$address_2',
            '$address_3',
            '$telephone',
            '$mobile',
            '$gender',
            '$preferences',
            '$file_name_new'
            )";

            echo $sql;      
            $result = mysqli_query($con, $sql);

            if($result){
                header('Location:register_success.php');
                exit;
            } else {
                die("Error: " . mysqli_error($con));
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
                    <h2 class="d-flex justify-content-center align-items-center my-5">Registration</h2>
                </div>
            </div>
          <form method="post" enctype="multipart/form-data" novalidate>
            <!-- First Name -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>First Name</label>
              </div>
              <div class="col-6">
                <input type="text" name="fname" value="<?= @$fname ?>" required>
                <span class="text-danger"><?= @$error['fname'] ?></span>
              </div>
            </div>

            <!-- Last Name -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Last Name</label>
              </div>
              <div class="col-6">
                <input type="text" name="lname" value="<?= @$lname ?>" required>
                <span class="text-danger"><?= @$error['lname'] ?></span>
              </div>
            </div>

            <!-- ID -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>ID Number</label>
              </div>
              <div class="col-6">
                <input type="text" name="id" value="<?= @$id ?>" required>
                <span class="text-danger"><?= @$error['id'] ?></span>
              </div>
            </div>

            <!-- Email -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Email</label>
              </div>
              <div class="col-6">
                <input type="email" name="email" required>
                <span class="text-danger"><?= @$error['email'] ?></span>
              </div>
            </div>

            <!-- Password -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Password</label>
              </div>
              <div class="col-6">
                <input type="password" name="password">
                <span class="text-danger"><?= @$error['password'] ?></span>
              </div>
            </div>

            <!-- Confirm Password -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Confirm Password</label>
              </div>
              <div class="col-6">
                <input type="password" name="confirm_pw">
                <span class="text-danger"><?= @$error['confirm_pw'] ?></span>
              </div>
            </div>

            <!-- Address -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Address</label>
              </div>
              <div class="col-6">
                <input type="text" name="address_1" placeholder="Street">
                <input type="text" name="address_2" placeholder="City" class="mt-2">
                <input type="text" name="address_3" placeholder="Province" class="mt-2">
              </div>
            </div>

            <!-- Phone -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Telephone</label>
              </div>
              <div class="col-6">
                <input type="text" name="telephone">
                <span class="text-danger"><?= @$error['telephone'] ?></span>
                <input type="text" name="mobile" placeholder="Mobile" class="mt-2">
              </div>
            </div>

            <!-- Gender -->
            <div class="row my-3">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Gender</label>
              </div>
              <div class="col-6">
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <span class="text-danger"><?= @$error['gender'] ?></span>
              </div>
            </div>

            <!-- Preferences -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Preferences</label>
              </div>
              <div class="col-6">
                <textarea name="preferences" rows="3"></textarea>
              </div>
            </div>

            <!-- Image -->
            <div class="row my-2">
              <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Profile Image</label>
              </div>
              <div class="col-6">
                <input type="file" name="profile_pic">
                <span class="text-danger"><?= @$error['profile_pic'] ?></span>
              </div>
            </div>

            <!-- Buttons -->
            <div class="row mt-4 mb-5">
              <div class="col-10 d-flex justify-content-end">
                <button class="success-btn px-5 mx-2">Submit</button>
                <button type="button" class="fail-btn px-5">Cancel</button>
              </div>
            </div>

            <!-- Login link -->
            <div class="row">
              <div class="col-12 text-center mb-4">
                <p>Already have an account? <a href="login.php">Login</a></p>
              </div>
            </div>

          </div>
          </div>

          </form>

<?php
$content = ob_get_clean();
include '../layout.php';
?>