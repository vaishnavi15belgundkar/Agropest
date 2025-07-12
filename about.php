<?php include 'navbar.php'; ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Agro Pest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fafafa;
        }

        /* Smooth scrolling with performance optimization */
        html {
            scroll-behavior: smooth;
        }

        /* Optimized animation keyframes with transform3d for GPU acceleration */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 30px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translate3d(-30px, 0, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translate3d(30px, 0, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
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

        /* Optimized animation classes with GPU acceleration */
        .animate-element {
            opacity: 0;
            transform: translate3d(0, 30px, 0);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
            will-change: opacity, transform;
        }

        .animate-element.fade-in-left {
            transform: translate3d(-30px, 0, 0);
        }

        .animate-element.fade-in-right {
            transform: translate3d(30px, 0, 0);
        }

        .animate-element.animate-in {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        /* Performance optimized grid layouts */
        .optimized-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
            contain: layout style;
        }

        .optimized-grid-small {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
            contain: layout style;
        }

        .optimized-grid-team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 60px;
            contain: layout style;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c59 100%);
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            transform: translateZ(0); /* Force GPU layer */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="0,0 1000,100 1000,0"/></svg>');
            background-size: 100% 100%;
            will-change: transform;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 60px;
            margin-top: 50px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .stat-item p {
            font-size: 1rem;
            opacity: 0.8;
        }

        /* Section Styles */
        .section {
            padding: 100px 0;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .section h2 {
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 60px;
            color: #2d5016;
            position: relative;
        }

        .section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border-radius: 2px;
        }

        /* Optimized card styles */
        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            transform: translateZ(0); /* Force GPU layer */
            will-change: transform;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
        }

        .card:hover {
            transform: translateY(-10px) translateZ(0);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .card .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .card h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #2d5016;
        }

        .card p {
            color: #666;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        /* Story Section */
        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            contain: layout style;
        }

        .story-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
        }

        .story-text h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #2d5016;
        }

        .story-timeline {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .timeline-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            border-left: 5px solid #4a7c59;
        }

        .timeline-year {
            font-size: 1.5rem;
            font-weight: 800;
            color: #2d5016;
            margin-right: 20px;
            min-width: 80px;
        }

        .timeline-content h4 {
            font-weight: 700;
            margin-bottom: 5px;
            color: #2d5016;
        }

        .timeline-content p {
            color: #666;
            margin: 0;
        }

        /* Value cards */
        .value-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 5px solid #4a7c59;
            transform: translateZ(0);
            will-change: transform;
        }

        .value-card:hover {
            transform: translateY(-5px) translateZ(0);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .value-card .icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .value-card h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #2d5016;
        }

        .value-card p {
            color: #666;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-top: 100px;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: white;
            color: #2d5016;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 700;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 30px;
            }
            
            .story-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .section h2 {
                font-size: 2.2rem;
            }

            .optimized-grid {
                grid-template-columns: 1fr;
            }

            .optimized-grid-small {
                grid-template-columns: 1fr;
            }

            .optimized-grid-team {
                grid-template-columns: 1fr;
            }
        }

        /* Performance improvements */
        .gpu-accelerated {
            transform: translateZ(0);
            will-change: transform;
        }

        /* Reduce motion for users who prefer it */
        @media (prefers-reduced-motion: reduce) {
            .animate-element {
                transition: none;
            }
            
            html {
                scroll-behavior: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="animate-element" data-translate="pioneering_agricultural_excellence">Pioneering Agricultural Excellence</h1>
            <p class="animate-element" data-delay="100" data-translate="leading_farming_subtitle">Leading the way in sustainable farming solutions and pest management innovation for over a decade</p>
            <div class="hero-stats">
                <div class="stat-item animate-element" data-delay="200">
                    <h3>10+</h3>
                    <p data-translate="years_experience">Years of Experience</p>
                </div>
                <div class="stat-item animate-element" data-delay="300">
                    <h3>5000+</h3>
                    <p data-translate="happy_farmers">Happy Farmers</p>
                </div>
                <div class="stat-item animate-element" data-delay="400">
                    <h3>50+</h3>
                    <p data-translate="premium_products">Premium Products</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Values -->
    <section class="section">
        <h2 class="animate-element" data-translate="our_foundation">Our Foundation</h2>
        <div class="optimized-grid">
            <div class="card animate-element" data-delay="100">
                <div class="icon">🎯</div>
                <h3 data-translate="our_mission">Our Mission</h3>
                <p data-translate="mission_text">To provide high-quality agricultural products and services that support sustainable farming practices, ensuring food security while protecting the environment for future generations.</p>
            </div>
            <div class="card animate-element" data-delay="200">
                <div class="icon">👁️</div>
                <h3 data-translate="our_vision">Our Vision</h3>
                <p data-translate="vision_text">To become the leading agricultural solutions provider, creating food-secure societies and pest-free agricultural premises through innovative, sustainable, and environmentally-friendly solutions.</p>
            </div>
            <div class="card animate-element" data-delay="300">
                <div class="icon">💎</div>
                <h3 data-translate="our_purpose">Our Purpose</h3>
                <p data-translate="purpose_text">To revolutionize crop protection through cutting-edge technology and sustainable practices, ensuring farmers can achieve maximum productivity while maintaining ecological balance.</p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="section">
        <h2 class="animate-element" data-translate="our_story">Our Story</h2>
        <div class="story-content">
            <div class="story-text animate-element fade-in-left">
                <h3 data-translate="journey_innovation">A Journey of Innovation</h3>
                <p data-translate="story_text_1">Founded with a vision to transform agriculture, Agro Pest has grown from a small local distributor to a trusted partner for thousands of farmers across the region. Our commitment to quality, innovation, and sustainable practices has made us a leader in agricultural solutions.</p>
                <p data-translate="story_text_2">We believe that modern farming requires modern solutions. That's why we continuously invest in research and development, partnerships with leading manufacturers, and training programs for farmers to ensure they have access to the latest agricultural technologies.</p>
            </div>
            <div class="story-timeline animate-element fade-in-right">
                <div class="timeline-item">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-content">
                        <h4 data-translate="company_founded">Company Founded</h4>
                        <p data-translate="started_small_store">Started as a small agricultural supply store</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-content">
                        <h4 data-translate="digital_transformation">Digital Transformation</h4>
                        <p data-translate="launched_online_platform">Launched online platform and digital services</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h4 data-translate="sustainable_focus">Sustainable Focus</h4>
                        <p data-translate="committed_eco_friendly">Committed to eco-friendly solutions and practices</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-content">
                        <h4 data-translate="innovation_leader">Innovation Leader</h4>
                        <p data-translate="recognized_industry_leader">Recognized as industry leader in agricultural innovation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section">
        <h2 class="animate-element" data-translate="our_core_values">Our Core Values</h2>
        <div class="optimized-grid-small">
            <div class="value-card animate-element" data-delay="100">
                <div class="icon">🔄</div>
                <h4 data-translate="innovation">Innovation</h4>
                <p data-translate="innovation_text">Continuously developing cutting-edge solutions to meet evolving agricultural challenges.</p>
            </div>
            <div class="value-card animate-element" data-delay="200">
                <div class="icon">🤝</div>
                <h4 data-translate="integrity">Integrity</h4>
                <p data-translate="integrity_text">Operating with honesty, transparency, and ethical practices in all our business dealings.</p>
            </div>
            <div class="value-card animate-element" data-delay="300">
                <div class="icon">🌱</div>
                <h4 data-translate="sustainability">Sustainability</h4>
                <p data-translate="sustainability_text">Promoting environmentally responsible farming practices for a healthier planet.</p>
            </div>
            <div class="value-card animate-element" data-delay="400">
                <div class="icon">⭐</div>
                <h4 data-translate="excellence">Excellence</h4>
                <p data-translate="excellence_text">Delivering superior quality products and services that exceed customer expectations.</p>
            </div>
            <div class="value-card animate-element" data-delay="500">
                <div class="icon">❤️</div>
                <h4 data-translate="customer_focus">Customer Focus</h4>
                <p data-translate="customer_focus_text">Putting farmers first and understanding their unique needs and challenges.</p>
            </div>
            <div class="value-card animate-element" data-delay="600">
                <div class="icon">🌟</div>
                <h4 data-translate="empowerment">Empowerment</h4>
                <p data-translate="empowerment_text">Providing farmers with knowledge, tools, and resources to achieve success.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="section">
            <h2 class="animate-element" data-translate="ready_transform_farm">Ready to Transform Your Farm?</h2>
            <p class="animate-element" data-delay="100" data-translate="join_thousands_farmers">Join thousands of farmers who trust Agro Pest for their agricultural needs</p>
            <a href="contact.php" class="cta-button animate-element" data-delay="200" data-translate="get_started_today">Get Started Today</a>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        // Optimized Intersection Observer with performance improvements
        class AnimationController {
            constructor() {
                this.animatedElements = new Set();
                this.init();
            }

            init() {
                // Throttle the observer callback for better performance
                this.throttledCallback = this.throttle(this.handleIntersection.bind(this), 16);
                
                // Enhanced observer options
                this.observerOptions = {
                    threshold: 0.1,
                    rootMargin: '50px 0px -50px 0px' // Start animation slightly before element is visible
                };

                this.observer = new IntersectionObserver(this.throttledCallback, this.observerOptions);
                this.setupElements();
            }

            setupElements() {
                // Use requestAnimationFrame for DOM operations
                requestAnimationFrame(() => {
                    const elements = document.querySelectorAll('.animate-element');
                    elements.forEach((element, index) => {
                        // Add unique identifier
                        element.setAttribute('data-animation-id', index);
                        
                        // Set up initial state
                        this.setInitialState(element);
                        
                        // Start observing
                        this.observer.observe(element);
                    });
                });
            }

            setInitialState(element) {
                // Force GPU acceleration
                element.style.transform = 'translateZ(0)';
                element.style.willChange = 'opacity, transform';
            }

            handleIntersection(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        const animationId = element.getAttribute('data-animation-id');
                        
                        // Prevent duplicate animations
                        if (!this.animatedElements.has(animationId)) {
                            this.animateElement(element);
                            this.animatedElements.add(animationId);
                            
                            // Stop observing once animated
                            this.observer.unobserve(element);
                        }
                    }
                });
            }

            animateElement(element) {
                const delay = parseInt(element.getAttribute('data-delay')) || 0;
                
                // Use requestAnimationFrame for smooth animation timing
                requestAnimationFrame(() => {
                    setTimeout(() => {
                        element.classList.add('animate-in');
                        
                        // Clean up will-change after animation
                        setTimeout(() => {
                            element.style.willChange = 'auto';
                        }, 800);
                    }, delay);
                });
            }

            // Throttle function for performance optimization
            throttle(func, limit) {
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
            }
        }

        // Initialize when DOM is ready
        document.addEventListener('DOMContentLoaded', () => {
            // Check for reduced motion preference
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            
            if (!prefersReducedMotion) {
                new AnimationController();
            } else {
                // Immediately show all elements if user prefers reduced motion
                document.querySelectorAll('.animate-element').forEach(element => {
                    element.classList.add('animate-in');
                });
            }
        });

        // Optimize scroll performance
        let ticking = false;
        
        function updateScrollRelatedElements() {
            // Any scroll-related updates go here
            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateScrollRelatedElements);
                ticking = true;
            }
        }, { passive: true });

        // Cleanup on page unload
        window.addEventListener('beforeunload', () => {
            if (window.animationController && window.animationController.observer) {
                window.animationController.observer.disconnect();
            }
        });
    </script>
</body>
</html>