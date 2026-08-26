<?php
ob_start();
include '../../init.php';
$conn = dbConnect();
// Load roles
$roles = [];
$result = $conn->query("SELECT * FROM roles");
while ($row = $result->fetch_assoc()) {
    $roles[] = $row;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);
    $error = [];

    // validation
    if (empty($fname)) $error['fname'] = "First name required";
    if (empty($lname)) $error['lname'] = "Last name required";
    if (empty($email)) $error['email'] = "Email required";
    if ($password !== $confirm_pw) $error['confirm_pw'] = "Passwords do not match";

    if (empty($error)){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users
        (first_name, last_name, guest_email, guest_password, role_id) 
        VALUES ('$fname', '$lname', '$id', '$email', '$hashed_password', $role_id)";    
        $result = mysqli_query($con, $sql);
    }

      if($result){
          header('Location:register_success.php');
          exit;
      } else {
          die("Error: " . mysqli_error($con));
      }
    }
?>
<div class="container mt-5 p-5">
    <div class="card">
        <div class="row">
            <div class="col-8 d-flex justify-content-center mt-4">
                <h2 class="d-flex justify-content-center align-items-center my-5">Create User</h2>
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
            <label>NIC</label>
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

        
        
           <!-- Buttons -->
        <div class="row mt-4 mb-5">
            <div class="col-4 text-end">
            <label>Role</label>
        </div>
        <div class="col-6">
            <select name="role_id" class="form-control">
                <?php foreach ($roles as $r): ?>
                    <option value="<?= $r['id'] ?>">
                        <?= $r['role_name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row">
            <div class="col-10 text-end">
                <button class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</form>

<?php
$content = ob_get_clean();
include '../layout.php';
?>