<?php include('config.php'); ?>
<?php include('header.php'); ?>

<section class="hero-classes py-5" style="height: 50vh; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('img/kma_bg4.jpg') center/cover;">
    <div class="container text-center">
        <h1 class="display-2 fw-bold animate__animated animate__fadeInDown">ELITE <span style="color: var(--ufc-red);">CLASSES</span></h1>
        <p class="lead animate__animated animate__fadeInUp">Master the arts. Dominate the cage.</p>
    </div>
</section>

<section class="py-5 overflow-hidden">
    <div class="container">
        
        <div class="row align-items-center mb-5 g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div style="border: 4px solid var(--ufc-red); position: relative;">
                    <img src="img/mixedmartial.jpg" class="img-fluid" alt="Mixed Martial Arts">
                    <div style="position: absolute; bottom: -20px; right: -20px; background: var(--ufc-red); color: #fff; padding: 15px 30px; font-weight: bold;">MMA</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold mb-4">MIXED MARTIAL ARTS</h2>
                <p class="text-muted-white">The ultimate combat sport. MMA combines techniques from Boxing, Muay Thai, Wrestling, and Jiu-Jitsu. Our program focuses on seamless transitions between striking and grappling.</p>
                <ul class="list-unstyled text-white mb-4">
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Cage Control & Takedowns</li>
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Ground and Pound Techniques</li>
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Fight Conditioning & Stamina</li>
                </ul>
                <button class="btn btn-ufc" data-bs-toggle="modal" data-bs-target="#bookingModal">Inquire for MMA</button>
            </div>
        </div>

        <hr class="my-5 border-secondary">

        <div class="row align-items-center mb-5 g-5 flex-lg-row-reverse">
            <div class="col-lg-6" data-aos="fade-left">
                <div style="border: 4px solid var(--ufc-red); position: relative;">
                    <img src="img/kickbox.jpg" class="img-fluid" alt="Kickboxing">
                    <div style="position: absolute; bottom: -20px; left: -20px; background: var(--ufc-red); color: #fff; padding: 15px 30px; font-weight: bold;">STRIKING</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4">KICKBOXING / MUAY THAI</h2>
                <p class="text-muted-white">Develop explosive power and razor-sharp precision. Our striking classes teach you how to use your fists, feet, elbows, and knees effectively for self-defense or competition.</p>
                <ul class="list-unstyled text-white mb-4">
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> High-Intensity Pad Work</li>
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Defensive Guarding & Footwork</li>
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Full-Body Cardio Burn</li>
                </ul>
                <button class="btn btn-ufc" data-bs-toggle="modal" data-bs-target="#bookingModal">Join Striking Class</button>
            </div>
        </div>

        <hr class="my-5 border-secondary">

        <div class="row align-items-center mb-5 g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div style="border: 4px solid var(--ufc-red); position: relative;">
                    <img src="img/bjj.jpg" class="img-fluid" alt="Brazilian Jiu-Jitsu">
                    <div style="position: absolute; bottom: -20px; right: -20px; background: var(--ufc-red); color: #fff; padding: 15px 30px; font-weight: bold;">GRAPPLING</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold mb-4">BRAZILIAN JIU-JITSU</h2>
                <p class="text-muted-white">Master the "Gentle Art." BJJ empowers a smaller person to defend against a larger adversary using leverage and technique. Focus on ground control and submissions.</p>
                <ul class="list-unstyled text-white mb-4">
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Positional Dominance (Mount/Side)</li>
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Chokeholds & Joint Locks</li>
                    <li><i class="bi bi-check2-circle text-danger me-2"></i> Live Rolling (Sparring) Sessions</li>
                </ul>
                <button class="btn btn-ufc" data-bs-toggle="modal" data-bs-target="#bookingModal">Book BJJ Session</button>
            </div>
        </div>

    </div>
</section>

<section class="py-5 text-center" style="background: var(--ufc-gray); margin-top: 50px;">
    <div class="container" data-aos="zoom-in">
        <h2 class="text-white fw-bold mb-4">NOT SURE WHICH CLASS IS FOR YOU?</h2>
        <p class="mb-4">Get a FREE evaluation from our elite coaches in Bogo City.</p>
        <button class="btn btn-ufc btn-lg" data-bs-toggle="modal" data-bs-target="#bookingModal">TALK TO A COACH</button>
    </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<?php include('footer.php'); ?>