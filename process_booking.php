<?php
$conn = new mysqli("localhost", "root", "", "kma_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $prog = $_POST['program'];
    $date = $_POST['reserve_date'];

    $sql = "INSERT INTO reservations (fullname, program, reserve_date) VALUES ('$name', '$prog', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking Successful! See you at KMA.'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>