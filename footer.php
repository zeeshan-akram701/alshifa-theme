<footer class="site-footer">

    <div class="footer-container">

        <div class="footer-box">
            <h3>About Al Shifa Clinic</h3>
            <p>
                Al Shifa Clinic & Pharmacy provides quality healthcare services
                with experienced doctors and modern facilities for the community.
            </p>
        </div>

        <div class="footer-box">
            <h3>Quick Links</h3>
            <?php dynamic_sidebar('footer-1'); ?>
        </div>

        <div class="footer-box">
            <h3>Our Services</h3>
            <?php dynamic_sidebar('footer-2'); ?>
        </div>

        <div class="footer-box">
            <h3>Contact Us</h3>
            <p>📍 Main Road, Your City</p>
            <p>📞 +92 300 1234567</p>
            <p>✉ info@alshifa.com</p>
        </div>

    </div>

    <div class="footer-bottom">
        © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
