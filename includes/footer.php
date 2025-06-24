<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #1a73e8;
            --dark-blue: #0d47a1;
            --light-blue: #e8f0fe;
        }
        
        .footer {
            background-color: var(--dark-blue);
            color: white;
            padding: 3rem 0 0;
        }
        
        .footer-links h5 {
            color: white;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        
        .footer-links ul {
            list-style: none;
            padding-left: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .newsletter-input {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
        }
        
        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        
        .newsletter-input:focus {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            box-shadow: none;
        }
        
        .newsletter-btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
        }
        
        .newsletter-btn:hover {
            background-color: #0d5fd1;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-blue);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        
        .footer-logo {
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .footer-logo i {
            color: var(--primary-blue);
        }
        
        .app-badge {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            padding: 0.5rem 1rem;
            display: inline-flex;
            align-items: center;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .app-badge:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .app-badge i {
            font-size: 1.5rem;
            margin-right: 10px;
            color: var(--primary-blue);
        }
        
        .app-badge-text small {
            display: block;
            font-size: 0.7rem;
            line-height: 1;
        }
        
        .app-badge-text span {
            font-size: 0.9rem;
            line-height: 1;
        }
    </style>
</head>
<body>
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about">
                        <h3 class="footer-logo mb-3">
                            <i class="fas fa-graduation-cap me-2"></i>ExamPortal
                        </h3>
                        <p class="text-white-50 mb-4">
                            Providing secure and reliable online examination solutions for educational institutions and certification bodies worldwide.
                        </p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links Column -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <!-- <li><a href="#">Pricing</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Careers</a></li> -->
                        </ul>
                    </div>
                </div>
                
                <!-- Support Column -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h5>Support</h5>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <!-- <li><a href="#">System Status</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Privacy Policy</a></li> -->
                        </ul>
                    </div>
                </div>
                
                <!-- Newsletter Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-newsletter">
                        <h5>Newsletter</h5>
                        <p class="text-white-50 mb-3">
                            Subscribe to get updates on new exams, features, and educational resources.
                        </p>
                        <form class="mb-4">
                            <div class="input-group">
                                <input type="email" class="form-control newsletter-input" placeholder="Your email address">
                                <button class="btn newsletter-btn" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                        
                        <!-- <h5 class="mt-4">Download App</h5>
                        <div class="app-download">
                            <a href="#" class="app-badge mb-2">
                                <i class="fab fa-apple"></i>
                                <div class="app-badge-text">
                                    <small>Download on the</small>
                                    <span>App Store</span>
                                </div>
                            </a>
                            <a href="#" class="app-badge">
                                <i class="fab fa-google-play"></i>
                                <div class="app-badge-text">
                                    <small>Get it on</small>
                                    <span>Google Play</span>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="text-white-50 mb-0">
                            © 2025 ExamPortal. All rights reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class="text-white-50 me-3">Terms of Service</a>
                        <a href="#" class="text-white-50 me-3">Privacy Policy</a>
                        <a href="#" class="text-white-50">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>