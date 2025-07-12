<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - Agro Pest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.7;
            color: #333;
            background: linear-gradient(135deg, #f8fffe 0%, #e8f5f0 100%);
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="white" opacity="0.1"/><circle cx="80" cy="80" r="1" fill="white" opacity="0.1"/><circle cx="40" cy="60" r="1" fill="white" opacity="0.1"/><circle cx="60" cy="30" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .header .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Main Container */
        .container {
            max-width: 1000px;
            margin: -30px auto 0;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Content Card */
        .content-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 40px;
        }

        .content-wrapper {
            padding: 50px 40px;
        }

        /* Typography */
        .section-title {
            color: #2d5016;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
        }

        .section-title::after {
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

        .term-section {
            margin-bottom: 40px;
            padding: 30px;
            background: linear-gradient(135deg, #f8fffe 0%, #ffffff 100%);
            border-radius: 15px;
            border-left: 4px solid #4a7c59;
            transition: all 0.3s ease;
        }

        .term-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .term-section h3 {
            color: #2d5016;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .term-section h3::before {
            content: '';
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border-radius: 50%;
            margin-right: 12px;
        }

        .term-content {
            color: #555;
            line-height: 1.8;
        }

        .term-content p {
            margin-bottom: 15px;
        }

        .term-content strong {
            color: #2d5016;
            font-weight: 600;
        }

        /* Lists */
        .term-content ul {
            margin: 20px 0;
            padding-left: 0;
        }

        .term-content li {
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
            list-style: none;
        }

        .term-content li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4a7c59;
            font-weight: bold;
        }

        .term-content ul ul {
            margin-top: 10px;
            margin-left: 20px;
        }

        .term-content ul ul li::before {
            content: '→';
            color: #2d5016;
        }

        /* Contact Section */
        .contact-info {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-top: 20px;
        }

        .contact-info h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding: 8px 0;
        }

        .contact-detail::before {
            content: '📍';
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .contact-detail:nth-child(3)::before {
            content: '📞';
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            text-align: center;
            padding: 25px 0;
            margin-top: 40px;
        }

        .footer p {
            margin: 0;
            font-size: 0.95rem;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }

            .header .subtitle {
                font-size: 1rem;
            }

            .content-wrapper {
                padding: 30px 25px;
            }

            .section-title {
                font-size: 1.6rem;
            }

            .term-section {
                padding: 20px;
                margin-bottom: 25px;
            }

            .term-section h3 {
                font-size: 1.2rem;
            }

            .contact-info {
                padding: 20px;
            }

            .contact-detail {
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
            }

            .contact-detail::before {
                margin-bottom: 5px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .header {
                padding: 40px 0;
            }

            .header h1 {
                font-size: 1.8rem;
            }

            .content-wrapper {
                padding: 20px 15px;
            }

            .term-section {
                padding: 15px;
            }

            .section-title {
                font-size: 1.4rem;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Translation loading indicator */
        .translation-loading {
            position: relative;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .translation-loading::after {
            content: "🔄";
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 12px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Delayed animations for sections */
        .term-section:nth-child(1) { animation-delay: 0.1s; }
        .term-section:nth-child(2) { animation-delay: 0.2s; }
        .term-section:nth-child(3) { animation-delay: 0.3s; }
        .term-section:nth-child(4) { animation-delay: 0.4s; }
        .term-section:nth-child(5) { animation-delay: 0.5s; }
        .term-section:nth-child(6) { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <!-- Navigation Bar (Include your navbar.php here) -->
    <div class="top-nav">
        <a href="login.php" data-translate="admin_login">Admin Login</a>
    </div>

    <div class="main-nav">
        <div class="logo" data-translate="logo">Agro Pest</div>
        <button class="mobile-menu-toggle" id="mobileMenuToggle">
            <span>☰</span>
        </button>
        <div class="nav-links">
            <a href="index.php" data-translate="home">Home</a>
            <div class="dropdown">
                <a href="#" data-translate="crop_solutions">Crop Solutions</a>
                <div class="dropdown-content">
                    <a href="products.php" data-translate="products">Products</a>
                    <a href="crops.php" data-translate="crops">Crops</a>
                </div>
            </div>
            <a href="about.php" data-translate="about_us">About Us</a>
            <a href="contact.php" data-translate="contact">Contact</a>
        </div>
        
        <!-- Language Selector -->
        <div class="language-selector">
            <div class="language-dropdown">
                <button class="language-btn" id="languageBtn">
                    <span id="currentLanguage">English</span>
                    <span>▼</span>
                </button>
                <div class="language-options" id="languageOptions">
                    <button onclick="changeLanguage('en', 'English')" class="active">English</button>
                    <button onclick="changeLanguage('hi', 'हिंदी')">हिंदी</button>
                    <button onclick="changeLanguage('kn', 'ಕನ್ನಡ')">ಕನ್ನಡ</button>
                </div>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="header-content">
            <h1 data-translate="terms_of_service">Terms of Service</h1>
            <p class="subtitle" data-translate="last_updated">Last updated: January 23, 2025</p>
        </div>
    </header>

    <div class="container">
        <div class="content-card">
            <div class="content-wrapper">
                <h2 class="section-title" data-translate="service_agreement">Service Agreement</h2>
                
                <div class="term-section fade-in">
                    <h3 data-translate="introduction_title">1. Introduction</h3>
                    <div class="term-content">
                        <p data-translate="introduction_text">Welcome to the Agro Pest website, developed exclusively for Netravathi Agro Kendra. By accessing or using our platform, you agree to comply with and be bound by these Terms of Service. Please read them carefully before using the website. If you do not agree with any part of these terms, please do not use the platform.</p>
                    </div>
                </div>

                <div class="term-section fade-in">
                    <h3 data-translate="website_use_title">2. Use of the Website</h3>
                    <div class="term-content">
                        <p><strong data-translate="eligibility_label">Eligibility:</strong> <span data-translate="eligibility_text">You must be at least 18 years old to use this website.</span></p>
                        <p><strong data-translate="purpose_label">Purpose:</strong> <span data-translate="purpose_text">This website is intended to provide information about pesticides, pest management, and crop protection, tailored to the needs of farmers and agricultural stakeholders.</span></p>
                        <p><strong data-translate="user_responsibility_label">User Responsibility:</strong> <span data-translate="user_responsibility_text">You are responsible for ensuring that your use of the information on this website complies with applicable laws and regulations.</span></p>
                    </div>
                </div>

                <div class="term-section fade-in">
                    <h3 data-translate="intellectual_property_title">3. Intellectual Property</h3>
                    <div class="term-content">
                        <p data-translate="intellectual_property_text">All content on this website, including text, images, videos, and software, is the property of Netravathi Agro Kendra or its licensors. Unauthorized use, reproduction, or distribution of this content is prohibited.</p>
                    </div>
                </div>

                <div class="term-section fade-in">
                    <h3 data-translate="liability_limitation_title">4. Limitation of Liability</h3>
                    <div class="term-content">
                        <p data-translate="liability_intro_text">Agro Pest provides information on pesticides, pest control, and crop management to the best of its ability. However:</p>
                        <ul>
                            <li data-translate="liability_point_1">We do not guarantee complete accuracy or reliability of the information provided.</li>
                            <li data-translate="liability_point_2">Users must exercise caution and consult professional advice when implementing pest control measures.</li>
                            <li data-translate="liability_point_3">The website and its owners are not liable for any direct or indirect damages arising from the use of the platform.</li>
                        </ul>
                    </div>
                </div>

                <div class="term-section fade-in">
                    <h3 data-translate="governing_law_title">5. Governing Law</h3>
                    <div class="term-content">
                        <p data-translate="governing_law_text">These Terms of Service are governed by the laws of India. Any disputes arising under these terms shall be subject to the exclusive jurisdiction of the courts in Bagalkot, Karnataka.</p>
                    </div>
                </div>

                <div class="term-section fade-in">
                    <h3 data-translate="contact_information_title">6. Contact Information</h3>
                    <div class="term-content">
                        <p data-translate="contact_intro_text">If you have any questions or concerns regarding these Terms of Service, you may contact us at:</p>
                        <div class="contact-info">
                            <h4 data-translate="get_in_touch">Get in Touch</h4>
                            <div class="contact-detail">
                                <span data-translate="address_label">Address: Melligeri Towers, Main Road, Station Road, Bagalkot - 587101</span>
                            </div>
                            <div class="contact-detail">
                                <span data-translate="phone_label">Phone: 7760695701 / 7348848406</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p data-translate="footer_text">&copy; 2025 Agro-Pests Solutions. All rights reserved.</p>
    </footer>

    <script>
        // Enhanced Translation System for Terms of Service
        window.TranslationSystem = (function() {
            // All text content that needs translation
            const TRANSLATION_CONTENT = {
                // Navigation
                admin_login: "Admin Login",
                logo: "Agro Pest",
                home: "Home",
                crop_solutions: "Crop Solutions",
                products: "Products",
                crops: "Crops",
                about_us: "About Us",
                contact: "Contact",
                
                // Terms of Service Page Content
                terms_of_service: "Terms of Service",
                last_updated: "Last updated: January 23, 2025",
                service_agreement: "Service Agreement",
                
                // Section 1: Introduction
                introduction_title: "1. Introduction",
                introduction_text: "Welcome to the Agro Pest website, developed exclusively for Netravathi Agro Kendra. By accessing or using our platform, you agree to comply with and be bound by these Terms of Service. Please read them carefully before using the website. If you do not agree with any part of these terms, please do not use the platform.",
                
                // Section 2: Use of Website
                website_use_title: "2. Use of the Website",
                eligibility_label: "Eligibility:",
                eligibility_text: "You must be at least 18 years old to use this website.",
                purpose_label: "Purpose:",
                purpose_text: "This website is intended to provide information about pesticides, pest management, and crop protection, tailored to the needs of farmers and agricultural stakeholders.",
                user_responsibility_label: "User Responsibility:",
                user_responsibility_text: "You are responsible for ensuring that your use of the information on this website complies with applicable laws and regulations.",
                
                // Section 3: Intellectual Property
                intellectual_property_title: "3. Intellectual Property",
                intellectual_property_text: "All content on this website, including text, images, videos, and software, is the property of Netravathi Agro Kendra or its licensors. Unauthorized use, reproduction, or distribution of this content is prohibited.",
                
                // Section 4: Limitation of Liability
                liability_limitation_title: "4. Limitation of Liability",
                liability_intro_text: "Agro Pest provides information on pesticides, pest control, and crop management to the best of its ability. However:",
                liability_point_1: "We do not guarantee complete accuracy or reliability of the information provided.",
                liability_point_2: "Users must exercise caution and consult professional advice when implementing pest control measures.",
                liability_point_3: "The website and its owners are not liable for any direct or indirect damages arising from the use of the platform.",
                
                // Section 5: Governing Law
                governing_law_title: "5. Governing Law",
                governing_law_text: "These Terms of Service are governed by the laws of India. Any disputes arising under these terms shall be subject to the exclusive jurisdiction of the courts in Bagalkot, Karnataka.",
                
                // Section 6: Contact Information
                contact_information_title: "6. Contact Information",
                contact_intro_text: "If you have any questions or concerns regarding these Terms of Service, you may contact us at:",
                get_in_touch: "Get in Touch",
                address_label: "Address: Melligeri Towers, Main Road, Station Road, Bagalkot - 587101",
                phone_label: "Phone: 7760695701 / 7348848406",
                
                // Footer
                footer_text: "© 2025 Agro-Pests Solutions. All rights reserved."
            };

            // Cache for translations
            let translationCache = JSON.parse(localStorage.getItem('translationCache') || '{}');
            
            // Current language
            let currentLang = localStorage.getItem('selectedLanguage') || 'en';
            
            // Translation APIs
            const TRANSLATION_APIS = [
                {
                    name: 'MyMemory',
                    translate: async (text, sourceLang, targetLang) => {
                        const response = await fetch(`https://api.mymemory.translated.net/get?q=${encodeURIComponent(text)}&langpair=${sourceLang}|${targetLang}`);
                        const data = await response.json();
                        return data.responseData.translatedText;
                    }
                },
                {
                    name: 'Lingva',
                    translate: async (text, sourceLang, targetLang) => {
                        const response = await fetch(`https://lingva.ml/api/v1/${sourceLang}/${targetLang}/${encodeURIComponent(text)}`);
                        const data = await response.json();
                        return data.translation;
                    }
                }
            ];

            // Translate text using APIs
            async function translateText(text, sourceLang, targetLang) {
                const cacheKey = `${text}_${targetLang}`;
                
                // Check cache first
                if (translationCache[cacheKey]) {
                    return translationCache[cacheKey];
                }

                // Try APIs
                for (const api of TRANSLATION_APIS) {
                    try {
                        const result = await Promise.race([
                            api.translate(text, sourceLang, targetLang),
                            new Promise((_, reject) => setTimeout(() => reject(new Error('Timeout')), 5000))
                        ]);
                        
                        if (result && result.trim() && result !== text) {
                            translationCache[cacheKey] = result;
                            localStorage.setItem('translationCache', JSON.stringify(translationCache));
                            return result;
                        }
                    } catch (error) {
                        console.warn(`${api.name} failed:`, error.message);
                        continue;
                    }
                }
                
                return text; // Fallback to original
            }

            // Translate entire page
            async function translatePage(targetLang) {
                if (targetLang === 'en') {
                    // Restore English
                    document.querySelectorAll('[data-translate]').forEach(element => {
                        const key = element.getAttribute('data-translate');
                        if (TRANSLATION_CONTENT[key]) {
                            element.textContent = TRANSLATION_CONTENT[key];
                        }
                    });
                    return;
                }

                const elements = document.querySelectorAll('[data-translate]');
                
                // Show loading for all elements
                elements.forEach(element => {
                    element.classList.add('translation-loading');
                });

                // Translate each element
                const translatePromises = Array.from(elements).map(async (element) => {
                    const key = element.getAttribute('data-translate');
                    const originalText = TRANSLATION_CONTENT[key];
                    
                    if (!originalText) {
                        element.classList.remove('translation-loading');
                        return;
                    }
                    
                    try {
                        const translatedText = await translateText(originalText, 'en', targetLang);
                        element.textContent = translatedText;
                    } catch (error) {
                        console.error(`Translation failed for ${key}:`, error);
                        element.textContent = originalText;
                    } finally {
                        element.classList.remove('translation-loading');
                    }
                });

                // Wait for all translations to complete
                await Promise.all(translatePromises);
            }

            // Change language function
            async function changeLanguage(langCode, langName) {
                if (langCode === currentLang) return;
                
                // Update UI
                document.getElementById('currentLanguage').textContent = langName;
                document.getElementById('languageOptions').classList.remove('show');
                updateActiveLanguage(langCode);
                
                try {
                    // Translate page
                    await translatePage(langCode);
                    
                    // Save language preference
                    localStorage.setItem('selectedLanguage', langCode);
                    currentLang = langCode;
                    
                    // Trigger custom event for other scripts
                    window.dispatchEvent(new CustomEvent('languageChanged', { 
                        detail: { language: langCode, languageName: langName } 
                    }));
                    
                } catch (error) {
                    console.error('Translation failed:', error);
                    alert('Translation failed. Please try again.');
                }
            }

            // Update active language button
            function updateActiveLanguage(langCode) {
                document.querySelectorAll('.language-options button').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                const buttons = document.querySelectorAll('.language-options button');
                const langIndex = { en: 0, hi: 1, kn: 2 };
                if (buttons[langIndex[langCode]]) {
                    buttons[langIndex[langCode]].classList.add('active');
                }
            }

            // Initialize translation system
            function init() {
                // Set initial language
                if (currentLang !== 'en') {
                    const langNames = { en: 'English', hi: 'हिंदी', kn: 'ಕನ್ನಡ' };
                    document.getElementById('currentLanguage').textContent = langNames[currentLang];
                    updateActiveLanguage(currentLang);
                    translatePage(currentLang);
                }
                
                // Setup event listeners
                document.getElementById('languageBtn').addEventListener('click', function(e) {
                    e.stopPropagation();
                    document.getElementById('languageOptions').classList.toggle('show');
                });
                
                document.addEventListener('click', function() {
                    document.getElementById('languageOptions').classList.remove('show');
                });
            }

            // Public API
            return {
                init: init,
                changeLanguage: changeLanguage,
                translatePage: translatePage,
                getCurrentLanguage: () => currentLang,
                addTranslationContent: (newContent) => {
                    Object.assign(TRANSLATION_CONTENT, newContent);
                }
            };
        })();

        // Global function for onclick handlers
        function changeLanguage(langCode, langName) {
            window.TranslationSystem.changeLanguage(langCode, langName);
        }

        // Initialize when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            window.TranslationSystem.init();
        });

        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const navLinks = document.querySelector('.main-nav .nav-links');
            
            if (mobileMenuToggle && navLinks) {
                mobileMenuToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    navLinks.classList.toggle('active');
                });
                
                // Close mobile menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!e.target.closest('.main-nav')) {
                        navLinks.classList.remove('active');
                    }
                });
                
                // Close mobile menu when clicking on a link
                navLinks.addEventListener('click', function(e) {
                    if (e.target.tagName === 'A' && !e.target.closest('.dropdown')) {
                        navLinks.classList.remove('active');
                    }
                });
            }
        });

        // Add smooth animations on scroll
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

        // Observe all fade-in elements
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });

        // Add loading state
        window.addEventListener('load', () => {
            document.body.style.opacity = '1';
        });

        // Smooth scroll for any internal links
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