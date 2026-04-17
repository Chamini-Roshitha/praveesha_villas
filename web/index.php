<?php
ob_start();
include '../config.php';
?>

<div class="position-relative" style="height: 90vh; overflow: hidden;">

    <div id="bgCarousel" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100" data-bs-ride="carousel" style="z-index: 1;">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100 banner" data-bs-interval="5000">
                <div class="w-100 h-100"></div>
            </div>
            <div class="carousel-item h-100 banner2" data-bs-interval="5000">
                <div class="w-100 h-100"></div>
            </div>
            <div class="carousel-item h-100 banner3" data-bs-interval="5000">
                <div class="w-100 h-100"></div>
            </div>
            <div class="carousel-item h-100 banner4" data-bs-interval="5000">
                <div class="w-100 h-100"></div>
            </div>
            <div class="carousel-item h-100 banner5" data-bs-interval="5000">
                <div class="w-100 h-100"></div>
            </div>
        </div>
    </div>

    <div class="container position-relative d-flex align-items-end justify-content-center" style="height: 90vh; z-index: 2;">
        <div class="row">
            <div class="col-12 background card_transparent mb-5">
                <form class="container my-2">
                    <div class="row g-3">
                        <div class="col-md-2">
                            <label class="form-label whitetxt">Check-in</label>
                            <input type="date" class="form-control" id="checkin">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label whitetxt">Check-out</label>
                            <input type="date" class="form-control" id="checkout">
                        </div>
                        <div class="col-md-1">
                            <label class="form-label whitetxt">Rooms</label>
                            <select class="form-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label whitetxt">Adults</label>
                            <select class="form-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label whitetxt">Children</label>
                            <select class="form-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label class="form-label whitetxt">Nationality</label>
                            <select class="form-select">
                                <option>Resident</option>
                                <option>Non-Resident</option>
                            </select>
                        </div>
                        <div class="col-3 mb-2 d-flex justify-content-center">
                            <button class="btn success-btn">Check Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php
$content = ob_get_clean();
include './layout.php';
?>