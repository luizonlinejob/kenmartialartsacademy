<?php include('config.php'); ?>
<?php include('header.php'); ?>

<style>
    /* Coaching Profile Custom Styles */
    .coach-card {
        background: var(--ufc-gray);
        border: none;
        border-radius: 0;
        overflow: hidden;
        transition: 0.4s ease;
        position: relative;
    }
    
    .coach-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(210, 10, 10, 0.3);
    }

    .coach-img-container {
        position: relative;
        overflow: hidden;
        aspect-ratio: 3/4;
    }

    .coach-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(100%);
        transition: 0.6s ease;
    }

    .coach-card:hover img {
        filter: grayscale(0%);
        transform: scale(1.1);
    }

    .coach-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        background: linear-gradient(transparent, rgba(0,0,0,0.9));
        text-align: center;
    }

    .coach-specialty {
        color: var(--ufc-red);
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    .coach-socials a {
        color: #fff;
        margin: 0 10px;
        font-size: 1.2rem;
        transition: 0.3s;
    }

    .coach-socials a:hover {
        color: var(--ufc-red);
    }
</style>

<section class="hero-coaching py-5" style="height: 50vh; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('img/kma_bg.jpg') center/cover;">
    <div class="container text-center">
        <h1 class="display-2 fw-bold animate__animated animate__zoomIn">ELITE <span style="color: var(--ufc-red);">COACHES</span></h1>
        <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Learn from the veterans. Train with the champions.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card coach-card">
                    <div class="coach-img-container">
                        <img src="img/coach1.jpg" alt="Head Coach">
                        <div class="coach-overlay">
                            <h4 class="text-white fw-bold mb-0">RONALD KEN CENIZA NGUJO III</h4>
                            <span class="coach-specialty">Founder / Head Instructor</span>
                        </div>
                    </div>
                    <div class="card-body bg-dark text-center">
                        <p class="small text-white mb-3">10+ Years MMA Experience. Black belt in discipline.</p>
                        <div class="coach-socials">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card coach-card">
                    <div class="coach-img-container">
                        <img src="img/brooks.jpg" alt="BJJ Coach">
                        <div class="coach-overlay">
                            <h4 class="text-white fw-bold mb-0">PROF. ADAM BROOKS</h4>
                            <span class="coach-specialty">BJJ Specialist</span>
                        </div>
                    </div>
                    <div class="card-body bg-dark text-center">
                        <p class="small text-white mb-3">Expert in ground control and submissions.</p>
                        <div class="coach-socials">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card coach-card">
                    <div class="coach-img-container">
                        <img src="img/sakura.jpg" alt="Striking Coach">
                        <div class="coach-overlay">
                            <h4 class="text-white fw-bold mb-0">COACH SAKURA & FAITH</h4>
                            <span class="coach-specialty">Striking Expert</span>
                        </div>
                    </div>
                    <div class="card-body bg-dark text-center">
                        <p class="small text-white mb-3">Master of the 8 limbs (Muay Thai & Boxing).</p>
                        <div class="coach-socials">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-5" style="background: var(--ufc-gray);">
    <div class="container text-center" data-aos="zoom-in">
        <h2 class="section-title text-white mb-4">OUR COACHING <span style="color: var(--ufc-red);">PHILOSOPHY</span></h2>
        <div class="row justify-content-center">
           <div class="col-lg-8">
    <p class="lead italic fw-bold" style="color: var(--ufc-red) !important;">
        "We don't just teach you how to fight. We teach you how to live with discipline, respect, and honor. Every drop of sweat in this gym is a step towards becoming a better version of yourself."
    </p>
    <div class="red-line mx-auto"></div>
</div>
        </div>
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