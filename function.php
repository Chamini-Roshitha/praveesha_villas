<?php
require_once 'config.php';

//Create Database Conection-------------------
function dbConnect()
{
    global $_DB_SERVER, $_DB_USERNAME, $_DB_PASSWORD, $_DB_NAME;
    $conn = new mysqli($_DB_SERVER, $_DB_USERNAME, $_DB_PASSWORD, $_DB_NAME);

    if ($conn->connect_error) {
        die("Database Error : " . $conn->connect_error);
    } else {
        return $conn;
    }
}