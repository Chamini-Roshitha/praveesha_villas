<?php
ob_start();
include '../../function.php';
?>

<div class="d-flex justify-content-around align-items-center text-center p-3 row"  style=" top:10vh; background-color:var(--fourth); z-index:95; width:100vw; ">
    <div class="col-5"  style="background-color:var(--fourth);">
        <h4 style="font-size:3vh;">Gallery</h4>
    </div>
</div>

<div style="top:18vh; background-image: var(--background_img_03); min-height:100vh;">

    <div class="row my-5 px-5 d-flex justify-content-around" style="width:100vw;">
        <div name="5" id="5" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v1.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
        <div name="6" id="6" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v2.avif" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
        <div name="7" id="7" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v3.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
    </div>


    <div class="row my-5 px-5 d-flex justify-content-around" style="width:100vw;">
        <div name="5" id="5" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/g1.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
        <div name="6" id="6" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/g2.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
        <div name="7" id="7" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/g3.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
    </div>


    <div class="row my-5 px-5 d-flex justify-content-around" style="width:100vw;">
        <div name="5" id="5" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v4.webp" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
        <div name="6" id="6" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v3.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
        <div name="7" id="7" class="col-3 m-0 p-0 room" style="background-color:var(--background);border: 0.5vh solid var(--background);border-radius: 2vh;">
            <div class="row">
                <img class="m-0 p-0" src="<?= WEB_URL ?>assets/images/v3.jpg" alt="" style="height: 25vh; object-fit: cover; border-radius: 2vh ;">
            </div>
        </div>
    </div>
    
</div>


<?php
$content = ob_get_clean();
include '../layout.php';
?>