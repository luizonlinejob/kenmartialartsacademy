<?php
session_start();
if(isset($_SESSION['admin_logged_in'])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Usba kini nga credentials
    if ($username === "admin" && $password === "KMA2012") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KMA ADMIN | LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <style>
        body { background: #000; color: #fff; font-family: 'Oswald', sans-serif; display: flex; align-items: center; height: 100vh; }
        .login-card { background: #1a1a1a; border: 2px solid #d20a0a; padding: 40px; width: 100%; max-width: 400px; margin: auto; }
        .btn-ufc { background: #d20a0a; color: #fff; border: none; clip-path: polygon(10% 0, 100% 0, 90% 100%, 0% 100%); width: 100%; font-weight: bold; padding: 10px; }
        .form-control { background: #333; border: none; color: #fff; border-radius: 0; }
        .form-control:focus { background: #444; color: #fff; box-shadow: none; border: 1px solid #d20a0a; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2 class="text-center mb-4 text-uppercase">Admin Login</h2>
        <?php if($error): ?>
            <div class="alert alert-danger p-2 small"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-ufc mt-3">LOGIN TO DASHBOARD</button>
        </form>
        <a href="https://kenmartialarts.ct.ws/index.php" class="back-link">← Return to Main Site</a>
    </div>
</body>
</html>