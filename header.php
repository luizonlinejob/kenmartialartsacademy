<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEN MARTIAL ARTS | ACADEMY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root { --ufc-red: #d20a0a; --ufc-black: #000000; --ufc-gray: #1a1a1a; }
        body { background-color: var(--ufc-black); color: #fff; font-family: 'Oswald', sans-serif; }
        
        /* White Font Menu Styles */
        .navbar { background-color: rgba(0,0,0,0.95); border-bottom: 2px solid var(--ufc-red); }
        .nav-link { color: #fff !important; font-weight: 700; text-transform: uppercase; margin: 0 10px; transition: 0.3s; }
        .nav-link:hover { color: var(--ufc-red) !important; }
        
        .brand-text-container { border-left: 3px solid var(--ufc-red); padding-left: 12px; margin-left: 10px; display: flex; flex-direction: column; line-height: 0.9; }
        .brand-name { font-size: 1.4rem; font-weight: 800; }
        .brand-sub { font-size: 0.8rem; color: var(--ufc-red); letter-spacing: 2px; }
        .brand-since { font-size: 0.6rem; color: #888; margin-left: 8px; border-left: 1px solid #444; padding-left: 8px; }

        .btn-ufc { background: var(--ufc-red); color: #fff; border: none; padding: 10px 25px; clip-path: polygon(10% 0, 100% 0, 90% 100%, 0% 100%); font-weight: bold; }
        .class-card { background: var(--ufc-gray); border: none; transition: 0.4s; }
        .class-card img { aspect-ratio: 1/1; object-fit: cover; filter: grayscale(100%); transition: 0.5s; }
        .class-card:hover img { filter: grayscale(0%); transform: scale(1.05); }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="kma_logo.jpg" alt="Logo" style="height: 50px;">
            <div class="brand-text-container">
                <span class="brand-name">KEN MARTIAL ARTS</span>
                <div class="d-flex align-items-center">
                    <span class="brand-sub">ACADEMY</span>
                    <span class="brand-since">SINCE 2012</span>
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#kmaNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="kmaNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="location.php">Location</a></li>
                <li class="nav-item"><a class="nav-link" href="classes.php">Classes</a></li>
                <li class="nav-item"><a class="nav-link" href="coaching.php">Coaching</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="joinnow.php">Join Now</a></li>
       		 	<li class="nav-item"><a class="nav-link" href="https://kenmartialarts.ct.ws/admin/">Admin Log-in</a></li>
                <li class="nav-item"><button class="btn btn-ufc ms-lg-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Free Pass</button></li>
            </ul>
        </div>
    </div>
</nav>