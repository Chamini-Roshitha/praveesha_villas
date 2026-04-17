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
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            </div>
        </div>
    </div>
</div>
             
<?php
$content = ob_get_clean();
include '../layout.php';
?> 