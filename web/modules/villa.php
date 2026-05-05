<?php
ob_start();
include '../../function.php';
include '../../config.php';

$conn = dbConnect();

// Fetch villas (change condition if needed)
$sql = "SELECT * FROM villa";
$result = mysqli_query($conn, $sql);

// Debug (optional)
// if(!$result){
//     die(mysqli_error($conn));
// }
?>

<!-- Header -->
<div class="d-flex justify-content-around align-items-center text-center p-3 row"
     style="top:10vh; background-color:var(--Quaternary); z-index:95; width:100vw;">
    <div class="col-5">
        <h4 style="font-size:5vh;">Villa</h4>
    </div>
</div>

<!-- Villas -->
<div style="top:18vh; min-height:100vh;">

<?php
$count = 0;

while($row = mysqli_fetch_assoc($result)) {

    // Open row every 3 cards
    if($count % 3 == 0){
        echo '<div class="row my-5 px-5 d-flex justify-content-around" style="width:100vw;">';
    }
?>

    <!-- Card -->
    <div class="col-3 m-0 p-0 room"
         style="background-color:var(--background); border: 0.5vh solid var(--background); border-radius: 2vh;">
        <!-- Image -->
        <div class="row">
            <img class="m-0 p-0"
                 src="<?= WEB_URL ?><?= $row['villa_image'] ?>"
                 alt="<?= $row['villa_name'] ?>"
                 style="height: 25vh; object-fit: cover; border-radius: 2vh 2vh 0 0;">
        </div>

        <!-- Details -->
        <div class="p-2">
            <a href="villa_view.php?id=<?= $row['villa_id'] ?>"> <h5 class="villa_title"><?= $row['villa_name'] ?></h5></a>

            <p>
                <span>
                    Price from 
                    <span class="price-value">$ <?= $row['villa_price'] ?></span> 
                    per night.
                </span>  <br>         
                <?= $row['villa_description'] ?><br>

                <span><i class="material-icons">bedroom_parent </i> <?= $row['villa_rooms'] ?></span>
                <span><i class="material-icons">person </i> <?= $row['max_capacity'] ?></span>
                <span><i class="material-icons">bathroom</i> <?= $row['villa_bathrooms'] ?></span>
                <span><i class="material-icons">ac_unit</i>
                
                <br/>

                <a href="/KingGardenViewHotel/web/modules/reviews.php?id=<?= $row['villa_id'] ?>">
                    Read Reviews
                </a>
            </p>
        </div>

    </div>

<?php
    // Close row after 3 cards
    if($count % 3 == 2){
        echo '</div>';
    }

    $count++;
}

// Close last row if not closed
if($count % 3 != 0){
    echo '</div>';
}
?>

</div>

<?php
$content = ob_get_clean();
include '../layout.php';
?>