<?php
ob_start();
include '../../config.php';
include '../../function.php';

$conn = dbConnect();

$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM villa WHERE villa_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Safety check
if(!$row){
    echo "Villa not found";
    exit;
}
?>

<div class="container mt-5 p-4">

    <!-- Back Button -->
    <div class="row mb-3">
        <div class="col-12">
            <a href="villa.php">
                <i class="material-icons">arrow_back</i> Back to Villas
            </a>
        </div>
    </div>

    <!-- Main Card -->
    <div class="card p-4">

        <!-- Title -->
        <div class="row text-center">
            <div class="col-12">
                <h2><?= $row['villa_name'] ?></h2>
                <h4>Status: <?= $row['villa_status'] ?></h4>
            </div>
        </div>

        <!-- Image -->
        <div class="row mt-3">
            <div class="col-12">
                <img 
                    src="<?= WEB_URL ?><?= $row['villa_image'] ?>" 
                    style="width:100%; height:50vh; object-fit:cover; border-radius:10px;">
            </div>
        </div>

        <!-- Price -->
        <div class="row mt-4 text-center">
            <div class="col-12">
                <h4>
                    Price from 
                    <span style="color:var(--secondary); font-size:5vh;">
                        $<?= $row['villa_price'] ?>
                    </span> / night
                </h4>
            </div>
        </div>

        <!-- Info Section -->
        <div class="row mt-4 text-center">

            <div class="col-4">
                <h4><?= $row['villa_rooms'] ?></h4>
                <h4>Rooms</h4>
            </div>

            <div class="col-4">
                <h4><?= $row['villa_bathrooms'] ?></h4>
                <h4>Bathrooms</h4>
            </div>

            <div class="col-4">
                <h4><?= $row['max_capacity'] ?></h4>
                <h4>Max Guests</4>
            </div>

        </div>

        <!-- Description -->
        <div class="row mt-5">
            <div class="col-12">
                <h4>About this Villa</h4>
                <label><?= nl2br($row['villa_description']) ?></label>
                <ul>
                    <li>Maximum Occupancy: 8</li>
                    <li>Additional guests not allowed</li>
                </ul>

                <h4>Meal Plan</h4>
                <ul>
                    <li>Meals are charged additionally </li>
                    <li>A private chef is available to prepare meals at grocery cost +20% service charge</li>
                </ul>

                <h4>Inclusions & Staff</h4>
                <ul>
                    <li>Exclusive use of the villa, pool, and courtyard</li>
                    <li>Full staff provided, including a chef</li>
                    <li>WiFi, Smart TV, toiletries, and robes available</li>
                </ul>

                <h4>Amenities and Facilities</h4>
                <ul>
                    <li>4 Air-Conditioned Bedrooms with Ensuite Bathrooms</li>
                    <ul>
                        <li><?= $row['villa_rooms'] ?> bedroom with a double bed</li>
                        <li><?= $row['villa_bathrooms'] ?> bathrooms are avaliable</li>
                    </ul>
                    <li>20-Metre Private Swimming Pool</li>
                    <ul>
                        <li>Sun loungers, day beds, shaded lounge</li>
                    </ul>
                    <li>Lush Tropical Gardens (5 acres)</li>
                    <li>Indoor Games, Yoga Shala, TV, Music Player, WiFi</li>
                    <li>Colonial white architecture with bright airy design</li>
                </ul>

                <h4>Villa Layout and Details</h4>

                <h5>Ground Floor</h5>
                <ul>
                    <li><strong>Living Room:</strong> Fan-cooled with sofas, armchairs, beanbags</li>
                    <li><strong>Dining Area:</strong> Open veranda dining for 10 guests</li>
                    <li><strong>Kitchen:</strong> Fully equipped, chef accessible</li>
                    <li><strong>Bedrooms:</strong><? $row['villa_rooms'] ?> bedrooms with ensuite <?= $row['villa_bathrooms'] ?></li>
                </ul>


                <h5>Outdoor Areas</h5>
                <ul>
                    <li>Private 20m swimming pool</li>
                    <li>Sun deck + shaded lounge</li>
                    <li>Large tropical garden space</li>
                </ul>

                <h5>Additional Features</h5>
                <ul>
                    <li>Indoor-outdoor living design</li>
                    <li>High-speed WiFi, Smart TV, music system</li>
                </ul>
            </div>
        </div>

        <!-- Actions -->
        <div class="row mt-5 text-center">
            <div class="col-12">

                <button class="success-btn">Book Now</button>

                <br><br>

                <a href="reviews.php?id=<?= $row['villa_id'] ?>">
                    Read Reviews
                </a>

            </div>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layout.php';
?>