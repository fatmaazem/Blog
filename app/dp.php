<?php
require_once('../../../database/connection.php');

function getRow(string $table, $id) {
    global $conn;

    
    if (empty($id)) {
        return false;
    }

    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);

    
    if (mysqli_affected_rows($conn)) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}
