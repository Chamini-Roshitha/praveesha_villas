<?php
ob_start();
include '../../config.php';
include '../../function.php';
?>

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Employee Table</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
                </button>
            </div>
            </div>
        </div>
        </div>
        <div class="card-body table-responsive p-0">

        <?php
        $con=dbConnect();
        $sql = "SELECT * FROM employee;";
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo "<table border='1' cellpadding='10'>";
                echo "<thead>
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>NIC</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>T.P. No</th>
                            <th>Employee Hire Date </th>
                            <th>Action</th>
                        </tr>
                    </thead>";
                
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><a href='profile_employee.php?id=" . $row["user_id"] . "'>" . $row["user_id"] . "</a></td>";
                    echo "<td>" . $row["employee_name"] . "</td>";
                    echo "<td>" . $row["employee_nic"] . "</td>";
                    echo "<td>" . $row["employee_email"] ."</td>";
                    echo "<td>" . $row["role_id"] . "</td>";
                    echo "<td>" . $row["employee_phone"] . "</td>";
                    echo "<td>" . $row["employee_hire_date"] . "</td>";
                    echo "<td>
                        <a href='employee_modify.php?id=".$row["user_id"]."' class='btn btn-warning btn-sm'>Modify</a>
                        <a href='delete_guest.php?id=".$row["user_id"]."' class='btn btn-danger btn-sm'
                        onclick=\"return confirm('Are you sure?');\">Delete</a>
                    </td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "No records found.";
            }
            ?>

        </div>
    </div>
    </div>
</div>

<?php
$content=ob_get_clean();
include '../layout.php';
?>