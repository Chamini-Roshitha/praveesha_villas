<?php
ob_start();
include '../../config.php';
include '../../function.php';
$conn = dbConnect();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    extract($_POST);

    $fname       = trim($fname ?? '');
    $id          = trim($id ?? '');
    $email       = trim($email ?? '');

    $telephone   = trim($telephone ?? '');

    $error =[];

    if(empty($fname)){
    $error['fname']= "First Name is required";
    }
    if (empty($id)) {
    $error['id'] = "ID Number is required";
    }
    if (empty($email)) {
    $error['email'] = "Email is required";
    }

    if (empty($telephone)) {
    $error['telephone'] = "Telephone is required";
    }
    // if (empty($gender)) {
    // $error['gender'] = "Gender is required";
    // }
    
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
        $user_id = (int) $_GET['id'];

        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE employee SET
        employee_name = '$fname',
        employee_nic = '$id',
        employee_email = '$email',
        employee_phone = '$telephone'
        WHERE user_id = $user_id";
   
        $result = mysqli_query($con, $sql);

        if($result){
            header("Location:profile_employee.php?id=$user_id");
            exit;
        } else {
            die("Error: " . mysqli_error($con));
        }
    }
} else{
    // check ID
    if (!isset($_GET['id'])) {
        echo "Invalid request";
        exit;
    }

    $user_id = (int) $_GET['id'];

    // fetch user
    $sql = "SELECT * FROM employee WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    $employee = mysqli_fetch_assoc($result);

    if (!$employee) {
        echo "User not found";
        exit;
    }
}
?>
<div class="container mt-5 p-5">
    <div class="card">
        <div class="row">
            <div class="col-2 p-4">
                <a href="<?=  SYS_URL ?>dashboard.php"><i class="material-icons">home</i>Back Home</a>
            </div>
            <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?= !empty($employee['profile_image'])? SYS_URL . $employee['profile_image'] : SYS_URL . 'assets/dist/img/user1-128x128.jpg'; ?>"
            alt="User profile picture">
            </div>

            <h3 class="profile-username text-center"><?php echo $employee['employee_name']; ?></h3>
            </div>
             
        </div>
        <form method="post" enctype="multipart/form-data" novalidate>
            <!-- First Name -->
            <div class="row my-2">
                <div class="col-4 d-flex justify-content-end align-items-center">
                <label>First Name</label>
                </div>
                <div class="col-6">
                <input type="text" name="fname" value="<?= $employee['employee_name'] ?>" required>
                <span class="text-danger"><?= @$error['fname'] ?></span>
                </div>
            </div>


            <!-- ID -->
            <div class="row my-2">
                <div class="col-4 d-flex justify-content-end align-items-center">
                <label>NIC</label>
                </div>
                <div class="col-6">
                <input type="text" name="id" value="<?= $employee['employee_nic'] ?>" required>
                <span class="text-danger"><?= @$error['id'] ?></span>
                </div>
            </div>

            <!-- Email -->
            <div class="row my-2">
                <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Email</label>
                </div>
                <div class="col-6">
                <input type="email" name="email" value="<?= $employee['employee_email'] ?>" required>
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

            <!-- Phone -->
            <div class="row my-2">
                <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Telephone</label>
                </div>
                <div class="col-6">
                <span class="text-danger"><?= @$error['telephone'] ?></span>
                <input type="text" name="telephone" placeholder="telephone" class="mt-2" value="<?= $employee['employee_phone'] ?>">
                </div>
            </div>

            <!-- Gender -->
            <!-- <div class="row my-3">
                <div class="col-4 d-flex justify-content-end align-items-center">
                <label>Gender</label>
                </div>
                <div class="col-6">
                <input type="text" name="gender" placeholder="Gender" class="mt-2" value="<?= $employee['gender'] ?>">
                </div>
            </div> -->

            <!-- Buttons -->
            <div class="row mt-4 mb-5">
                <div class="col-10 d-flex justify-content-end">
                <button type ="submit" class="success-btn mx-2">Update</button>
                <button class="fail-btn">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php
$content=ob_get_clean();
include '../layout.php';
?>