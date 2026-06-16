<?php include('config.php'); ?>
<?php include('header.php'); ?>

<section class="hero py-5" style="height: 85vh; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('img/kma_bg.jpg') center/cover;">
    <div class="container text-start">
        <h1 class="display-1 fw-bold animate__animated animate__zoomIn">
            TRAIN <span style="color: var(--ufc-red);">DIFFERENT</span>
        </h1>
        <p class="lead animate__animated animate__fadeInLeft animate__delay-1s">
            Bogo City's Elite Mixed Martial Arts Academy.
        </p>
        <div class="animate__animated animate__fadeInUp animate__delay-2s">
            <button class="btn btn-ufc btn-lg" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</button>
        </div>
    </div>
</section>

<section id="programs" class="py-5 overflow-hidden">
    <div class="container text-center">
        <h2 class="mb-5 section-title animate__animated animate__fadeInDown">ELITE PROGRAMS</h2>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                <div class="card class-card">
                    <div class="img-container">
                        <img src="img/mixedmartial.jpg" class="card-img-top" alt="MMA">
                    </div>
                    <div class="card-body"><h4 class="text-white">MMA</h4></div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card class-card">
                    <div class="img-container">
                        <img src="img/kickbox.jpg" class="card-img-top" alt="Kickboxing">
                    </div>
                    <div class="card-body"><h4 class="text-white">KICKBOXING</h4></div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-delay="500">
                <div class="card class-card">
                    <div class="img-container">
                        <img src="img/bjj.jpg" class="card-img-top" alt="BJJ">
                    </div>
                    <div class="card-body text-center"><h4 class="text-white">JIU-JITSU</h4>
                   </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Speed sa animation
        once: true      // Kausa ra mo-animate
    });
</script>

<?php include('footer.php'); ?>