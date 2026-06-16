<?php
session_start();
include('../config.php');

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

// Get Statistics for the Dashboard
$total_res = $conn->query("SELECT COUNT(*) as total FROM reservations")->fetch_assoc()['total'];
$today_res = $conn->query("SELECT COUNT(*) as today FROM reservations WHERE DATE(created_at) = CURDATE()")->fetch_assoc()['today'];

// New Stat: Total Attendance Today
$attended_today = $conn->query("SELECT COUNT(*) as attended FROM reservations WHERE attendance_status = 'Present'")->fetch_assoc()['attended'];

$result = $conn->query("SELECT * FROM reservations ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMA ADMIN | COMMAND CENTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --ufc-red: #d20a0a; --ufc-dark: #111; --glass: rgba(26, 26, 26, 0.95); --ufc-green: #00ff88; }
        body { background: #000; color: #fff; font-family: 'Oswald', sans-serif; letter-spacing: 1px; }
        
        /* Navbar Styling */
        .navbar { background: var(--ufc-dark); border-bottom: 4px solid var(--ufc-red); box-shadow: 0 4px 15px rgba(210, 10, 10, 0.3); }
        
        /* Stat Cards */
        .stat-card { background: var(--glass); border-left: 5px solid var(--ufc-red); padding: 20px; transition: 0.3s; height: 100%; }
        .stat-card:hover { transform: translateY(-5px); background: #1a1a1a; }
        .stat-number { font-size: 2.5rem; font-weight: bold; color: var(--ufc-red); }

        /* Table Styling */
        .table-container { background: var(--glass); padding: 25px; border: 1px solid #333; }
        .table { border-collapse: separate; border-spacing: 0 10px; }
        .table thead th { background: var(--ufc-red) !important; color: white; border: none; text-transform: uppercase; padding: 15px; }
        .table tbody tr { background: #151515; transition: 0.3s; }
        .table tbody tr:hover { background: #222; transform: scale(1.01); }
        .table td { vertical-align: middle; padding: 15px; border: none; }

        /* Buttons */
        .btn-checkin { color: var(--ufc-green); border: 1px solid var(--ufc-green); padding: 5px 12px; transition: 0.3s; text-decoration: none; font-weight: bold; font-size: 0.8rem; text-transform: uppercase; margin-right: 5px; }
        .btn-checkin:hover { background: var(--ufc-green); color: #000; }
        
        .btn-delete { color: #ff4444; border: 1px solid #ff4444; padding: 5px 12px; transition: 0.3s; text-decoration: none; font-weight: bold; font-size: 0.8rem; text-transform: uppercase; }
        .btn-delete:hover { background: #ff4444; color: #fff; box-shadow: 0 0 10px rgba(255, 68, 68, 0.5); }
        
        .badge-program { font-size: 0.9rem; padding: 8px 12px; border-radius: 0; text-transform: uppercase; }
        .status-present { color: var(--ufc-green); font-weight: bold; font-size: 0.85rem; letter-spacing: 2px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark p-3 sticky-top">
        <div class="container">
            <span class="navbar-brand fw-bold text-uppercase">
                <i class="bi bi-shield-lock-fill text-danger me-2"></i> KMA Admin Command Center
            </span>
            <div class="d-flex align-items-center">
                <span class="text-white-50 me-3 small d-none d-md-block">Admin: <strong>LR PURAL</strong></span>
                <a href="logout.php" class="btn btn-outline-danger btn-sm px-4 fw-bold">LOGOUT</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row mb-5 g-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <p class="text-white-50 mb-0 uppercase">Total Reservations</p>
                    <div class="stat-number"><?php echo $total_res; ?></div>
                    <i class="bi bi-people-fill float-end opacity-25" style="font-size: 3rem; margin-top: -50px;"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <p class="text-white-50 mb-0 uppercase">New Today</p>
                    <div class="stat-number"><?php echo $today_res; ?></div>
                    <i class="bi bi-graph-up-arrow float-end opacity-25" style="font-size: 3rem; margin-top: -50px;"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card" style="border-left-color: var(--ufc-green);">
                    <p class="text-white-50 mb-0 uppercase">Attendance Marked</p>
                    <div class="stat-number" style="color: var(--ufc-green);"><?php echo $attended_today; ?></div>
                    <i class="bi bi-check2-circle float-end opacity-25" style="font-size: 3rem; margin-top: -50px;"></i>
                </div>
            </div>
        </div>

        <div class="table-container shadow">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold mb-0 text-uppercase border-start border-danger border-4 ps-3">Gym Reservations</h3>
                <button onclick="window.location.reload();" class="btn btn-dark btn-sm border-secondary">
                    <i class="bi bi-arrow-clockwise"></i> Refresh
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Program</th>
                            <th>Target Schedule</th>
                            <th>Registration Date</th>
                            <th class="text-center">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td class="fw-bold"><?php echo strtoupper($row['fullname']); ?></td>
                            <td>
                                <span class="badge bg-danger badge-program"><?php echo $row['class_type']; ?></span>
                            </td>
                            <td><i class="bi bi-calendar-event me-2 text-danger"></i><?php echo date('M d, Y', strtotime($row['book_date'])); ?></td>
                            <td class="small text-white-50"><?php echo date('m/d/Y h:i A', strtotime($row['created_at'])); ?></td>
                            <td class="text-center">
                                <?php if(isset($row['attendance_status']) && $row['attendance_status'] == 'Present'): ?>
                                    <span class="status-present"><i class="bi bi-patch-check-fill"></i> PRESENT</span>
                                <?php else: ?>
                                    <a href="attendance_check.php?id=<?php echo $row['id']; ?>" class="btn-checkin">
                                        <i class="bi bi-person-check"></i> Check
                                    </a>
                                <?php endif; ?>

                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('WARNING: Siguro ka? Dili na ni mabalik.')">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>