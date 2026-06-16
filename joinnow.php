<?php include('config.php'); ?>
<?php include('header.php'); ?>

<style>
    /* Pricing Card Styles */
    .pricing-card {
        background: var(--ufc-gray);
        border: 2px solid #333;
        transition: 0.4s ease;
        position: relative;
        overflow: hidden;
    }
    
    .pricing-card.featured {
        border-color: var(--ufc-red);
        transform: scale(1.05);
        z-index: 2;
    }

    .pricing-card:hover {
        border-color: var(--ufc-red);
        box-shadow: 0 0 20px rgba(210, 10, 10, 0.3);
    }

    .price-amount {
        font-size: 3.5rem;
        font-weight: 800;
        color: #fff;
        line-height: 1;
    }

    .price-currency {
        font-size: 1.5rem;
        vertical-align: top;
        color: var(--ufc-red);
    }

    .plan-feature {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .plan-feature li {
        padding: 10px 0;
        border-bottom: 1px solid #333;
        color: #ccc;
    }

    .plan-feature li i {
        color: var(--ufc-red);
        margin-right: 10px;
    }

    .featured-badge {
        position: absolute;
        top: 20px;
        right: -35px;
        background: var(--ufc-red);
        color: #fff;
        padding: 5px 40px;
        transform: rotate(45deg);
        font-size: 0.8rem;
        font-weight: bold;
        text-transform: uppercase;
    }
</style>

<section class="hero-join py-5" style="height: 40vh; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('img/kma_bg.jpg') center/cover;">
    <div class="container text-center">
        <h1 class="display-2 fw-bold animate__animated animate__zoomIn">CHOOSE YOUR <span style="color: var(--ufc-red);">BATTLE</span></h1>
        <p class="lead animate__animated animate__fadeInUp">No Contracts. No Bullshit. Just Pure Training.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            
            <div class="col-md-4" data-aos="fade-right">
                <div class="card pricing-card p-4 h-100">
                    <h3 class="fw-bold text-white">WALK-IN</h3>
                    <p class="text-muted">Single Session Pass</p>
                    <div class="mb-4">
                        <span class="price-currency">₱</span>
                        <span class="price-amount">150</span>
                        <span class="text-muted">/Session</span>
                    </div>
                    <ul class="plan-feature">
                        <li><i class="bi bi-check-lg"></i> Access to 1 Class</li>
                        <li><i class="bi bi-check-lg"></i> Use of Gym Equipment</li>
                        <li><i class="bi bi-check-lg"></i> Locker Access</li>
                        <li><i class="bi bi-x-lg text-muted"></i> No Free T-Shirt</li>
                    </ul>
                    <button class="btn btn-outline-light w-100 py-3 mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal">TRY IT OUT</button>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card pricing-card featured p-4 h-100">
                    <div class="featured-badge">BEST VALUE</div>
                    <h3 class="fw-bold text-white">ELITE MONTHLY</h3>
                    <p class="text-muted">Full Warrior Experience</p>
                    <div class="mb-4">
                        <span class="price-currency">₱</span>
                        <span class="price-amount">2,500</span>
                        <span class="text-muted">/Month</span>
                    </div>
                    <ul class="plan-feature">
                        <li><i class="bi bi-check-lg"></i> Unlimited All Classes</li>
                        <li><i class="bi bi-check-lg"></i> MMA, BJJ & Kickboxing</li>
                        <li><i class="bi bi-check-lg"></i> Personalized Progress Tracking</li>
                        <li><i class="bi bi-check-lg"></i> Free KMA Academy Sticker</li>
                        <li><i class="bi bi-check-lg"></i> Discount on Gear</li>
                    </ul>
                    <button class="btn btn-ufc w-100 py-3 mt-auto animate__animated animate__pulse animate__infinite" data-bs-toggle="modal" data-bs-target="#bookingModal">JOIN THE ACADEMY</button>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-left">
                <div class="card pricing-card p-4 h-100">
                    <h3 class="fw-bold text-white">KICKBOXING ONLY</h3>
                    <p class="text-muted">Striking Specialist</p>
                    <div class="mb-4">
                        <span class="price-currency">₱</span>
                        <span class="price-amount">1,800</span>
                        <span class="text-muted">/Month</span>
                    </div>
                    <ul class="plan-feature">
                        <li><i class="bi bi-check-lg"></i> All Striking Classes</li>
                        <li><i class="bi bi-check-lg"></i> Muay Thai & Boxing</li>
                        <li><i class="bi bi-check-lg"></i> Cardio Conditioning</li>
                        <li><i class="bi bi-check-lg"></i> Locker Access</li>
                    </ul>
                    <button class="btn btn-outline-light w-100 py-3 mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal">GET STARTED</button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-dark border-top border-danger">
    <div class="container text-center" data-aos="zoom-in">
        <h2 class="text-white fw-bold mb-4">MEMBERSHIP <span style="color: var(--ufc-red);">DETAILS</span></h2>
        <div class="row text-start mt-5">
            <div class="col-md-6 mb-4">
                <h5 class="text-white fw-bold"><i class="bi bi-info-circle text-danger me-2"></i> REGISTRATION FEE</h5>
                <p class="text-muted-white">A one-time registration fee of ₱300 applies to all new monthly members. This includes your membership ID.</p>
            </div>
            <div class="col-md-6 mb-4">
                <h5 class="text-white fw-bold"><i class="bi bi-people text-danger me-2"></i> GROUP DISCOUNTS</h5>
                <p class="text-muted-white">Barkada of 3 or more? We offer special group rates! Contact us directly for a custom quote.</p>
            </div>
            <div class="col-md-6 mb-4">
                <h5 class="text-white fw-bold"><i class="bi bi-people text-danger me-2"></i> Yearly Membership Fee</h5>
                <p class="text-muted-white">Barkada of 3 or more? We offer special group rates! Contact us directly for a custom quote.</p>
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