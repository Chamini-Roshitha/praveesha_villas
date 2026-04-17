<?php
ob_start();
include '../config.php';
?>

<div class="banner">
    <div class="row">
        <div class="col-12">
            <div class="card_transparent m-0">
                <div class="row">
                <div class="col-lg-12 background " style="height: 600px;">
                <form class="container my-4 red p-5">
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

                <div class="col-md-2">
                <label class="form-label whitetxt">Nationality</label>
                <select class="form-select">
                        <option>Resident</option>
                        <option>Non-Resident</option>
                </select>
                </div>

                <div class="col-md-2">
                <label class="form-label whitetxt">Promo Code</label>
                <input type="text" class="form-control">
                </div>

                <div class="col-md-1 d-grid">
                <button class="btn btn-primary">Book</button>
                </div>

                </div>
                </form>
             </div>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>


<?php
$content = ob_get_clean();
include './layout.php';
?>