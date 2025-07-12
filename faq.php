<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Agro Pest Solutions</title>
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
            background: linear-gradient(135deg, #f8fffe 0%, #e8f5e8 100%);
            min-height: 100vh;
        }

        /* Navigation Bar Styles (matching navbar.php) */
        .top-nav {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 12px;
            text-align: right;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .top-nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .top-nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .main-nav {
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .main-nav .logo {
            font-size: 32px;
            font-weight: 800;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .main-nav .nav-links {
            display: flex;
            gap: 30px;
            position: relative;
            align-items: center;
        }

        .main-nav .nav-links a {
            text-decoration: none;
            color: #2d5016;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
        }

        .main-nav .nav-links a:hover,
        .main-nav .nav-links a.active {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        .main-nav .dropdown {
            position: relative;
        }

        .main-nav .dropdown:hover .dropdown-content {
            display: block;
        }

        .main-nav .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            border-radius: 15px;
            z-index: 100;
            overflow: hidden;
            min-width: 200px;
        }

        .main-nav .dropdown-content a {
            color: #2d5016;
            text-decoration: none;
            display: block;
            padding: 15px 20px;
            white-space: nowrap;
            border-radius: 0;
        }

        .main-nav .dropdown-content a:hover {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            transform: none;
        }

        .main-nav .language-dropdown {
            position: relative;
        }

        .main-nav .language-dropdown button {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .main-nav .language-dropdown button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        .main-nav .language-dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 15px;
            min-width: 150px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            z-index: 100;
            overflow: hidden;
        }

        .main-nav .language-dropdown-content a {
            color: #2d5016;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: all 0.3s ease;
        }

        .main-nav .language-dropdown-content a:hover {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
        }

        .main-nav .language-dropdown:hover .language-dropdown-content {
            display: block;
        }

        /* FAQ Page Styles */
        .faq-header {
            text-align: center;
            padding: 80px 20px 60px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .faq-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="0,0 1000,0 1000,100 0,80"/></svg>');
            background-size: cover;
            background-position: bottom;
        }

        .faq-header h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
        }

        .faq-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .faq-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .faq-search {
            margin-bottom: 40px;
            text-align: center;
        }

        .search-box {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }

        .search-box input {
            width: 100%;
            padding: 15px 50px 15px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .search-box input:focus {
            outline: none;
            border-color: #4a7c59;
            box-shadow: 0 5px 25px rgba(74, 124, 89, 0.3);
        }

        .search-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #4a7c59;
            font-size: 20px;
        }

        .faq-grid {
            display: grid;
            gap: 25px;
        }

        .faq-item {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(74, 124, 89, 0.1);
        }

        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(45, 80, 22, 0.15);
        }

        .faq-question {
            padding: 25px 30px;
            background: linear-gradient(135deg, #f8fffe, #ffffff);
            border-bottom: 1px solid rgba(74, 124, 89, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question:hover {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
        }

        .faq-question h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
            color: #2d5016;
            transition: color 0.3s ease;
        }

        .faq-question:hover h3 {
            color: white;
        }

        .faq-icon {
            font-size: 24px;
            color: #4a7c59;
            transition: all 0.3s ease;
        }

        .faq-question:hover .faq-icon {
            color: white;
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-answer.active {
            padding: 25px 30px;
            max-height: 500px;
        }

        .faq-answer p {
            margin: 0;
            color: #666;
            line-height: 1.7;
            font-size: 1rem;
        }

        .faq-answer ul {
            margin: 10px 0;
            padding-left: 20px;
            color: #666;
        }

        .faq-answer li {
            margin: 5px 0;
            line-height: 1.6;
        }

        .contact-cta {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 60px 20px;
            text-align: center;
            margin-top: 60px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(45, 80, 22, 0.3);
        }

        .contact-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .contact-cta p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            background: white;
            color: #2d5016;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin-top: 0;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-nav {
                padding: 10px 20px;
            }
            
            .main-nav .nav-links {
                gap: 15px;
            }
            
            .main-nav .logo {
                font-size: 24px;
            }
            
            .main-nav .nav-links a {
                padding: 8px 15px;
                font-size: 14px;
            }

            .faq-header h1 {
                font-size: 2.5rem;
            }

            .faq-header p {
                font-size: 1rem;
            }

            .faq-container {
                padding: 40px 15px;
            }

            .faq-question {
                padding: 20px;
            }

            .faq-answer.active {
                padding: 20px;
            }

            .contact-cta {
                padding: 40px 15px;
                margin-top: 40px;
            }

            .contact-cta h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 600px) {
            .main-nav {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }
            
            .main-nav .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .top-nav {
                text-align: center;
            }

            .faq-header {
                padding: 60px 15px 40px;
            }

            .faq-header h1 {
                font-size: 2rem;
            }

            .faq-question h3 {
                font-size: 1rem;
            }

            .search-box input {
                padding: 12px 40px 12px 15px;
            }
        }
    </style>
</head>
<body>
    
    <header class="faq-header">
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to common questions about our agricultural solutions and services</p>
    </header>

    <div class="faq-container">
        <div class="faq-search">
            <div class="search-box">
                <input type="text" placeholder="Search for questions..." id="searchInput">
                <span class="search-icon">🔍</span>
            </div>
        </div>

        <div class="faq-grid" id="faqGrid">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>What types of agro-inputs do you offer?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>We offer a comprehensive range of agricultural inputs including:</p>
                    <ul>
                        <li>High-quality pesticides for crop protection</li>
                        <li>Organic and inorganic fertilizers</li>
                        <li>Premium seeds for various crops</li>
                        <li>Agricultural tools and equipment</li>
                        <li>Soil conditioners and growth enhancers</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>How do I place an order on your platform?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>You can place orders through multiple convenient methods:</p>
                    <ul>
                        <li>Visit our physical store location</li>
                        <li>Call us directly at 7947425804</li>
                        <li>Contact our sales team for bulk orders</li>
                        <li>Get personalized recommendations from our experts</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>What payment methods do you accept?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>We accept the following payment methods for your convenience:</p>
                    <ul>
                        <li>Cash payments at our store</li>
                        <li>UPI payments (PhonePe, Google Pay, Paytm)</li>
                        <li>Bank transfers for bulk orders</li>
                        <li>Credit terms available for registered dealers</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>What is the nearest landmark to your store?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Our store is conveniently located near the Railway Station in Bagalkot. This makes it easily accessible for customers traveling by train or local transport. Look for our signage when you exit the railway station area.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>What are your hours of operation?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Our store operating hours are:</p>
                    <ul>
                        <li><strong>Monday to Saturday:</strong> 10:00 AM - 7:00 PM</li>
                        <li><strong>Sunday:</strong> Contact us for special arrangements</li>
                        <li><strong>Lunch Break:</strong> 1:00 PM - 2:00 PM</li>
                        <li><strong>Emergency Contact:</strong> 7947425804</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>Do you provide technical support for crop management?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide comprehensive technical support including:</p>
                    <ul>
                        <li>Crop-specific pest and disease management advice</li>
                        <li>Soil testing and fertilizer recommendations</li>
                        <li>Seasonal crop planning assistance</li>
                        <li>Product application guidelines</li>
                        <li>Follow-up consultations for optimal results</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>Are your products certified and safe to use?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Absolutely! All our products are:</p>
                    <ul>
                        <li>Certified by relevant agricultural authorities</li>
                        <li>Tested for quality and effectiveness</li>
                        <li>Compliant with safety standards</li>
                        <li>Accompanied by detailed usage instructions</li>
                        <li>Backed by manufacturer warranties</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <h3>Do you offer delivery services?</h3>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer delivery services with the following options:</p>
                    <ul>
                        <li>Local delivery within Bagalkot district</li>
                        <li>Bulk order delivery to farms</li>
                        <li>Scheduled delivery for regular customers</li>
                        <li>Express delivery for urgent requirements</li>
                    </ul>
                    <p>Contact us at 7947425804 to arrange delivery.</p>
                </div>
            </div>
        </div>

        <div class="contact-cta">
            <h2>Still Have Questions?</h2>
            <p>Our agricultural experts are here to help you with personalized solutions for your farming needs.</p>
            <a href="contact.php" class="cta-button">Contact Us Today</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Agro Pest Solutions. All rights reserved.</p>
    </footer>

    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('.faq-icon');
            
            // Close all other answers
            document.querySelectorAll('.faq-answer').forEach(ans => {
                if (ans !== answer) {
                    ans.classList.remove('active');
                }
            });
            
            // Reset all other icons
            document.querySelectorAll('.faq-icon').forEach(ic => {
                if (ic !== icon) {
                    ic.style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current answer
            answer.classList.toggle('active');
            
            // Toggle icon rotation
            if (answer.classList.contains('active')) {
                icon.style.transform = 'rotate(180deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();
                
                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Add smooth scrolling for better UX
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
    </script>
</body>
</html>