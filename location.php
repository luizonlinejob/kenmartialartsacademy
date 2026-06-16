<?php include('config.php'); ?>
<?php include('header.php'); ?>

<section class="hero-location py-5" style="height: 40vh; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('img/kma_bg3.jpg') center/cover;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">VISIT <span style="color: var(--ufc-red);">US</span></h1>
        <p class="lead animate__animated animate__fadeInUp">Bogo City's Elite MMA Training Ground.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <h2 class="section-title text-white mb-4">LOCATION <span style="color: var(--ufc-red);">INFO</span></h2>
                
                <div class="mb-4">
                    <h5 class="fw-bold text-uppercase" style="color: var(--ufc-red) !important;">Address</h5>
                    <p class="text-muted-white">3238+HQR, Bogo City, Cebu, Philippines <br> (Near Bogo Central School I)</p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold text-uppercase" style="color: var(--ufc-red) !important;">Training Hours</h5>
                    <ul class="list-unstyled text-muted-white">
                        <li>Monday - Friday: 8:00 AM - 9:00 PM</li>
                        <li>Saturday: 9:00 AM - 5:00 PM</li>
                        <li>Sunday: CLOSED</li>
                    </ul>
                </div>

                <a href="https://www.google.com/maps/dir//Ken+Martial+Arts,+3238%2BHQR,+Bogo+City,+Cebu" target="_blank" class="btn btn-ufc btn-lg w-100 mt-3">
                    GET DIRECTIONS
                </a>
            </div>

            <div class="col-lg-7" data-aos="zoom-in">
                <div class="map-container" style="border: 3px solid var(--ufc-red); height: 500px; overflow: hidden; box-shadow: 0 0 20px rgba(210, 10, 10, 0.4);">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.436341257404!2d123.9989893!3d11.0433722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a869712d430dad%3A0x170a6411ae33ed6e!2sKen%20Martial%20Arts!5e0!3m2!1sen!2sph!4v1700000000000!5m2!1sen!2sph" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <p class="text-center text-muted mt-2 small">Click "View larger map" para makita ang mga photos sa gym.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 text-center" style="background: var(--ufc-gray);">
    <div class="container" data-aos="fade-up">
        <h2 class="text-white fw-bold mb-4">READY TO TRAIN WITH THE BEST?</h2>
        <button class="btn btn-ufc btn-lg" data-bs-toggle="modal" data-bs-target="#bookingModal">SECURE YOUR FREE PASS</button>
    </div>
</section>

<?php include('footer.php'); ?>