<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExamPortal - Online Examination System</title>
    
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="assets\css\bootstrap5.3.css">
     <!-- link CSS -->
    <link href="assets/css/index.css" rel="stylesheet">
                
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    
    
</head>
<body>
    <?php
    include "header.php"
     ?>
<!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Modern Online Examination System</h1>
                        <p>Streamline your assessment process with our secure, user-friendly exam portal. Create, manage, and conduct exams with automatic grading and instant results.</p>
                        <a href="take-exam.php" class="btn btn-custom btn-lg me-3" onclick="openExamPortal()">
                            <i class="bi bi-play-circle me-2"></i>Start Exam
                        </a>
                        <a href="#about" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-info-circle me-2"></i>Learn More
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="bi bi-laptop display-1 text-white"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Why Choose ExamPortal?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h4>Secure & Reliable</h4>
                        <p>Advanced security measures ensure exam integrity with encrypted data and secure user authentication.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-lightning-charge feature-icon"></i>
                        <h4>Instant Results</h4>
                        <p>Automatic grading and immediate result generation save time and provide instant feedback to students.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-gear feature-icon"></i>
                        <h4>Easy Management</h4>
                        <p>Intuitive interface for creating exams, managing questions, and monitoring student performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Students</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Exams Conducted</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Institutions</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">99.9%</span>
                        <span class="stat-label">Uptime</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title text-start">About ExamPortal</h2>
                    <p class="lead">ExamPortal is a comprehensive online examination system designed to modernize the assessment process for educational institutions and organizations.</p>
                    <p>Our platform provides a secure, efficient, and user-friendly solution for conducting online exams. With features like automatic grading, real-time monitoring, and detailed analytics, we help educators focus on what matters most - student learning and development.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Secure and encrypted data transmission</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Automatic grading and instant results</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Comprehensive reporting and analytics</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Multi-device compatibility</li>
                    </ul>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="bi bi-people display-1 text-primary"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt-fill contact-icon"></i>
                                    <div>
                                        <h5>Address</h5>
                                        <p>Ange Rapheal<br>Terminus Cette, Sic</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-telephone-fill contact-icon"></i>
                                    <div>
                                        <h5>Phone</h5>
                                        <p>+237(652687620)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <i class="bi bi-envelope-fill contact-icon"></i>
                                    <div>
                                        <h5>Email</h5>
                                        <p>support@examportal.com</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-clock-fill contact-icon"></i>
                                    <div>
                                        <h5>Support Hours</h5>
                                        <p>Mon - Fri: 9:00 AM - 6:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="mailto:support@examportal.com" class="btn btn-primary-custom">
                                <i class="bi bi-envelope me-2"></i>Send Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    How do I register for an exam?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    To register for an exam, click on the "Login" button and create a new account with your email and password. Once registered, you can view and register for available exams.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    What happens if my internet connection is lost during an exam?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The system automatically saves your answers as you progress. If your connection is lost, you can resume the exam from where you left off when you reconnect, provided the exam time hasn't expired.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    How long do I have to complete an exam?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Each exam has a specified time limit that will be displayed before you start. The timer will be visible throughout the exam, and the system will automatically submit your answers when time expires.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    When will I receive my exam results?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Results are generated automatically upon exam submission. You will see your score, percentage, and detailed breakdown immediately after completing the exam.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                    Can I retake an exam?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Exam retake policies depend on the specific exam settings configured by your instructor. Some exams may allow multiple attempts while others are limited to one attempt.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                    What devices are supported?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    ExamPortal works on all modern devices including desktops, laptops, tablets, and smartphones. We recommend using the latest version of Chrome, Firefox, Safari, or Edge browsers for the best experience.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   


    <?php
include 'includes/footer.php';

?>
    <!-- Bootstrap JS -->
<script src="assets/js/bootstrap5.5.js"></script>
<script src="assets/js/jquery.js"></script>
    
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
            }
        });

        // Function to open exam portal (placeholder)
        function openExamPortal() {
            alert('Exam Portal will open here. This would redirect to your main exam application.');
            // In actual implementation, this would redirect to your exam portal page
            // window.location.href = 'exam-portal.html';
        }

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        if (counter.textContent.includes('%')) {
                            counter.textContent = Math.ceil(current) + '%';
                        } else if (counter.textContent.includes('+')) {
                            counter.textContent = Math.ceil(current) + '+';
                        } else {
                            counter.textContent = Math.ceil(current);
                        }
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = counter.textContent; // Reset to original
                    }
                };
                
                updateCounter();
            });
        }

        // Trigger counter animation when stats section is visible
        const statsSection = document.querySelector('.stats-section');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(statsSection);
    </script>
</body>
</html>