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
        $sql = "SELECT * FROM reservation;";
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo "<table border='1' cellpadding='10'>";
                echo "<thead>
                        <tr>
                            <th>Reservation ID</th>
                            <th>Villa ID</th>
                            <th>User ID</th>
                            <th>Booking Date</th>
                            <th>Guest Count</th>
                            <th>Total Price ($)</th>
                            <th>Check In Date</th>
                            <th>Check Out Date</th>
                            <th>Number Of Days</th>
                            <th>Reservation Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>";
                
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["reservation_id"] ."</td>";
                    echo "<td>" . $row["user_id"] . "</td>";
                    echo "<td>" . $row["villa_id"] . "</td>";
                    echo "<td>" . $row["reservation_booking_date"] ."</td>";
                    echo "<td>" . $row["reservation_guest_count"] . "</td>";
                    echo "<td>" . $row["reservation_total_price"] . "</td>";
                    echo "<td>" . $row["reservation_check_in_date"] . "</td>";
                    echo "<td>" . $row["reservation_check_out_date"] . "</td>";
                    echo "<td>" . $row["number_of_days"] . "</td>";
                    echo "<td>" . $row["reservation_status"] . "</td>";
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