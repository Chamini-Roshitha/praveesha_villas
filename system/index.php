<?php
ob_start();
include '../config.php';
?>

INDEX

<?php
$content = ob_get_clean();
include './layout.php';
?>