<?php include('config.php'); ?>
<?php include('header.php'); ?>

<section class="hero-about py-5" style="height: 50vh; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('img/kma_bg.jpg') center/cover;">
    <div class="container text-center">
        <h1 class="display-2 fw-bold animate__animated animate__fadeInDown">ABOUT <span style="color: var(--ufc-red);">US</span></h1>
        <p class="lead animate__animated animate__fadeInUp">Building Champions in Bogo City Since 2012.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title text-white">OUR <span style="color: var(--ufc-red);">LEGACY</span></h2>
                <p class="text-white">Founded in 2012, Ken Martial Arts (KMA) Academy started with a simple vision: to bring world-class mixed martial arts training to Bogo City. Over the years, we have evolved from a small local gym into an elite training center for aspiring fighters and fitness enthusiasts.</p>
                <p class="text-white">Our "Train Different" philosophy focuses not just on physical strength, but on mental discipline, respect, and the warrior spirit.</p>
            </div>
            <div class="col-lg-6" data-aos="zoom-in">
                <div style="border: 5px solid var(--ufc-red); padding: 10px;">
                    <img src="img/kma_bg1.jpg" class="img-fluid" alt="KMA Training">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background: #0a0a0a;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5" style="background: var(--ufc-gray); border-top: 4px solid var(--ufc-red); height: 100%;">
                    <h3 class="text-white fw-bold mb-3">OUR MISSION</h3>
                    <p class="text-muted-white">To provide a safe and professional environment where individuals can reach their full potential through martial arts excellence and functional fitness.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="p-5" style="background: var(--ufc-gray); border-top: 4px solid var(--ufc-red); height: 100%;">
                    <h3 class="text-white fw-bold mb-3">OUR VISION</h3>
                    <p class="text-muted-white">To be the leading martial arts academy in Northern Cebu, producing disciplined athletes and community leaders who embody the spirit of the martial arts.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title text-white mb-5">THE <span style="color: var(--ufc-red);">CORE</span> VALUES</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="flip-left">
                <h1 class="display-4 fw-bold" style="color: var(--ufc-red);">01</h1>
                <h4 class="text-white">DISCIPLINE</h4>
                <p class="text-muted">Consistency is key. We train with purpose every single day.</p>
            </div>
            <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="200">
                <h1 class="display-4 fw-bold" style="color: var(--ufc-red);">02</h1>
                <h4 class="text-white">RESPECT</h4>
                <p class="text-muted">Treat everyone with honor—inside and outside the cage.</p>
            </div>
            <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="400">
                <h1 class="display-4 fw-bold" style="color: var(--ufc-red);">03</h1>
                <h4 class="text-white">HONOR</h4>
                <p class="text-muted">We represent Bogo City and KMA with pride and integrity.</p>
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