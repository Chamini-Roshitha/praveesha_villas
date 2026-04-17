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
            <div class="card m-4" style="width: 90rem;">
                <img class="card-img-top rounded-circle img-fluid mx-auto d-block" style="width: 150px;" src="<?=  WEB_URL ?>assets/images/profile.png" alt="Card image cap" height="100px">
                    <div class="card-body ">
                        <h3 class="card-text text-center">Name</h3>
                        <p class="card-text text-center">Last Update : date: time</p>
                        <p class="card-text text-center">Active</p>
                        <div class="justify-center items-center gap-3">
                        <a href=""><button type="button" class="px-3 py-2" style="width:8vw;">Edit</button></a>
                        <a href=""><button type="button" class="px-3 py-2" style="width:8vw;">Logout</button></a>
                        </div>
                    </div>
                </img>
            </div>
            <div class="card m-4" style="width: 90rem;">
                <div class="card-header m-1">
                    Personal Details
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">First Name : </li>
                    <li class="list-group-item">Last Name : </li>
                    <li class="list-group-item">Email Address : </li>
                    <li class="list-group-item">Address : </li>
                    <li class="list-group-item">Telephone No. : </li>
                    <li class="list-group-item">Mobile No. : </li>
                </ul>
            </div>
        </div>
    </div>
</div>
             
<?php
$content = ob_get_clean();
include '../layout.php';
?> 