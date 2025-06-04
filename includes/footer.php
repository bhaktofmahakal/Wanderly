<footer class="modern-footer">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6 footer-section">
                <h4>WoOx Travel</h4>
                <p>Your trusted partner in creating unforgettable travel experiences. We specialize in crafting perfect journeys that combine adventure, comfort, and discovery.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 footer-section">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo APPURL; ?>">Home</a></li>
                    <li><a href="<?php echo APPURL; ?>/deals.php">Deals</a></li>
                    <li><a href="<?php echo APPURL; ?>/about.php">About Us</a></li>
                    <li><a href="<?php echo APPURL; ?>/contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6 footer-section">
                <h4>Contact Us</h4>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> 123 Travel Street, City, Country</li>
                    <li><i class="fas fa-phone"></i> +1 234 567 890</li>
                    <li><i class="fas fa-envelope"></i> info@wooxtravel.com</li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6 footer-section">
                <h4>Newsletter</h4>
                <p>Subscribe to our newsletter for travel updates and exclusive deals.</p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your email" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row copyright-section">
            <div class="col-12">
                <div class="copyright-content">
                    <p class="mb-0">Copyright © <?php echo date('Y'); ?> <a href="#">WoOx Travel</a>. All rights reserved.</p>
                    <p class="mt-2">
                        Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> 
                        Distribution: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="<?php echo APPURL; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo APPURL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo APPURL; ?>/assets/js/isotope.min.js"></script>
<script src="<?php echo APPURL; ?>/assets/js/owl-carousel.js"></script>
<script src="<?php echo APPURL; ?>/assets/js/wow.js"></script>
<script src="<?php echo APPURL; ?>/assets/js/tabs.js"></script>
<script src="<?php echo APPURL; ?>/assets/js/popup.js"></script>
<script src="<?php echo APPURL; ?>/assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.modern-header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Banner switcher
    function bannerSwitcher() {
        next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
        if (next.length) next.prop('checked', true);
        else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000)
    });
</script>

</body>
</html>
