<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Agro-Pests Solutions</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f8fffe 0%, #e8f5e8 100%);
            min-height: 100vh;
        }

        /* Animation Keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in {
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .fade-in-left {
            opacity: 0;
            animation: fadeInLeft 0.8s ease-out forwards;
        }

        .fade-in-right {
            opacity: 0;
            animation: fadeInRight 0.8s ease-out forwards;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 80px 0 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>') repeat;
            background-size: 50px 50px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: -40px auto 60px;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        /* Contact Form */
        .contact-form-section {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid #e0f2e7;
        }

        .form-title {
            color: #2d5016;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .form-subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #2d5016;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0f2e7;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4a7c59;
            box-shadow: 0 0 0 3px rgba(74, 124, 89, 0.1);
        }

        .form-group textarea {
            height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        /* Store Info Section */
        .store-info-section {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid #e0f2e7;
        }

        .store-title {
            color: #2d5016;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .store-description {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background: #f8fffe;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 1.8rem;
            flex-shrink: 0;
        }

        .contact-details h3 {
            color: #2d5016;
            margin: 0 0 8px 0;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .contact-details p {
            margin: 0;
            color: #666;
            font-size: 1rem;
            line-height: 1.5;
        }

        .contact-details a {
            color: #4a7c59;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-details a:hover {
            color: #2d5016;
        }

        /* Business Hours */
        .business-hours {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid #e0f2e7;
            margin-bottom: 40px;
        }

        .hours-title {
            color: #2d5016;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .hours-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #f8fffe;
            border-radius: 10px;
            border-left: 4px solid #4a7c59;
        }

        .hours-item .day {
            font-weight: 600;
            color: #2d5016;
        }

        .hours-item .time {
            color: #666;
        }

        /* Map Section */
        .map-section {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid #e0f2e7;
            margin-bottom: 40px;
        }

        .map-title {
            color: #2d5016;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .map-container {
            position: relative;
            width: 100%;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Services Section */
        .services-section {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid #e0f2e7;
            margin-bottom: 40px;
        }

        .services-title {
            color: #2d5016;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .service-item {
            background: #f8fffe;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .service-item:hover {
            transform: translateY(-5px);
            border-color: #4a7c59;
            box-shadow: 0 10px 30px rgba(74, 124, 89, 0.2);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2rem;
            margin: 0 auto 15px;
        }

        .service-item h3 {
            color: #2d5016;
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        .service-item p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .contact-form-section,
            .store-info-section,
            .business-hours,
            .map-section,
            .services-section {
                padding: 25px;
            }
            
            .form-title,
            .store-title,
            .hours-title,
            .map-title,
            .services-title {
                font-size: 1.8rem;
            }
            
            .map-container {
                height: 300px;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animation delays */
        .fade-in:nth-child(1) { animation-delay: 0.1s; }
        .fade-in:nth-child(2) { animation-delay: 0.2s; }
        .fade-in:nth-child(3) { animation-delay: 0.3s; }
        .fade-in:nth-child(4) { animation-delay: 0.4s; }
        .fade-in:nth-child(5) { animation-delay: 0.5s; }

        .fade-in-left:nth-child(1) { animation-delay: 0.2s; }
        .fade-in-right:nth-child(1) { animation-delay: 0.3s; }
    </style>
</head>
<body>
    

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content fade-in">
            <div class="hero-title">
            <h1 data-translate="get_in_touch">Get In Touch</h1>
            </div>
            
            <p class="hero-subtitle" data-translate="contact_hero_subtitle">Your partner in agricultural excellence. We're here to help you grow better crops with advanced pest management solutions and irrigation systems.</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Contact Form & Store Info Grid -->
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-section fade-in-left">
                <h2 class="form-title" data-translate="send_message">Send Us a Message</h2>
                <p class="form-subtitle" data-translate="form_subtitle">Have questions about our products or services? Drop us a message and we'll get back to you within 24 hours.</p>
                
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name" data-translate="full_name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" data-translate="email_address">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" data-translate="phone_number">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" data-translate="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" data-translate="message">Message *</label>
                        <textarea id="message" name="message" data-translate="message_placeholder" placeholder="Tell us about your requirements or questions..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn" data-translate="send_message_btn">Send Message</button>
                </form>
            </div>

            <!-- Store Information -->
            <div class="store-info-section fade-in-right">
                <h2 class="store-title" data-translate="store_name">Netravathi Agro Solutions</h2>
                <p class="store-description" data-translate="store_description">Leading provider of agricultural solutions, pest management systems, and irrigation equipment. Serving farmers across Karnataka with quality products and expert guidance.</p>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="icon">📍</div>
                        <div class="contact-details">
                            <h3 data-translate="visit_store">Visit Our Store</h3>
                            <p data-translate="store_address">Melligeri Towers, Main Road<br>
                            Station Road, Bagalkot - 587101<br>
                            Karnataka, India</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="icon">📞</div>
                        <div class="contact-details">
                            <h3 data-translate="call_us">Call Us</h3>
                            <p><a href="tel:+917947425804">+91 79474 25804</a><br>
                            <small data-translate="call_hours">Mon-Sat: 9:00 AM - 7:00 PM</small></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="icon">📧</div>
                        <div class="contact-details">
                            <h3 data-translate="email_support">Email Support</h3>
                            <p><a href="mailto:support@agropests.com">support@agropests.com</a><br>
                            <small data-translate="email_response">We respond within 24 hours</small></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="icon">🌐</div>
                        <div class="contact-details">
                            <h3 data-translate="online_support">Online Support</h3>
                            <p data-translate="chat_experts">Chat with our agricultural experts<br>
                            <small data-translate="available_hours">Available during business hours</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Business Hours -->
        <div class="business-hours fade-in">
            <h2 class="hours-title" data-translate="business_hours">Business Hours</h2>
            <div class="hours-grid">
                <div class="hours-item">
                    <span class="day" data-translate="monday_friday">Monday - Friday</span>
                    <span class="time" data-translate="hours_weekday">9:00 AM - 7:00 PM</span>
                </div>
                <div class="hours-item">
                    <span class="day" data-translate="saturday">Saturday</span>
                    <span class="time" data-translate="hours_saturday">9:00 AM - 6:00 PM</span>
                </div>
                <div class="hours-item">
                    <span class="day" data-translate="sunday">Sunday</span>
                    <span class="time" data-translate="hours_sunday">10:00 AM - 4:00 PM</span>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="services-section fade-in">
            <h2 class="services-title" data-translate="our_services">Our Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <div class="service-icon">🌱</div>
                    <h3 data-translate="pest_management">Pest Management</h3>
                    <p data-translate="pest_management_desc">Comprehensive pest control solutions with eco-friendly products and expert consultation.</p>
                </div>
                <div class="service-item">
                    <div class="service-icon">💧</div>
                    <h3 data-translate="irrigation_systems">Irrigation Systems</h3>
                    <p data-translate="irrigation_systems_desc">Advanced drip irrigation and sprinkler systems for efficient water management.</p>
                </div>
                <div class="service-item">
                    <div class="service-icon">🚜</div>
                    <h3 data-translate="farm_equipment">Farm Equipment</h3>
                    <p data-translate="farm_equipment_desc">Quality agricultural equipment and tools for modern farming needs.</p>
                </div>
                <div class="service-item">
                    <div class="service-icon">👨‍🌾</div>
                    <h3 data-translate="expert_consultation">Expert Consultation</h3>
                    <p data-translate="expert_consultation_desc">Professional agricultural advice and crop management guidance from our experts.</p>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section fade-in">
            <h2 class="map-title" data-translate="find_us_map">Find Us on Map</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3831.7405729324573!2d75.70018000000002!3d16.182323399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDEwJzU2LjQiTiA3NcKwNDInMDAuNyJF!5e0!3m2!1sen!2sin!4v1752084024859!5m2!1sen!2sin" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        // Add contact page translations to the global translation system
        document.addEventListener('DOMContentLoaded', function() {
            // Add contact page specific translations
            if (window.TranslationSystem) {
                window.TranslationSystem.addTranslationContent({
                    // Contact Page Content
                    get_in_touch: "Get In Touch",
                    contact_hero_subtitle: "Your partner in agricultural excellence. We're here to help you grow better crops with advanced pest management solutions and irrigation systems.",
                    send_message: "Send Us your Message",
                    form_subtitle: "Have questions about our products or services? Drop us a message and we'll get back to you within 24 hours.",
                    full_name: "Full Name *",
                    email_address: "Email Address *",
                    phone_number: "Phone Number",
                    subject: "Subject *",
                    message: "Message *",
                    message_placeholder: "Tell us about your requirements or questions...",
                    send_message_btn: "Send Message",
                    store_name: "Netravathi Agro Solutions",
                    store_description: "Leading provider of agricultural solutions, pest management systems, and irrigation equipment. Serving farmers across Karnataka with quality products and expert guidance.",
                    visit_store: "Visit Our Store",
                    store_address: "Melligeri Towers, Main Road\nStation Road, Bagalkot - 587101\nKarnataka, India",
                    call_us: "Call Us",
                    call_hours: "Mon-Sat: 9:00 AM - 7:00 PM",
                    email_support: "Email Support",
                    email_response: "We respond within 24 hours",
                    online_support: "Online Support",
                    chat_experts: "Chat with our agricultural experts",
                    available_hours: "Available during business hours",
                    business_hours: "Business Hours",
                    monday_friday: "Monday - Friday",
                    hours_weekday: "9:00 AM - 7:00 PM",
                    saturday: "Saturday",
                    hours_saturday: "9:00 AM - 6:00 PM",
                    sunday: "Sunday",
                    hours_sunday: "10:00 AM - 4:00 PM",
                    our_services: "Our Services",
                    pest_management: "Pest Management",
                    pest_management_desc: "Comprehensive pest control solutions with eco-friendly products and expert consultation.",
                    irrigation_systems: "Irrigation Systems",
                    irrigation_systems_desc: "Advanced drip irrigation and sprinkler systems for efficient water management.",
                    farm_equipment: "Farm Equipment",
                    farm_equipment_desc: "Quality agricultural equipment and tools for modern farming needs.",
                    expert_consultation: "Expert Consultation",
                    expert_consultation_desc: "Professional agricultural advice and crop management guidance from our experts.",
                    find_us_map: "Find Us on Map"
                });
            }
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');
            fadeElements.forEach(element => {
                element.style.animationPlayState = 'paused';
                observer.observe(element);
            });
        });

        // Form submission handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const submitBtn = this.querySelector('.submit-btn');
            
            // Show loading state
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual form handling)
            setTimeout(() => {
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
                submitBtn.textContent = 'Send Message';
                submitBtn.disabled = false;
            }, 2000);
        });

        // Smooth scrolling for anchor links
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

        // Add hover effects to contact items
        document.querySelectorAll('.contact-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>