<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crops - Agro Pest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8fdf9 0%, #e8f5e8 100%);
            color: #333;
            line-height: 1.6;
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
            background: rgba(45, 80, 22, 0.1);
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
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
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        /* Main Content */
        .main-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 60px 20px;
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 40px;
        }

        /* Sidebar */
        .sidebar {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 30px;
            height: fit-content;
            position: sticky;
            top: 120px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .sidebar h3 {
            color: #2d5016;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
        }

        .sidebar h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border-radius: 2px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 15px;
            transform: translateX(0);
            transition: all 0.3s ease;
        }

        .sidebar ul li:hover {
            transform: translateX(10px);
        }

        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            border-radius: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .sidebar ul li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .sidebar ul li a:hover::before {
            left: 0;
        }

        .sidebar ul li a:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        /* Blog Container */
        .blog-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            animation: fadeIn 1s ease-out;
        }

        /* Blog Cards */
        .blog-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .blog-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .blog-card:hover::before {
            transform: scaleX(1);
        }

        .blog-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .blog-card:hover img {
            transform: scale(1.05);
        }

        .blog-card-content {
            padding: 25px;
        }

        .blog-card h2 {
            color: #2d5016;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .blog-card:hover h2 {
            color: #4a7c59;
        }

        .blog-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .read-more::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #4a7c59, #2d5016);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .read-more:hover::before {
            left: 0;
        }

        .read-more:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        .read-more::after {
            content: '→';
            transition: transform 0.3s ease;
        }

        .read-more:hover::after {
            transform: translateX(5px);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            text-align: center;
            padding: 40px 0;
            margin-top: 60px;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: -2px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #4a7c59, transparent);
        }

        .footer p {
            font-size: 1rem;
            opacity: 0.9;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .sidebar {
                position: static;
                margin-bottom: 20px;
            }
            
            .blog-container {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .main-content {
                padding: 40px 15px;
            }
            
            .blog-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .sidebar {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .blog-card-content {
                padding: 20px;
            }
        }

        /* Loading Animation */
        .loading {
            opacity: 0;
            animation: fadeIn 0.6s ease-out forwards;
        }

        .loading:nth-child(1) { animation-delay: 0.1s; }
        .loading:nth-child(2) { animation-delay: 0.2s; }
        .loading:nth-child(3) { animation-delay: 0.3s; }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title" data-translate="crop_solutions_title">Crop Solutions</h1>
            <p class="hero-subtitle" data-translate="crop_solutions_subtitle">Discover comprehensive pest management solutions for your crops. From onions to grapes, we've got you covered with expert guidance and proven strategies.</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h3 data-translate="quick_select">Quick Select</h3>
            <ul>
                <li><a href="Crops/Crop1.html" data-translate="onions_link">🧅 Onions</a></li>
                <li><a href="Crops/Crop2.html" data-translate="sugarcane_link">🌾 SugarCane</a></li>
                
            </ul>
        </aside>

        <!-- Blog Container -->
        <section class="blog-container">
            <article class="blog-card loading">
                <img src="Images/Onion.jpg" alt="Onion Crop Management">
                <div class="blog-card-content">
                    <h2 data-translate="onions_title">Onions</h2>
                    <p data-translate="onions_description">Onion (Allium cepa L.), also known as the bulb onion or common onion, is a vegetable that is the most widely cultivated species of the genus Allium. India is the second largest onion producer globally, and effective pest management is crucial for optimal yields.</p>
                    <a href="Crops/Crop1.html" class="read-more" data-translate="read_more">Read More</a>
                </div>
            </article>

            <article class="blog-card loading">
                <img src="Images/Sugarcane.png" alt="SugarCane Crop Management">
                <div class="blog-card-content">
                    <h2 data-translate="sugarcane_title">SugarCane</h2>
                    <p data-translate="sugarcane_description">Sugarcane (Saccharum officinarum L.) is the main source of sugar in India and holds a prominent position as a cash crop. India is the world's largest consumer and the second largest producer, making pest control strategies essential for sustainable production.</p>
                    <a href="Crops/Crop2.html" class="read-more" data-translate="read_more">Read More</a>
                </div>
            </article>

            
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p data-translate="copyright">&copy; 2024 Agro Pest. All rights reserved.</p>
    </footer>

    <script>
        // Extend the translation system with crops page content
        document.addEventListener('DOMContentLoaded', function() {
            // Add crops page translations to the existing system
            if (window.TranslationSystem) {
                window.TranslationSystem.addTranslationContent({
                    // Hero section
                    crop_solutions_title: "Crop Solutions",
                    crop_solutions_subtitle: "Discover comprehensive pest management solutions for your crops. From onions to grapes, we've got you covered with expert guidance and proven strategies.",
                    
                    // Sidebar
                    quick_select: "Quick Select",
                    onions_link: "🧅 Onions",
                    sugarcane_link: "🌾 SugarCane",
                    grapes_link: "🍇 Grapes",
                    
                    // Card titles
                    onions_title: "Onions",
                    sugarcane_title: "SugarCane",
                    grapes_title: "Grapes",
                    
                    // Card descriptions
                    onions_description: "Onion (Allium cepa L.), also known as the bulb onion or common onion, is a vegetable that is the most widely cultivated species of the genus Allium. India is the second largest onion producer globally, and effective pest management is crucial for optimal yields.",
                    sugarcane_description: "Sugarcane (Saccharum officinarum L.) is the main source of sugar in India and holds a prominent position as a cash crop. India is the world's largest consumer and the second largest producer, making pest control strategies essential for sustainable production.",
                    grapes_description: "Grape (Vitis sp.) belonging to Family Vitaceae is an important commercial fruit crop grown on a large variety of soil. It is a temperate crop which has adapted to sub-tropical climates, requiring specialized pest management approaches for different growing conditions.",
                    
                    // Common elements
                    read_more: "Read More",
                    copyright: "© 2024 Agro Pest. All rights reserved."
                });
                
                // Re-translate the page if a language other than English is selected
                const currentLang = window.TranslationSystem.getCurrentLanguage();
                if (currentLang !== 'en') {
                    window.TranslationSystem.translatePage(currentLang);
                }
            }
        });

        // Add smooth scrolling and entrance animations
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all blog cards
            document.querySelectorAll('.blog-card').forEach(card => {
                observer.observe(card);
            });

            // Add hover effects to sidebar links
            document.querySelectorAll('.sidebar ul li a').forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                link.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add click ripple effect to read more buttons
            document.querySelectorAll('.read-more').forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255,255,255,0.3);
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        left: ${x}px;
                        top: ${y}px;
                        width: ${size}px;
                        height: ${size}px;
                    `;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add parallax effect to hero section
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.hero-section');
                if (hero) {
                    const parallax = scrolled * 0.5;
                    hero.style.transform = `translateY(${parallax}px)`;
                }
            });
        });

        // CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>