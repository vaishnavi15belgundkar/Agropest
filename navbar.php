<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Pest Navigation</title>
    <style>
        /* Navigation Bar Styles */
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

        .main-nav .nav-links a:hover {
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

        /* Language Selector Styles */
        .language-selector {
            position: relative;
            z-index: 1000;
        }

        .language-dropdown {
            position: relative;
        }

        .language-btn {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .language-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        .language-btn::before {
            content: "🌐";
            font-size: 16px;
        }

        .language-options {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            border-radius: 15px;
            z-index: 100;
            overflow: hidden;
            min-width: 150px;
            margin-top: 5px;
        }

        .language-options.show {
            display: block;
        }

        .language-options button {
            background: none;
            border: none;
            color: #2d5016;
            padding: 12px 20px;
            width: 100%;
            text-align: left;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .language-options button:hover {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
        }

        .language-options button.active {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
        }

        /* Loading indicator */
        .loading {
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .translation-loading {
            position: relative;
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

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #2d5016;
            font-size: 24px;
            cursor: pointer;
            padding: 8px;
        }

        .mobile-menu-toggle:hover {
            color: #4a7c59;
        }

        /* Enhanced Responsive Design */
        @media (max-width: 768px) {
            .top-nav {
                padding: 8px 15px;
                text-align: center;
            }
            
            .top-nav a {
                margin: 0 10px;
                padding: 6px 12px;
                font-size: 14px;
            }
            
            .main-nav {
                padding: 10px 20px;
                position: relative;
            }
            
            .main-nav .logo {
                font-size: 24px;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .main-nav .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: white;
                box-shadow: 0 4px 20px rgba(0,0,0,0.1);
                flex-direction: column;
                gap: 0;
                padding: 20px;
                z-index: 1000;
            }
            
            .main-nav .nav-links.active {
                display: flex;
            }
            
            .main-nav .nav-links a {
                padding: 15px 20px;
                font-size: 16px;
                border-radius: 8px;
                width: 100%;
                text-align: center;
                margin: 5px 0;
            }
            
            .main-nav .dropdown-content {
                position: static;
                display: block;
                box-shadow: none;
                background-color: #f8f9fa;
                margin-top: 10px;
                border-radius: 8px;
            }
            
            .main-nav .dropdown:hover .dropdown-content {
                display: block;
            }
            
            .language-selector {
                position: absolute;
                top: 15px;
                right: 60px;
            }
            
            .language-btn {
                padding: 8px 15px;
                font-size: 12px;
            }
            
            .language-options {
                right: 0;
                min-width: 120px;
            }
        }

        @media (max-width: 600px) {
            .top-nav {
                padding: 8px 10px;
                font-size: 14px;
            }
            
            .top-nav a {
                margin: 0 5px;
                padding: 5px 10px;
                font-size: 12px;
            }
            
            .main-nav {
                padding: 10px 15px;
            }
            
            .main-nav .logo {
                font-size: 20px;
            }
            
            .main-nav .nav-links {
                padding: 15px;
            }
            
            .main-nav .nav-links a {
                padding: 12px 15px;
                font-size: 14px;
            }
            
            .language-selector {
                right: 50px;
            }
            
            .language-btn {
                padding: 6px 12px;
                font-size: 11px;
            }
            
            .language-btn::before {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .main-nav .logo {
                font-size: 18px;
            }
            
            .language-selector {
                right: 45px;
            }
            
            .language-btn {
                padding: 5px 10px;
                font-size: 10px;
            }
            
            .language-options {
                min-width: 100px;
            }
            
            .language-options button {
                padding: 10px 15px;
                font-size: 12px;
            }
        }

        @media (max-width: 768px) {
            .main-nav .dropdown > a {
                display: none;
            }
            
            .main-nav .dropdown-content {
                position: static;
                display: block;
                box-shadow: none;
                background-color: transparent;
                margin-top: 0;
                border-radius: 8px;
            }
        }
    </style>
</head>
<body>
    <!-- Top navigation bar -->
    <div class="top-nav">
        <a href="Login/login.php" data-translate="admin_login">Admin Login</a>
    </div>

    <!-- Main navigation bar -->
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

    <script>
        // Global Translation System
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
                
                // About Page Content
                pioneering_agricultural_excellence: "Pioneering Agricultural Excellence",
                leading_farming_subtitle: "Leading the way in sustainable farming solutions and pest management innovation for over a decade",
                years_experience: "Years of Experience",
                happy_farmers: "Happy Farmers",
                premium_products: "Premium Products",
                our_foundation: "Our Foundation",
                our_mission: "Our Mission",
                mission_text: "To provide high-quality agricultural products and services that support sustainable farming practices, ensuring food security while protecting the environment for future generations.",
                our_vision: "Our Vision",
                vision_text: "To become the leading agricultural solutions provider, creating food-secure societies and pest-free agricultural premises through innovative, sustainable, and environmentally-friendly solutions.",
                our_purpose: "Our Purpose",
                purpose_text: "To revolutionize crop protection through cutting-edge technology and sustainable practices, ensuring farmers can achieve maximum productivity while maintaining ecological balance.",
                our_story: "Our Story",
                journey_innovation: "A Journey of Innovation",
                story_text_1: "Founded with a vision to transform agriculture, Agro Pest has grown from a small local distributor to a trusted partner for thousands of farmers across the region. Our commitment to quality, innovation, and sustainable practices has made us a leader in agricultural solutions.",
                story_text_2: "We believe that modern farming requires modern solutions. That's why we continuously invest in research and development, partnerships with leading manufacturers, and training programs for farmers to ensure they have access to the latest agricultural technologies.",
                company_founded: "Company Founded",
                started_small_store: "Started as a small agricultural supply store",
                digital_transformation: "Digital Transformation",
                launched_online_platform: "Launched online platform and digital services",
                sustainable_focus: "Sustainable Focus",
                committed_eco_friendly: "Committed to eco-friendly solutions and practices",
                innovation_leader: "Innovation Leader",
                recognized_industry_leader: "Recognized as industry leader in agricultural innovation",
                our_core_values: "Our Core Values",
                innovation: "Innovation",
                innovation_text: "Continuously developing cutting-edge solutions to meet evolving agricultural challenges.",
                integrity: "Integrity",
                integrity_text: "Operating with honesty, transparency, and ethical practices in all our business dealings.",
                sustainability: "Sustainability",
                sustainability_text: "Promoting environmentally responsible farming practices for a healthier planet.",
                excellence: "Excellence",
                excellence_text: "Delivering superior quality products and services that exceed customer expectations.",
                customer_focus: "Customer Focus",
                customer_focus_text: "Putting farmers first and understanding their unique needs and challenges.",
                empowerment: "Empowerment",
                empowerment_text: "Providing farmers with knowledge, tools, and resources to achieve success.",
                ready_transform_farm: "Ready to Transform Your Farm?",
                join_thousands_farmers: "Join thousands of farmers who trust Agro Pest for their agricultural needs",
                get_started_today: "Get Started Today"
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
                const progressElements = [];
                
                // Show loading for all elements
                elements.forEach(element => {
                    element.classList.add('translation-loading');
                    progressElements.push(element);
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
    </script>
</body>
</html>