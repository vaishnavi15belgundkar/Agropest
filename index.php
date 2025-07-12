<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Pest - Professional Crop Protection Solutions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            background:url('Images/Homebg1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(45, 80, 22, 0.1), rgba(74, 124, 89, 0.1));
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 0.8; }
            50% { opacity: 1; }
        }

        .hero-content {
            max-width: 800px;
            z-index: 2;
            position: relative;
            animation: fadeInUp 1.2s ease-out;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); */
            background: linear-gradient(45deg,rgb(255, 255, 255), #e8f5e8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            font-weight: 300;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(45, 80, 22, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(45, 80, 22, 0.4);
        }

        /* Story Section */
        .story-section {
            padding: 120px 0;
            background: linear-gradient(135deg, #f8fffe, #e8f5e8);
            position: relative;
            overflow: hidden;
        }

        .story-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="%23e8f5e8" opacity="0.3"/><circle cx="80" cy="80" r="1" fill="%23e8f5e8" opacity="0.3"/><circle cx="40" cy="60" r="1" fill="%23e8f5e8" opacity="0.3"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.1;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .story-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 300px 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .story-content {
            opacity: 0;
            animation: slideInLeft 1s ease-out 0.5s forwards;
        }

        .story-content h2 {
            font-size: 3rem;
            color: #2d5016;
            margin-bottom: 30px;
            font-weight: 700;
            position: relative;
        }

        .story-content h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
            border-radius: 2px;
        }

        .story-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #555;
            text-align: justify;
        }

        .story-stats {
            display: flex;
            flex-direction: column;
            gap: 40px;
            opacity: 0;
            animation: fadeIn 1s ease-out 1s forwards;
        }

        .stat-item {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(45, 80, 22, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(45, 80, 22, 0.2);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2d5016;
            margin-bottom: 10px;
            display: block;
        }

        .stat-label {
            color: #666;
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .story-image {
            opacity: 0;
            animation: slideInRight 1s ease-out 0.8s forwards;
        }

        .story-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(45, 80, 22, 0.2);
            transition: transform 0.3s ease;
        }

        .story-image img:hover {
            transform: scale(1.05);
        }

        /* Solutions Section */
        .solutions-section {
            padding: 120px 0;
            background: linear-gradient(135deg, #ffffff, #f8fffe);
            position: relative;
        }

        .solutions-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 80px;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        .section-title h2 {
            font-size: 3rem;
            color: #2d5016;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .section-title p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
        }

        .solution-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(45, 80, 22, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        .solution-card:nth-child(1) { animation-delay: 0.2s; }
        .solution-card:nth-child(2) { animation-delay: 0.4s; }
        .solution-card:nth-child(3) { animation-delay: 0.6s; }
        .solution-card:nth-child(4) { animation-delay: 0.8s; }

        .solution-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .solution-card:hover::before {
            transform: scaleX(1);
        }

        .solution-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(45, 80, 22, 0.2);
        }

        .solution-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 30px;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .solution-card:hover .solution-icon {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(45, 80, 22, 0.3);
        }

        .solution-icon img {
            width: 40px;
            height: 40px;
            filter: brightness(0) invert(1);
        }

        .solution-card h3 {
            font-size: 1.5rem;
            color: #2d5016;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .solution-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .solution-button {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .solution-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(45, 80, 22, 0.3);
        }

        /* Contact Section */
        .contact-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(45, 80, 22, 0.95), rgba(74, 124, 89, 0.9)), url('Images/Field.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            position: relative;
        }

        .contact-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .contact-title {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        .contact-subtitle {
            font-size: 1.2rem;
            margin-bottom: 50px;
            opacity: 0.9;
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.2s forwards;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.4s forwards;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.2);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-textarea {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            min-height: 120px;
            resize: vertical;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .form-textarea:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.2);
        }

        .form-textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .submit-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #ffffff, #e8f5e8);
            color: #2d5016;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #1a3510, #2d5016);
            color: white;
            padding: 60px 0 30px;
            position: relative;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #e8f5e8;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #4a7c59;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #4a7c59;
            transform: translateY(-3px);
        }

        .social-icon img {
            width: 20px;
            height: 20px;
            filter: brightness(0) invert(1);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Scroll to Top Button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            box-shadow: 0 10px 30px rgba(45, 80, 22, 0.3);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scroll-top.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(45, 80, 22, 0.4);
        }

        /* Animations */
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

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .story-container {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 40px;
            }

            .story-stats {
                flex-direction: row;
                justify-content: center;
                flex-wrap: wrap;
            }

            .contact-form {
                padding: 30px 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .story-content h2 {
                font-size: 2rem;
            }

            .contact-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 0 20px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .story-section,
            .solutions-section,
            .contact-section {
                padding: 60px 0;
            }

            .stat-item {
                padding: 20px;
            }

            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<?php include 'navbar.php' ?>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 data-translate="hero_title">Agro Pest</h1>
            <p data-translate="hero_subtitle">Advanced Insecticide Solutions for Superior Crop Protection</p>
            <a href="products.php" class="cta-button" data-translate="get_started_today">Get Started Today</a>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="story-container">
            <div class="story-content">
                <h2 data-translate="our_story">Our Story</h2>
                <p data-translate="story_paragraph_1">
                    Netravathi Agro Kendra in Bagalkot stands as a beacon of agricultural excellence, serving the farming community with unwavering dedication since 2012. We are recognized as one of the leading agricultural product dealers, specializing in fertilizers, crop protection chemicals, and comprehensive farming solutions.
                </p>
                <p data-translate="story_paragraph_2">
                    Our journey began with a simple yet powerful vision: to empower farmers with the finest agricultural products and expert guidance. Over the years, we've built an extensive network that serves both local farmers and clients across the region, establishing ourselves as a trusted partner in agricultural success.
                </p>
                <p data-translate="story_paragraph_3">
                    Customer satisfaction remains at the heart of everything we do. Our commitment to quality products, competitive pricing, and exceptional service has helped us cultivate lasting relationships with thousands of farmers who depend on us for their agricultural needs.
                </p>
            </div>

            <div class="story-stats">
                <div class="stat-item">
                    <span class="stat-number">100+</span>
                    <span class="stat-label" data-translate="distributors">Distributors</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">75K+</span>
                    <span class="stat-label" data-translate="retailers">Retailers</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">10M+</span>
                    <span class="stat-label" data-translate="farmers">Farmers</span>
                </div>
            </div>

            <div class="story-image">
                <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Agricultural Excellence">
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="solutions-section">
        <div class="solutions-container">
            <div class="section-title">
                <h2 data-translate="our_solutions">Our Solutions</h2>
                <p data-translate="solutions_description">Comprehensive crop protection solutions designed to maximize your agricultural potential</p>
            </div>

            <div class="solutions-grid">
                <div class="solution-card">
                    <div class="solution-icon">
                        <img src="Images/Herb1.png" alt="Herbicides">
                    </div>
                    <h3 data-translate="herbicides">Herbicides</h3>
                    <p data-translate="herbicides_description">Advanced weed management solutions that effectively control unwanted vegetation while protecting your valuable crops from competition.</p>
                    <button class="solution-button" data-translate="learn_more">Learn More</button>
                </div>

                <div class="solution-card">
                    <div class="solution-icon">
                        <img src="Images/Herb2.png" alt="Fungicides">
                    </div>
                    <h3 data-translate="fungicides">Fungicides</h3>
                    <p data-translate="fungicides_description">Powerful fungal disease control products that protect your crops from harmful pathogens, ensuring healthy plant development.</p>
                    <button class="solution-button" data-translate="learn_more">Learn More</button>
                </div>

                <div class="solution-card">
                    <div class="solution-icon">
                        <img src="Images/Herb3.png" alt="Insecticides">
                    </div>
                    <h3 data-translate="insecticides">Insecticides</h3>
                    <p data-translate="insecticides_description">Targeted pest control solutions that effectively eliminate harmful insects while maintaining ecological balance in your fields.</p>
                    <button class="solution-button" data-translate="learn_more">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="contact-container">
            <h2 class="contact-title" data-translate="get_in_touch">Get In Touch</h2>
            <p class="contact-subtitle" data-translate="contact_subtitle">Ready to transform your agricultural operations? Contact our experts today.</p>
            
            <!-- Display Success/Error Messages -->
            <?php
            if (isset($_GET['status']) && isset($_GET['message'])) {
                $status = $_GET['status'];
                $message = htmlspecialchars($_GET['message']);
                
                if ($status === 'success') {
                    echo '<div style="color: green; padding: 10px; margin-bottom: 15px; border: 1px solid green; background: #f0fff0;">';
                    echo $message;
                    echo '</div>';
                } elseif ($status === 'error') {
                    echo '<div style="color: red; padding: 10px; margin-bottom: 15px; border: 1px solid red; background: #fff0f0;">';
                    echo $message;
                    echo '</div>';
                }
            }
            ?>
            
            <form class="contact-form" action="Process.php" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="Name" class="form-input" data-translate-placeholder="your_full_name" placeholder="Your Full Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-input" data-translate-placeholder="email_address" placeholder="Email Address *" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="Phone" class="form-input" data-translate-placeholder="phone_number" placeholder="Phone Number *" required>
                    </div>
                </div>
                <textarea name="Message" class="form-textarea" data-translate-placeholder="agricultural_needs" placeholder="Tell us about your agricultural needs..." required></textarea>
                <button type="submit" class="submit-button" data-translate="send_message">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3 data-translate="company">Company</h3>
                <ul>
                    <li><a href="about.php" data-translate="about_us">About Us</a></li>
                    <li><a href="products.php" data-translate="our_solutions">Our Solutions</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 data-translate="policy_info">Policy Info</h3>
                <ul>
                    <li><a href="privacy.php" data-translate="privacy_policy">Privacy Policy</a></li>
                    <li><a href="terms.php" data-translate="terms_of_service">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 data-translate="support">Support</h3>
                <ul>
                    <li><a href="faq.php" data-translate="faq">FAQ</a></li>
                    <li><a href="contact.php" data-translate="contact_support">Contact Support</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 data-translate="connect_with_us">Connect With Us</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <img src="Images/facebook.png" alt="Facebook">
                    </a>
                    <a href="https://www.justdial.com/Bagalkot/Netravathi-Agro-And-Irrigation-Systems-Near-Railway-Station-Bagalkot-Station-Road/9999P8354-8354-180104153826-W2L5_BZDET" class="social-icon">
                        <img src="Images/JustDial+Logo.png" alt="JustDial">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p data-translate="footer_copyright">&copy; 2025 Agro Pest. All rights reserved. | Professional Agricultural Solutions</p>
        </div>
    </footer>

    <script>
        // Wait for navbar translation system to be available
        document.addEventListener('DOMContentLoaded', function() {
            // Add new translation content for index page
            if (window.TranslationSystem) {
                window.TranslationSystem.addTranslationContent({
                    // Hero Section
                    hero_title: "Agro Pest",
                    hero_subtitle: "Advanced Insecticide Solutions for Superior Crop Protection",
                    
                    // Story Section
                    our_story: "Our Story",
                    story_paragraph_1: "Netravathi Agro Kendra in Bagalkot stands as a beacon of agricultural excellence, serving the farming community with unwavering dedication since 2012. We are recognized as one of the leading agricultural product dealers, specializing in fertilizers, crop protection chemicals, and comprehensive farming solutions.",
                    story_paragraph_2: "Our journey began with a simple yet powerful vision: to empower farmers with the finest agricultural products and expert guidance. Over the years, we've built an extensive network that serves both local farmers and clients across the region, establishing ourselves as a trusted partner in agricultural success.",
                    story_paragraph_3: "Customer satisfaction remains at the heart of everything we do. Our commitment to quality products, competitive pricing, and exceptional service has helped us cultivate lasting relationships with thousands of farmers who depend on us for their agricultural needs.",
                    
                    // Stats
                    distributors: "Distributors",
                    retailers: "Retailers",
                    farmers: "Farmers",
                    
                    // Solutions Section
                    our_solutions: "Our Solutions",
                    solutions_description: "Comprehensive crop protection solutions designed to maximize your agricultural potential",
                    herbicides: "Herbicides",
                    herbicides_description: "Advanced weed management solutions that effectively control unwanted vegetation while protecting your valuable crops from competition.",
                    fungicides: "Fungicides",
                    fungicides_description: "Powerful fungal disease control products that protect your crops from harmful pathogens, ensuring healthy plant development.",
                    insecticides: "Insecticides",
                    insecticides_description: "Targeted pest control solutions that effectively eliminate harmful insects while maintaining ecological balance in your fields.",
                    learn_more: "Learn More",
                    
                    // Contact Section
                    get_in_touch: "Get In Touch",
                    contact_subtitle: "Ready to transform your agricultural operations? Contact our experts today.",
                    your_full_name: "Your Full Name *",
                    email_address: "Email Address *",
                    phone_number: "Phone Number *",
                    agricultural_needs: "Tell us about your agricultural needs...",
                    send_message: "Send Message",
                    
                    // Footer
                    company: "Company",
                    policy_info: "Policy Info",
                    privacy_policy: "Privacy Policy",
                    terms_of_service: "Terms of Service",
                    support: "Support",
                    faq: "FAQ",
                    contact_support: "Contact Support",
                    connect_with_us: "Connect With Us",
                    footer_copyright: "© 2025 Agro Pest. All rights reserved. | Professional Agricultural Solutions"
                });

                // Enhanced translation system to handle placeholders
                const originalTranslatePage = window.TranslationSystem.translatePage;
                
                window.TranslationSystem.translatePage = async function(targetLang) {
                    // Call original translation
                    await originalTranslatePage(targetLang);
                    
                    // Handle placeholder translations
                    if (targetLang !== 'en') {
                        const placeholderElements = document.querySelectorAll('[data-translate-placeholder]');
                        
                        for (const element of placeholderElements) {
                            const key = element.getAttribute('data-translate-placeholder');
                            const originalText = window.TranslationSystem.getTranslationContent()[key];
                            
                            if (originalText) {
                                try {
                                    const translatedText = await window.TranslationSystem.translateText(originalText, 'en', targetLang);
                                    element.placeholder = translatedText;
                                } catch (error) {
                                    console.error(`Placeholder translation failed for ${key}:`, error);
                                }
                            }
                        }
                    } else {
                        // Restore English placeholders
                        const placeholderElements = document.querySelectorAll('[data-translate-placeholder]');
                        placeholderElements.forEach(element => {
                            const key = element.getAttribute('data-translate-placeholder');
                            const originalText = window.TranslationSystem.getTranslationContent()[key];
                            if (originalText) {
                                element.placeholder = originalText;
                            }
                        });
                    }
                };

                // Add method to get translation content
                window.TranslationSystem.getTranslationContent = function() {
                    return window.TranslationSystem.TRANSLATION_CONTENT || {};
                };

                // Add method to translate text (expose internal method)
                window.TranslationSystem.translateText = async function(text, sourceLang, targetLang) {
                    // This should match the internal translateText function from navbar
                    const cacheKey = `${text}_${targetLang}`;
                    const translationCache = JSON.parse(localStorage.getItem('translationCache') || '{}');
                    
                    if (translationCache[cacheKey]) {
                        return translationCache[cacheKey];
                    }

                    const TRANSLATION_APIS = [
                        {
                            translate: async (text, sourceLang, targetLang) => {
                                const response = await fetch(`https://api.mymemory.translated.net/get?q=${encodeURIComponent(text)}&langpair=${sourceLang}|${targetLang}`);
                                const data = await response.json();
                                return data.responseData.translatedText;
                            }
                        },
                        {
                            translate: async (text, sourceLang, targetLang) => {
                                const response = await fetch(`https://lingva.ml/api/v1/${sourceLang}/${targetLang}/${encodeURIComponent(text)}`);
                                const data = await response.json();
                                return data.translation;
                            }
                        }
                    ];

                    for (const api of TRANSLATION_APIS) {
                        try {
                            const result = await Promise.race([
                                api.translate(text, sourceLang, targetLang),
                                new Promise((_, reject) => setTimeout(() => reject(new Error('Timeout')), 5000))
                            ]);
                            
                            if (result && result.trim() && result !== text) {
                                const updatedCache = JSON.parse(localStorage.getItem('translationCache') || '{}');
                                updatedCache[cacheKey] = result;
                                localStorage.setItem('translationCache', JSON.stringify(updatedCache));
                                return result;
                            }
                        } catch (error) {
                            console.warn(`Translation API failed:`, error.message);
                            continue;
                        }
                    }
                    
                    return text;
                };

                // Re-translate page if a language is already selected
                const currentLang = localStorage.getItem('selectedLanguage') || 'en';
                if (currentLang !== 'en') {
                    setTimeout(() => {
                        window.TranslationSystem.translatePage(currentLang);
                    }, 100);
                }
            }
        });

        // Performance-optimized smooth scrolling with advanced techniques
        (function() {
            'use strict';

            // Performance optimization utilities
            const throttle = (func, limit) => {
                let inThrottle;
                return function() {
                    const args = arguments;
                    const context = this;
                    if (!inThrottle) {
                        func.apply(context, args);
                        inThrottle = true;
                        setTimeout(() => inThrottle = false, limit);
                    }
                }
            };

            const debounce = (func, wait) => {
                let timeout;
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout);
                        func(...args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            };

            // Smooth scrolling implementation with easing
            class SmoothScroll {
                constructor() {
                    this.isScrolling = false;
                    this.targetY = 0;
                    this.currentY = 0;
                    this.ease = 0.1;
                    this.init();
                }

                init() {
                    this.raf = this.raf.bind(this);
                    this.requestId = null;
                    this.startRAF();
                }

                startRAF() {
                    this.currentY = window.pageYOffset;
                    this.targetY = window.pageYOffset;
                    this.requestId = requestAnimationFrame(this.raf);
                }

                raf() {
                    this.currentY += (this.targetY - this.currentY) * this.ease;
                    
                    if (Math.abs(this.targetY - this.currentY) > 0.1) {
                        this.requestId = requestAnimationFrame(this.raf);
                    } else {
                        this.currentY = this.targetY;
                        this.isScrolling = false;
                    }
                }

                scrollTo(target, duration = 1000) {
                    if (this.isScrolling) return;
                    
                    this.isScrolling = true;
                    const startY = window.pageYOffset;
                    const distance = target - startY;
                    const startTime = performance.now();

                    const easeInOutCubic = (t) => {
                        return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
                    };

                    const animateScroll = (currentTime) => {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const easeProgress = easeInOutCubic(progress);
                        
                        window.scrollTo(0, startY + distance * easeProgress);
                        
                        if (progress < 1) {
                            requestAnimationFrame(animateScroll);
                        } else {
                            this.isScrolling = false;
                        }
                    };

                    requestAnimationFrame(animateScroll);
                }
            }

            // Initialize smooth scroll
            const smoothScroll = new SmoothScroll();

            // Enhanced scroll to top with smooth animation
            const scrollTopBtn = document.getElementById('scrollTop');
            let isScrollTopVisible = false;

            const updateScrollTopButton = throttle(() => {
                const shouldShow = window.pageYOffset > 300;
                if (shouldShow !== isScrollTopVisible) {
                    isScrollTopVisible = shouldShow;
                    if (scrollTopBtn) {
                        scrollTopBtn.classList.toggle('visible', shouldShow);
                    }
                }
            }, 16);

            window.addEventListener('scroll', updateScrollTopButton, { passive: true });

            // Smooth scroll to top function
            window.scrollToTop = function() {
                smoothScroll.scrollTo(0, 800);
            };

            // Enhanced smooth scrolling for anchor links
            document.addEventListener('click', function(e) {
                const anchor = e.target.closest('a[href^="#"]');
                if (!anchor) return;

                e.preventDefault();
                const targetId = anchor.getAttribute('href').substring(1);
                const target = document.getElementById(targetId);
                
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    smoothScroll.scrollTo(offsetPosition, 1200);
                }
            });

            // Optimized Intersection Observer for animations
            const createObserver = (callback, options = {}) => {
                const defaultOptions = {
                    threshold: [0, 0.1, 0.5, 1],
                    rootMargin: '0px 0px -50px 0px',
                    ...options
                };

                return new IntersectionObserver(callback, defaultOptions);
            };

            // Animation observer with performance optimization
            const animationObserver = createObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && entry.intersectionRatio > 0.1) {
                        entry.target.style.animationPlayState = 'running';
                        entry.target.style.animationFillMode = 'both';
                    }
                });
            });

            // Observe elements when DOM is ready
            const observeElements = debounce(() => {
                const elementsToObserve = document.querySelectorAll('.story-content, .story-stats, .story-image, .solution-card, .section-title, .contact-title, .contact-subtitle, .contact-form');
                elementsToObserve.forEach(el => {
                    el.style.animationPlayState = 'paused';
                    animationObserver.observe(el);
                });
            }, 100);

            // Enhanced counter animation with smooth easing
            function animateCounters() {
                const counters = document.querySelectorAll('.stat-number');
                
                counters.forEach(counter => {
                    const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                    const duration = 2000;
                    const startTime = performance.now();
                    let startValue = 0;

                    const easeOutQuart = (t) => 1 - (--t) * t * t * t;

                    const updateCounter = (currentTime) => {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const easeProgress = easeOutQuart(progress);
                        const current = startValue + (target - startValue) * easeProgress;
                        
                        if (target >= 1000000) {
                            counter.textContent = (current / 1000000).toFixed(1) + 'M+';
                        } else if (target >= 1000) {
                            counter.textContent = Math.floor(current / 1000) + 'K+';
                        } else {
                            counter.textContent = Math.floor(current) + '+';
                        }
                        
                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        }
                    };

                    requestAnimationFrame(updateCounter);
                });
            }

            // Stats observer with single trigger
            const statsObserver = createObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && entry.intersectionRatio > 0.3) {
                        animateCounters();
                        statsObserver.unobserve(entry.target);
                    }
                });
            });

            // Enhanced form validation
            const enhanceForm = () => {
                const contactForm = document.querySelector('.contact-form');
                if (!contactForm) return;

                contactForm.addEventListener('submit', function(e) {
                    const inputs = this.querySelectorAll('input[required], textarea[required]');
                    let valid = true;

                    inputs.forEach(input => {
                        const isValid = input.value.trim() !== '';
                        input.style.borderColor = isValid ? 
                            'rgba(255, 255, 255, 0.3)' : 
                            'rgba(255, 100, 100, 0.8)';
                        
                        if (!isValid) {
                            valid = false;
                            input.style.transition = 'border-color 0.3s ease';
                        }
                    });

                    if (!valid) {
                        e.preventDefault();
                        const firstInvalid = this.querySelector('input[style*="255, 100, 100"], textarea[style*="255, 100, 100"]');
                        if (firstInvalid) {
                            const offset = firstInvalid.getBoundingClientRect().top + window.pageYOffset - 100;
                            smoothScroll.scrollTo(offset, 600);
                        }
                    }
                });
            };

            // Initialize everything when DOM is ready
            const init = () => {
                observeElements();
                enhanceForm();
                
                const statsSection = document.querySelector('.story-stats');
                if (statsSection) {
                    statsObserver.observe(statsSection);
                }
            };

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', init);
            } else {
                init();
            }

            // Cleanup on page unload
            window.addEventListener('beforeunload', () => {
                if (smoothScroll.requestId) {
                    cancelAnimationFrame(smoothScroll.requestId);
                }
                animationObserver.disconnect();
                statsObserver.disconnect();
            });

        })();
    </script>
    <chat-bot platform_id="8c84f1aa-7667-47bc-969d-ab20e6d35bc4" user_id="f857e65f-2d23-4105-9f33-acc430a464f1" chatbot_id="673df284-e787-4722-8dc4-a4fe0edd7226"><a href="https://www.chatsimple.ai/?utm_source=widget&utm_medium=referral">chatsimple</a></chat-bot><script src="https://cdn.chatsimple.ai/chat-bot-loader.js" defer></script>
</body>
</html>