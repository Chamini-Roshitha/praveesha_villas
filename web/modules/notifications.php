<?php
ob_start();
include '../../config.php'
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="card m-3 list-group" style="width: 30rem; height: 45rem;">
            <a href="dashboard.php" class="list-group-item list-group-item-action tn-warning">Personal Details</a><br>
            <a href="pastbookings.php" class="list-group-item list-group-item-action tn-warning">Past Booking</a><br>
            <a href="currentbookings.php" class="list-group-item list-group-item-action tn-warning">Current Bookings</a><br>
            <a href="notifications.php" class="list-group-item list-group-item-action tn-warning">Notifications</a><br>
            </div>
        </div>
        <div class="col-lg-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
                </ul>
        </div>
    </div>
</div>
             
<?php
$content = ob_get_clean();
include '../layout.php';
?> 