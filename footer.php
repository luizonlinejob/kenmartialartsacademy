<div class="modal fade" id="bookingModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark border-danger p-4 text-white" style="border: 2px solid var(--ufc-red); box-shadow: 0 0 15px rgba(210, 10, 10, 0.5);">
            <h2 class="text-center fw-bold mb-4 text-white">START YOUR JOURNEY</h2>
            <form action="save_reservation.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control bg-dark text-white rounded-0 border-secondary" placeholder="FULL NAME" required style="color: #fff !important;">
                </div>
                <div class="mb-3">
                    <select name="class_type" class="form-select bg-dark text-white rounded-0 border-secondary" style="color: #fff !important;">
                        <option value="MMA" class="bg-dark">MMA</option>
                        <option value="Kickboxing" class="bg-dark">KICKBOXING</option>
                        <option value="BJJ" class="bg-dark">BJJ</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="date" name="book_date" class="form-control bg-dark text-white rounded-0 border-secondary" required style="color: #fff !important;">
                </div>
                <button type="submit" class="btn btn-ufc w-100 py-3 fw-bold">CONFIRM BOOKING</button>
            </form>
        </div>
    </div>
</div>

<footer class="py-5 border-top border-danger mt-5" style="background: #0a0a0a;">
    <div class="container text-center">
        <p class="text-white mb-1">&copy; <?php echo date('Y'); ?> <span style="color: var(--ufc-red); font-weight: bold;">KEN MARTIAL ARTS ACADEMY</span>. All Rights Reserved.</p>
        <p class="small text-white-50">Bogo City, Cebu | Train Different.</p>
        <p class="small text-white-50 mt-3">
            Developed by: 
            <a href="https://lpural.w3spaces.com/" target="_blank" class="dev-link" style="color: var(--ufc-red); text-decoration: none; font-weight: bold;">LR PURAL</a> 
            | <span class="text-white">Train Different.</span>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
</script>

<style>
    /* Dugang styling para sa clarity */
    ::placeholder { color: rgba(255,255,255,0.6) !important; }
    
    .dev-link:hover {
        color: #fff !important;
        text-shadow: 0 0 10px var(--ufc-red);
    }

    /* Fix para sa date picker icon color sa Chrome/Edge */
    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }
</style>

</body>
</html>