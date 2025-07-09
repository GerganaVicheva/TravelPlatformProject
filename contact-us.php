<?php
    include "common/header_start.php";
    include "common/header_end.php";
?>

<style>
<?php 
    include "contact-styles.css"; 
    include "index-styles.css"; 
?>
</style>

<body>
    <div class="contact-page">
        <!-- Header Section -->
        <header class="contact-header" style="height: 30%;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="decorative-lines">
                            <svg width="100" height="20" viewBox="0 0 100 20">
                                <path d="M10 10 L20 5 L30 15 L40 10 L50 5 L60 15 L70 10 L80 5 L90 15" 
                                      stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                        <div class="wave-decoration">
                            <svg width="100" height="20" viewBox="0 0 100 20">
                                <path d="M0 10 Q25 0 50 10 T100 10" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="py-5">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-lg-8 mb-4">
                        <div class="contact-form-wrapper">
                            <h2 class="h3 mb-4">Send us a Message</h2>
                            <form class="contact-form">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-lg" placeholder="First Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control form-control-lg" placeholder="Email Address" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" placeholder="Subject" />
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control form-control-lg" rows="6" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="col-lg-4">
                        <div class="newsletter-card">
                            <h3 class="h4 text-white mb-3">Stay Updated</h3>
                            <p class="text-light mb-4">
                                Subscribe to our newsletter and get the latest updates, news, and special offers delivered to your inbox.
                            </p>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <button class="btn btn-dark w-100">Subscribe Now</button>
                        </div>
                    </div>
                </div>

                <!-- Contact Info Cards -->
                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <div class="contact-info-card">
                            <div class="contact-icon mb-3">
                                <i class="bi bi-telephone-fill me-2" style="font-size:1.5rem; color:#69A7D9;"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Call Us</h4>
                            <p class="contact-detail">+1 (555) 123-4567</p>
                            <p class="text-muted mb-0">
                                Available Monday to Friday from 9 AM to 6 PM
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-info-card">
                            <div class="contact-icon mb-3">
                                <i class="bi bi-envelope-fill me-2" style="font-size:1.5rem; color:#69A7D9;"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Email Us</h4>
                            <p class="contact-detail">hello@company.com</p>
                            <p class="text-muted mb-0">
                                We'll respond within 24 hours
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-info-card">
                            <div class="contact-icon mb-3">
                                <i class="bi bi-geo-alt-fill me-2" style="font-size:1.5rem; color:#69A7D9;"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Visit Us</h4>
                            <p class="contact-detail">123 Business Street</p>
                            <p class="text-muted mb-0">
                                New York, NY 10001
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Map Section -->
        <section class="map-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="h3 text-center mb-4">Find Us Here</h2>
                        <div class="map-placeholder">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.3024574372847!2d-74.00594358459418!3d40.71278097932933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316e2a5c0d%3A0xf87b4de45d2b1e4e!2sNew%20York%2C%20NY%2010001%2C%20USA!5e0!3m2!1sen!2sus!4v1640000000000!5m2!1sen!2sus"
                                width="100%"
                                height="450"
                                style="border: 0"
                                allowfullscreen
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>

<?php
    include "common/footer.php";
?>