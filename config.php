<?php
$host = "sql306.infinityfree.com";
$user = "if0_40924278";
$pass = "9w8Tfs3fpu";
$dbname = "if0_40924278_kma_gym"; // KANI DAPAT: Ang full name sa DB gikan sa vPanel

// 1. Koneksyon nga naay DB name na daan
$conn = new mysqli($host, $user, $pass, $dbname);

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Auto-create table (Kini pwede ra ni sa InfinityFree)
$conn->query("CREATE TABLE IF NOT EXISTS reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    class_type VARCHAR(50) NOT NULL,
    book_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");
?>