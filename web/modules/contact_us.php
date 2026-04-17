<?php
ob_start();
include '../../config.php';
include '../../function.php';
?>


<body>
<div class="row">
    <div class="col-8 p-0 m-0">
        <img src="<?= WEB_URL ?>assets/images/banner-01.jpg" alt="" style="width: 100vw; height: 90vh; object-fit: cover;">  <!-- mask-image:linear-gradient( to top, transparent 5%, black 50%); -->
    </div>
    
    <div class="col-4 p-0 m-0" style="background-color:var(--background_translucent);position:absolute;right:0;width: 40vw; height: 90vh;">
        <h2 class="d-flex justify-content-center align-items-center my-5" style="font-size:45px;">Send Us Your Inquiry</h2>
        <form id="reg_form" enctype="multipart/form-data" action="" method="post" role="form" novalidate>
            <div class="row mx-5">
                <div class="d-flex justify-content-start align-items-bottom">
                    <label>First Name</label>

                </div>
            </div>
            <div class="row mx-5">
                <div class="d-flex justify-content-end align-items-center">
                    <input type="text" class="fail-glow" name="fname" id="fname" placeholder="First Name" required />
                </div>
            </div>

            <div class="row mx-5">
                <div class="d-flex justify-content-start align-items-bottom">
                <label>Last Name</label>
                </div>
            </div>
            <div class="row mx-5">
                <div class="d-flex justify-content-end align-items-center">
                    <input type="text" class="fail-glow" name="lname" id="lname" placeholder="Last Name" required />
                </div>
            </div>



            <div class="row mx-5">
                <div class="d-flex justify-content-start align-items-bottom">
                    <label>Email</label>
                </div>
            </div>
            <div class="row mx-5">
                <div class="d-flex justify-content-end align-items-center">
                    <input type="text" class="fail-glow" name="email" id="email" placeholder="Email" required />
                </div>
            </div>

            <div class="row mx-5">
                <div class="d-flex justify-content-start align-items-bottom">
                    <label>Subject</label>
                </div>
            </div>

            <div class="row mx-5">
                <div class="d-flex justify-content-end align-items-center">
                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                </div>
            </div> 

            <div class="row mx-5">
                <div class="d-flex justify-content-start align-items-bottom">
                    <label>Message</label>
                </div>
            </div>
            <div class="row mx-5">
                <div class="d-flex justify-content-end align-items-center">
                    <textarea name="message" rows="3"></textarea>
                </div>
            </div>
            
            
            <div class="row mx-5">
                <div class="d-flex justify-content-start align-items-bottom">
                    <label>Contact Number</label>
                </div>
            </div>
            <div class="row mx-5">
                <div class="d-flex justify-content-end align-items-center">
                    <input type="text" name="telephone" id="telephone" placeholder="Telephone" />
                </div>
            </div>
            <div class="row mx-5">
                <div class="d-flex justify-content-end align-items-center">
                <button class="success-btn px-4 mx-4" name="submit_btn" id="submit_btn" data-bs-toggle="modal" data-bs-target="#Confirm" >Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layout.php';
?>