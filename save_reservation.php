<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $class = $conn->real_escape_string($_POST['class_type']);
    $date = $conn->real_escape_string($_POST['book_date']);

    $sql = "INSERT INTO reservations (fullname, class_type, book_date) VALUES ('$name', '$class', '$date')";
    
    if ($conn->query($sql)) {
        header("Location: index.php?status=success");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>