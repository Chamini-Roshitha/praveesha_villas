<?php
ob_start();
include '../../config.php';
include '../../function.php';
?>

<div class="row">
    <div class="col-8 p-0 m-0">
        <img src="<?= WEB_URL ?>assets/images/banner-01.jpg" alt="" style="width: 100vw; height: 90vh; object-fit: cover;">  <!-- mask-image:linear-gradient( to top, transparent 5%, black 50%); -->
    </div>
    <div class="col-4 p-5 m-0" style="background-color:var(--background_translucent);position:absolute;right:0;width: 40vw; height: 90vh;">
        <h2 style="font-size:10vh;">welcome</h2>
        <h2 style="font-size:3vh;">to a relaxing stay <br> at our humble abode</h2>
        <h4 style="font-size:2vh; text-align: justify; text-justify: inter-word; color:var(--primary_font);" class="pt-4">
            At Praveesha Villa, we are committed to operating with sustainability at the heart of everything we do. Our focus extends beyond delivering exceptional guest experiences to fostering a culture of responsibility, care, and community. 
            <br>We place great importance on the safety, wellbeing, and mental health of our team, ensuring a positive and supportive environment. Through thoughtful and sustainable practices, we strive to create meaningful benefits for both our guests and the local community, enriching lives within and beyond the villa.
        </h4>

        <h2 class="my-5 py-4 text-center" id="destinations_link" style="font-size:3vh; border-bottom: 0.5vh solid; border-top: 0.5vh solid;">Checkout some of the wonderful destinations<br>you can explore while you are staying with us. </h2>

        <div class="btn-group-vertical">
            <button type="button" class="clear_btn p-0 m-0" data-bs-toggle="modal" data-bs-target="#Sustainability">
                <p style="font-size:2vh;" class="p-0 m-0">• View Sustainability Policy</p>
            </button>
            <button type="button" class="clear_btn p-0 m-0" data-bs-toggle="modal" data-bs-target="#Food">
                <p style="font-size:2vh;" class="p-0 m-0">• View Food Safety Policy</p>
            </button>
            <button type="button" class="clear_btn p-0 m-0" data-bs-toggle="modal" data-bs-target="#Environmental">
                <p style="font-size:2vh;" class="p-0 m-0">• View Environmental Policy</p>
            </button>
            <button type="button" class="clear_btn p-0 m-0" data-bs-toggle="modal" data-bs-target="#Child">
                <p style="font-size:2vh;" class="p-0 m-0">• View Child Protection Policy</p>
            </button>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include '../layout.php';
?>