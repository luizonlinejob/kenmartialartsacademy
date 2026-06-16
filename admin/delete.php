<?php
session_start();
include('../config.php');

if(isset($_SESSION['admin_logged_in']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM reservations WHERE id = $id");
}
header("Location: dashboard.php");
exit;
?>