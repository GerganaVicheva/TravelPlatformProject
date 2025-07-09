<?php
include "common/header_start.php";
include "common/header_end.php";
?>

<style>
    <?php include "index-styles.css";
    ?>
</style>

<body>
    <!-- <div style="margin-top: 500px;">
        <input type="text" id="search-box" placeholder="Search…">
        <ul id="search-results"></ul>
    </div> -->

    <header>
        <section id="hero" class="d-flex align-items-center justify-content-evenly h-100">
            <div class="w-50 p-3 rounded-3">
                <p class="m-0">Experience the best trip with the help of our platform</p>
                <h1 class="mb-0">Welcome to Wanderly!</h1>
                <h2>Where travel organisation has never been easier</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium nesciunt similique officiis ad magnam ea nisi doloribus fugit, molestias impedit officia iure illo natus tenetur sit tempora nam beatae dignissimos?</p>
                <a href="#about" class="btn me-3">Read more<img src="assets/right-arrow.png" alt=""></a>
                <a href="#" class="btn">Join our platform</a>
            </div>
            <div class="d-flex justify-content-center">
                <img src="assets/plane-hero.png" alt="">
            </div>
        </section>
    </header>

    <!-- <section id="about" class="m-0 p-3">
        <h3>Additional information</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt esse, dignissimos corrupti natus veritatis voluptas rerum eligendi eius aliquid magni? Quos dignissimos ut facilis cumque, ratione eius quod a reprehenderit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, mollitia odit necessitatibus porro sint explicabo quos expedita aspernatur deleniti quod quidem, voluptatum veritatis quis praesentium repudiandae magnam in quisquam nostrum.</p>
    </section> -->

    <!-- <section id="about" class="d-flex justify-content-between align-items-center p-5">
        <div class="container">
            <p class="rounded-3">About us</p>
            <h3>Ducimus rerum libero reprehenderit cumque</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, obcaecati. Possimus similique vitae laboriosam ut veniam consequatur, doloremque quod labore recusandae corporis sunt natus earum commodi, mollitia ipsum. Dolorum, quod.</p>
        </div>
        <div class="d-flex border border-2">
            <div class="left-containers">
                <div class="border border-2 p-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, exercitationem aliquid laudantium molestias.</p>
                </div>
                <div class="border border-2 p-2">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non officiis, magni dolorum nulla perferendis.</p>
                </div>
            </div>
            <div class="border border-2 p-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, sint harum! Similique fugit et at deserunt molestiae nesciunt repellat eligendi nemo reprehenderit ea veniam rerum, iste ratione quas, aliquid doloribus.</p>
            </div>
        </div>
    </section> -->

    <section id="about" class="d-flex justify-content-between align-items-center p-5">
        <div class="container-fluid">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-6">
                    <div class="mb-4">
                        <span class="badge px-4 py-2 text-uppercase fw-semibold">
                            About us
                        </span>
                    </div>
                    <h2 class="display-4 mb-4 fw-bold">
                        Ducimus rerum libero reprehenderit cumque
                    </h2>
                    <p class="lead mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, obcaecati.
                        Possimus similique vitae laboriosam ut veniam consequatur, doloremque quod labore
                        recusandae corporis sunt natus earum commodi, mollitia ipsum. Dolorum, quod.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn btn-outline-lg px-4 py-3 fw-semibold">
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- Right Feature Cards -->
                <div class="col-lg-6">
                    <!-- Top Row Cards -->
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="card h-100 shadow-sm position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 h-100" style="width: 4px; background-color: var(--green);"></div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center justify-content-center mb-3" style="background-color: var(--green);">
                                        <svg width="24" height="24" fill="#EDF4EE" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                        </svg>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, exercitationem aliquid laudantium molestias.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card h-100 shadow-sm position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 h-100" style="width: 4px; background-color: var(--blue);"></div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center justify-content-center mb-3" style="background-color: var(--blue);">
                                        <svg width="24" height="24" fill="#EDF4EE" viewBox="0 0 24 24">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non officiis, magni dolorum nulla perferendis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Large Card -->
                    <div class="card shadow-sm position-relative overflow-hidden" style="background: linear-gradient(135deg, var(--green) 0%, var(--blue) 100%); color: var(--smokey-white);">
                        <div class="position-absolute top-0 end-0" style="width: 128px; height: 128px; background-color: var(--smokey-white); opacity: 0.2; border-radius: 50%;"></div>
                        <div class="card-body p-5 position-relative">
                            <div class="d-flex align-items-center justify-content-center mb-4" style="width: 64px; height: 64px; background-color: rgba(237, 244, 238, 0.2); border-radius: 12px;">
                                <svg width="32" height="32" fill="#EDF4EE" viewBox="0 0 24 24">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, sint harum!
                                Similique fugit et at deserunt molestiae nesciunt repellat eligendi nemo
                                reprehenderit ea veniam rerum, iste ratione quas, aliquid doloribus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="carousel-section">
        <div class="carousel-container">
            <div class="carousel-wrapper">

                <div class="carousel-slide slide-green active">
                    <div class="slide-content">
                        <div class="slide-icon">
                            <svg width="48" height="48" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <h2 class="slide-heading">Excellence in Service</h2>
                        <p class="slide-paragraph">
                            We deliver outstanding results through innovative solutions and dedicated teamwork.
                            Our commitment to quality ensures every project exceeds expectations and drives success.
                        </p>
                    </div>
                </div>

                <div class="carousel-slide slide-blue active">
                    <div class="slide-content">
                        <div class="slide-icon">
                            <svg width="48" height="48" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="slide-heading">Innovation & Growth</h2>
                        <p class="slide-paragraph">
                            Embracing cutting-edge technology and creative thinking to transform ideas into reality.
                            We foster an environment where innovation thrives and businesses grow exponentially.
                        </p>
                    </div>
                </div>

                <div class="carousel-slide slide-red active">
                    <div class="slide-content">
                        <div class="slide-icon">
                            <svg width="48" height="48" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h2 class="slide-heading">Passion & Dedication</h2>
                        <p class="slide-paragraph">
                            Our passionate team brings energy and dedication to every challenge.
                            We believe in building lasting relationships and creating meaningful impact through our work.
                        </p>
                    </div>
                </div>

                <div class="carousel-slide slide-gray active">
                    <div class="slide-content">
                        <div class="slide-icon">
                            <svg width="48" height="48" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="slide-heading">Trusted Solutions</h2>
                        <p class="slide-paragraph">
                            Building trust through transparency, reliability, and consistent delivery.
                            Our proven track record speaks for itself in creating solutions that stand the test of time.
                        </p>
                    </div>
                </div>
            </div>

            <div class="carousel-nav">
                <button data-slide="0" aria-label="Go to slide 1"></button>
                <button data-slide="1" aria-label="Go to slide 2"></button>
                <button data-slide="2" aria-label="Go to slide 3"></button>
                <button data-slide="3" aria-label="Go to slide 4"></button>
            </div>
        </div>
    </section>

    <section id="contacts" class="py-5" style="background:#EDF4EE; color:#444643;">
        <div class="container">
            <h2 class="text-center mb-2" style="color:#6C9283; font-size:2rem;">Contact</h2>
            <p class="text-center fst-italic mb-4">
                <span>For additional information</span>
                <a href="contact-us.php" style="color:#69A7D9; font-weight:bold;"> Click here</a>
            </p>

            <div class="row g-4">
                <!-- Contact Info -->
                <div class="col-md-4">
                    <div class="d-flex bg-light p-3 rounded mb-3" style="background:#D1D0D9;">
                        <i class="bi bi-geo-alt-fill me-2" style="font-size:1.5rem; color:#69A7D9;"></i>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <p class="mb-0">A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>

                    <div class="d-flex bg-light p-3 rounded mb-3" style="background:#D1D0D9;">
                        <i class="bi bi-telephone-fill me-2" style="font-size:1.5rem; color:#69A7D9;"></i>
                        <div>
                            <h5 class="mb-1">Call Us</h5>
                            <p class="mb-0">+1 5589 55488 55</p>
                        </div>
                    </div>

                    <div class="d-flex bg-light p-3 rounded" style="background:#D1D0D9;">
                        <i class="bi bi-envelope-fill me-2" style="font-size:1.5rem; color:#69A7D9;"></i>
                        <div>
                            <h5 class="mb-1">Email Us</h5>
                            <p class="mb-0">info@example.com</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-md-8 mb-4">
                     <!-- Response message area -->
                    <div id="response-message" style="display: none;"></div>

                    <!-- action="submit.php" method="POST" -->
                    <form id="contact-form" class="d-flex flex-column gap-3">
                        <input id="name" type="text" name="name" placeholder="Your Name" required class="form-control"
                            style="border:1px solid #D1D0D9; border-radius:4px;">
                        <input id="email" type="email" name="email" placeholder="Your Email" required class="form-control"
                            style="border:1px solid #D1D0D9; border-radius:4px;">
                        <!-- <input type="text" name="subject" placeholder="Subject" required class="form-control"
                            style="border:1px solid #D1D0D9; border-radius:4px;"> -->
                        <textarea id="message" name="message" rows="5" placeholder="Message" required class="form-control"
                            style="border:1px solid #D1D0D9; border-radius:4px;"></textarea>
                        <input type="submit" value="Send Message" class="btn"
                            style="background:#6C9283; color:#EDF4EE; border-radius:4px;">
                    </form>
                    <form action="get_contacts.php" method="GET">
                        <button class="btn w-100 mt-2"
                            style="background:#6C9283; color:#EDF4EE; border-radius:4px;">View all contacts</button>
                    </form>
                </div>

                <!-- Contacts List Section -->
            <div class="contacts-section rounded-4" id="contacts-list">
                <h2 class="section-title">
                    <i class="bi bi-inbox me-2"></i>Recent Messages
                </h2>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div id="contacts-container">
                            <div class="loading-spinner">
                                <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <p class="text-light mt-2">Loading messages...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Load existing contacts when page loads
            loadContacts();
            
            // Form submission
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                var formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    message: $('#message').val()
                };
                
                // Disable submit button and show loading
                $('#submit-btn').prop('disabled', true).html('<i class="bi bi-hourglass-split me-2"></i>Sending...');
                $('#response-message').hide();
                
                // Make AJAX request
                $.ajax({
                    url: 'submit.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            showMessage(response.message, 'success');
                            // Clear form on success
                            $('#contact-form')[0].reset();
                            // Reload contacts to show the new one
                            loadContacts();
                        } else {
                            showMessage(response.message, 'danger');
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = 'An error occurred while submitting the form.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        showMessage(errorMessage, 'danger');
                    },
                    complete: function() {
                        // Re-enable submit button
                        $('#submit-btn').prop('disabled', false).html('<i class="bi bi-send me-2"></i>Send Message');
                    }
                });
            });
            
            function showMessage(message, type) {
                var $responseDiv = $('#response-message');
                $responseDiv.removeClass().addClass('alert alert-' + type);
                $responseDiv.html('<i class="bi bi-' + (type === 'success' ? 'check-circle' : 'exclamation-triangle') + ' me-2"></i>' + message).show();
                
                // Auto-hide success messages after 5 seconds
                if (type === 'success') {
                    setTimeout(function() {
                        $responseDiv.fadeOut();
                    }, 5000);
                }
            }
            
            function loadContacts() {
                $.ajax({
                    url: 'submit.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success && response.data) {
                            displayContacts(response.data);
                        } else {
                            showNoContacts();
                        }
                    },
                    error: function() {
                        showNoContacts();
                    }
                });
            }
            
            function displayContacts(contacts) {
                var $container = $('#contacts-container');
                
                if (contacts.length === 0) {
                    showNoContacts();
                    return;
                }
                
                var html = '';
                contacts.forEach(function(contact) {
                    var date = new Date(contact.created_at || Date.now()).toLocaleDateString();
                    html += `
                        <div class="contact-item">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="contact-name">${escapeHtml(contact.name)}</div>
                                    <div class="contact-email">
                                        <i class="bi bi-envelope me-1"></i>${escapeHtml(contact.email)}
                                    </div>
                                    <div class="contact-message">${escapeHtml(contact.message)}</div>
                                    <div class="contact-date">
                                        <i class="bi bi-calendar me-1"></i>${date}
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <span class="badge bg-primary">#${contact.id}</span>
                                </div>
                            </div>
                        </div>
                    `;
                });
                
                $container.html(html);
            }
            
            function showNoContacts() {
                $('#contacts-container').html(`
                    <div class="no-contacts">
                        <i class="bi bi-inbox display-1 text-light opacity-50"></i>
                        <h4 class="text-light mt-3">No messages yet</h4>
                        <p class="text-light opacity-75">Be the first to send us a message!</p>
                    </div>
                `);
            }
            
            function escapeHtml(text) {
                var map = {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#039;'
                };
                return text.replace(/[&<>"']/g, function(m) { return map[m]; });
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        function showSlide(index) {
            const currentSlide = slides.eq(currentIndex);
            const nextSlide = slides.eq(index);

            // Animate current slide out
            currentSlide.removeClass('active').addClass('out');

            // After animation ends, hide it
            setTimeout(() => {
                currentSlide.removeClass('out').hide();
            }, 500); // match animation duration

            // Show next slide
            nextSlide.show().addClass('active');

            // Update dots
            $('.carousel-nav button').removeClass('active').eq(index).addClass('active');

            currentIndex = index;
        }


        $(document).ready(function() {
            let currentIndex = 0;
            const slides = $('.carousel-slide');
            const totalSlides = slides.length;

            // Show the first slide initially
            slides.hide().eq(currentIndex).show();
            $('.carousel-nav button').eq(currentIndex).addClass('active');

            function showSlide(index) {
                slides.fadeOut(300).eq(index).fadeIn(300);
                $('.carousel-nav button').removeClass('active').eq(index).addClass('active');
                currentIndex = index;
            }

            // Navigation dots click
            $('.carousel-nav button').click(function() {
                const index = $(this).data('slide');
                showSlide(index);
            });

            // Optional: Auto-play
            setInterval(function() {
                let nextIndex = (currentIndex + 1) % totalSlides;
                showSlide(nextIndex);
            }, 5000); // Change slide every 5s
        });
    </script>

    <script>
        const sections = Array.from(document.querySelectorAll("section, h2, h3, p"));
        const searchBox = document.getElementById("search-box");
        const resultsList = document.getElementById("search-results");

        function normalizeWhitespace(str) {
            // collapse multiple spaces & trim
            return str.replace(/\s+/g, ' ').trim();
        }

        function search(query) {
            resultsList.innerHTML = "";
            const q = query.toLowerCase();

            sections.forEach(sec => {
                const text = sec.textContent.toLowerCase();
                if (text.includes(q)) {
                    const li = document.createElement("li");

                    // Get clean text for display
                    const cleanText = normalizeWhitespace(sec.textContent);

                    li.classList.add("list-group-item");
                    li.textContent = cleanText.slice(0, 50) + (cleanText.length > 50 ? "…" : "");
                    li.addEventListener("click", () => {
                        sec.scrollIntoView({
                            behavior: "smooth",
                            block: "center"
                        });
                        sec.style.background = "#D1D0D9"; // highlight
                        setTimeout(() => sec.style.background = "", 2000);
                    });
                    resultsList.appendChild(li);
                }
            });
        }

        searchBox.addEventListener("input", (e) => {
            search(e.target.value);
        });
    </script>

</body>

</html>

<?php
include "common/footer.php";
?>