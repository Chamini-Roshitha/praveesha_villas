<?php
ob_start();
include '../../config.php';
include '../../function.php';
?>

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Complaints</h3>

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
        $sql = "SELECT * FROM complaint;";
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo "<table border='1' cellpadding='10'>";
                echo "<thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>User ID</th>
                            <th>Villa ID</th>
                            <th>Description</th>
                            <th>Complaint Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>";
                
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["complaint_Id"] ."</td>";
                    echo "<td>" . $row["user_id"] . "</td>";
                    echo "<td>" . $row["villa_id"] ."</td>";
                    echo "<td>" . $row["description"] ."</td>";
                    echo "<td>" . $row["Complaint_status"] . "</td>";
                    echo "<td>
                        <a href='edit_guest.php?id=".$row["user_id"]."' class='btn btn-warning btn-sm'>Modify</a>
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



<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Feedback</h3>

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
        $sql = "SELECT * FROM feedback;";
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo "<table border='1' cellpadding='10'>";
                echo "<thead>
                        <tr>
                            <th>Feedback ID</th>
                            <th>User ID</th>
                            <th>Villa ID</th>
                            <th>Reservation ID</th>
                            <th>Rating</th>
                            <th>Comment</th>
                            <th>Created Date</th>
                            <th>Updateed Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>";
                
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["feedback_id"] ."</td>";
                    echo "<td>" . $row["user_id"] . "</td>";
                    echo "<td>" . $row["villa_id"] ."</td>";
                    echo "<td>" . $row["reservation_id"] ."</td>";
                    echo "<td>" . $row["rating"] . "</td>";
                    echo "<td>" . $row["comment"] . "</td>";
                    echo "<td>" . $row["created_at"] . "</td>";
                    echo "<td>" . $row["updated_at"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td>
                        <a href='edit_guest.php?id=".$row["user_id"]."' class='btn btn-warning btn-sm'>Modify</a>
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