<?php
ob_start();
include '../../function.php';
?>

<div class="d-flex justify-content-around align-items-center text-center p-3 row"  style=" top:10vh; background-color:var(--fourth); z-index:95; width:100vw; ">
    <div class="col-5"  style="background-color:var(--fourth);">
        <h4 style="font-size:3vh;">Book a Villa</h4>
    </div>
</div>

<div style="top:18vh; background-image: var(--background_img_03); min-height:100vh;">
    <div class="row my-5 px-5 d-flex justify-content-around" style="width:100vw;"><div name="1" id="1" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
        <div class="row">
            <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v1.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh 2vh 0 0;">
        </div>
        <div class="p-2">
            <label>Deluxe Single</label>
            <p>Price : Rs 2500 per person a night.<br>
                Discounted price : Rs.2500 for your entire stay<br>
                Occupancy : 1<br><i class="material-icons">wifi</i><i class="material-icons">ac_unit</i><i class="material-icons">attach_money</i><br/><a href="/KingGardenViewHotel/web/modules/reviews.php?id=">Read Reviews</a></p>
            </div>
        </div>


        <div name="2" id="2" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
        <div class="row">
            <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v2.avif" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh 2vh 0 0;">
        </div>
        <div class="p-2">
            <label>Deluxe Double</label>
            <p>Price : Rs 3500 per person a night.<br>
                Discounted price : Rs.3500 for your entire stay<br>
                Occupancy : 2<br><i class="material-icons">wifi</i><i class="material-icons">ac_unit</i><i class="material-icons">attach_money</i><br/><a href="/KingGardenViewHotel/web/modules/reviews.php?id=">Read Reviews</a></p>
            </div>
        </div>


        <div name="3" id="3" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
        <div class="row">
            <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v4.webp" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh 2vh 0 0;">
        </div>
        <div class="p-2">
            <label>Standard Single</label>
            <p>Price : Rs 1800 per person a night.<br>
                Discounted price : Rs.1800 for your entire stay<br>
                Occupancy : 1<br><i class="material-icons">wifi</i><i class="material-icons">attach_money</i><br/><a href="/KingGardenViewHotel/web/modules/reviews.php?id=">Read Reviews</a></p>
            </div>
        </div>
    </div>

    <div class="row my-5 px-5 d-flex justify-content-around" style="width:100vw;"><div name="5" id="5" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
        <div class="row">
            <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v3.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh 2vh 0 0;">
        </div>
        <div class="p-2">
            <label>Executive Suite</label>
            <p>Price : Rs 6000 per person a night.<br>
                Discounted price : Rs.6000 for your entire stay<br>
                Occupancy : 4<br><i class="material-icons">wifi</i><i class="material-icons">ac_unit</i><i class="material-icons">favorite</i><br/><a href="/KingGardenViewHotel/web/modules/reviews.php?id=3">Read Reviews</a></p>
            </div>
        </div>


        <div name="6" id="6" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
        <div class="row">
            <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v4.webp" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh 2vh 0 0;">
        </div>
        <div class="p-2">
            <label>Family Room</label>
            <p>Price : Rs 4500 per person a night.<br>
                Discounted price : Rs.4500 for your entire stay<br>
                Occupancy : 5<br><i class="material-icons">wifi</i><i class="material-icons">ac_unit</i><i class="material-icons">favorite</i><br/><a href="/KingGardenViewHotel/web/modules/reviews.php?id=5">Read Reviews</a></p>
            </div>
        </div>


        <div name="7" id="7" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
        <div class="row">
            <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v4.webp" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh 2vh 0 0;">
        </div>
        <div class="p-2">
            <label>Economy Single</label>
            <p>Price : Rs 1200 per person a night.<br>
                Discounted price : Rs.1200 for your entire stay<br>
                Occupancy : 1<br><i class="material-icons">attach_money</i><br/><a href="/KingGardenViewHotel/web/modules/reviews.php?id=">Read Reviews</a></p>
            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
include '../layout.php';
?>