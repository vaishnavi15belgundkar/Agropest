<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="privacy_policy_title">Privacy Policy - Agro-Pests Solutions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Top navigation bar */
        .top-nav {
            background-color: darkgreen;
            color: white;
            padding: 10px;
            text-align: right;
        }

        .top-nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .top-nav a:hover {
            background-color: rgb(1, 65, 1);
            padding: 10px;
            text-decoration: none;
        }

        /* Main navigation bar */
        .main-nav {
            background-color: rgb(231, 231, 231);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .main-nav .logo {
            font-size: 24px;
            font-weight: bold;
            color: darkgreen;
        }

        .main-nav .nav-links {
            display: flex;
            gap: 20px;
            position: relative;
            align-items: center;
        }

        .main-nav .nav-links a {
            text-decoration: none;
            color: darkgreen;
            font-weight: bold;
            padding: 8px 12px;
            transition: all 0.3s ease;
        }

        .main-nav .nav-links a:hover {
            background-color: darkgreen;
            color: white;
            border-radius: 5px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: darkgreen;
            color: white;
            padding: 20px 10%;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 10%;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #1e774d;
            font-size: 1.75rem;
            margin-top: 20px;
        }

        p {
            margin: 10px 0;
        }

        ul {
            margin: 10px 0 20px 20px;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }

        footer {
            background-color: #1e774d;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }

        a {
            color: #1e774d;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
     
    <header>
        <h1 data-translate="privacy_policy">Privacy Policy</h1>
        <p data-translate="last_updated">Last updated: January 23, 2025</p>
    </header>

    <div class="container">
        <h2 data-translate="introduction">Introduction</h2>
        <p data-translate="introduction_text">This Privacy Policy outlines how Agro-Pests Solutions collects, uses, and safeguards your data when you access or interact with our website. We respect your privacy and are committed to protecting your personal information.</p>

        <h2 data-translate="information_we_collect">Information We Collect</h2>
        <p data-translate="information_collect_text">Agro-Pests Solutions does not require customer login, and we collect minimal data to ensure a smooth browsing experience. The types of information we may collect include:</p>
        <ul>
            <li data-translate="browser_info">Browser type and device information</li>
            <li data-translate="ip_address">IP address for analytics and improving user experience</li>
            <li data-translate="cookies_info">Cookies for website functionality</li>
        </ul>

        <h2 data-translate="how_we_use_info">How We Use Your Information</h2>
        <p data-translate="how_use_text">The data we collect is used for the following purposes:</p>
        <ul>
            <li data-translate="improve_performance">To improve website performance and usability</li>
            <li data-translate="understand_traffic">To understand website traffic and user preferences</li>
            <li data-translate="ensure_security">To ensure the security and functionality of the platform</li>
        </ul>

        <h2 data-translate="cookies_tracking">Cookies and Tracking Technologies</h2>
        <p data-translate="cookies_text">We use cookies to enhance your browsing experience. These cookies help us analyze website traffic and provide insights into how users interact with our platform. You can control cookies through your browser settings.</p>

        <h2 data-translate="data_sharing_security">Data Sharing and Security</h2>
        <p data-translate="data_sharing_text">We do not sell, rent, or share your personal information with third parties unless required by law. We take reasonable measures to ensure the security of your data. However, no system is entirely secure, and we cannot guarantee absolute data protection.</p>

        <h2 data-translate="third_party_links">Third-Party Links</h2>
        <p data-translate="third_party_text">Our website may contain links to third-party websites for additional information. Please note that we are not responsible for the privacy practices of these external sites.</p>

        <h2 data-translate="changes_privacy_policy">Changes to This Privacy Policy</h2>
        <p data-translate="changes_text">We may update this Privacy Policy from time to time. Any changes will be posted on this page with the updated date. We encourage you to review this Privacy Policy periodically to stay informed about how we are protecting your information.</p>

        <h2 data-translate="contact_us">Contact Us</h2>
        <p data-translate="contact_text">If you have any questions or concerns about this Privacy Policy, please contact us:</p>
        <p><strong data-translate="email">Email:</strong> <span data-translate="contact_email">info@agropest.com</span></p>
        <p><strong data-translate="phone">Phone:</strong> <span data-translate="contact_phone">7760695701 / 7348848406</span></p>
        <p><strong data-translate="address">Address:</strong> <span data-translate="contact_address">Melligeri Towers, Main Road, Station Road, Bagalkot - 587101</span></p>
    </div>

    <footer>
        <p data-translate="copyright">&copy; 2025 Agro-Pests Solutions. All rights reserved.</p>
    </footer>

    <script>
        // Add privacy policy specific translations when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Add the privacy policy translations to the global translation system
            if (window.TranslationSystem) {
                window.TranslationSystem.addTranslationContent({
                    // Privacy Policy specific translations
                    privacy_policy_title: "Privacy Policy - Agro-Pests Solutions",
                    privacy_policy: "Privacy Policy",
                    last_updated: "Last updated: January 23, 2025",
                    
                    // Introduction section
                    introduction: "Introduction",
                    introduction_text: "This Privacy Policy outlines how Agro-Pests Solutions collects, uses, and safeguards your data when you access or interact with our website. We respect your privacy and are committed to protecting your personal information.",
                    
                    // Information We Collect section
                    information_we_collect: "Information We Collect",
                    information_collect_text: "Agro-Pests Solutions does not require customer login, and we collect minimal data to ensure a smooth browsing experience. The types of information we may collect include:",
                    browser_info: "Browser type and device information",
                    ip_address: "IP address for analytics and improving user experience",
                    cookies_info: "Cookies for website functionality",
                    
                    // How We Use Your Information section
                    how_we_use_info: "How We Use Your Information",
                    how_use_text: "The data we collect is used for the following purposes:",
                    improve_performance: "To improve website performance and usability",
                    understand_traffic: "To understand website traffic and user preferences",
                    ensure_security: "To ensure the security and functionality of the platform",
                    
                    // Cookies section
                    cookies_tracking: "Cookies and Tracking Technologies",
                    cookies_text: "We use cookies to enhance your browsing experience. These cookies help us analyze website traffic and provide insights into how users interact with our platform. You can control cookies through your browser settings.",
                    
                    // Data Sharing section
                    data_sharing_security: "Data Sharing and Security",
                    data_sharing_text: "We do not sell, rent, or share your personal information with third parties unless required by law. We take reasonable measures to ensure the security of your data. However, no system is entirely secure, and we cannot guarantee absolute data protection.",
                    
                    // Third-Party Links section
                    third_party_links: "Third-Party Links",
                    third_party_text: "Our website may contain links to third-party websites for additional information. Please note that we are not responsible for the privacy practices of these external sites.",
                    
                    // Changes to Privacy Policy section
                    changes_privacy_policy: "Changes to This Privacy Policy",
                    changes_text: "We may update this Privacy Policy from time to time. Any changes will be posted on this page with the updated date. We encourage you to review this Privacy Policy periodically to stay informed about how we are protecting your information.",
                    
                    // Contact Us section
                    contact_us: "Contact Us",
                    contact_text: "If you have any questions or concerns about this Privacy Policy, please contact us:",
                    email: "Email:",
                    contact_email: "[Insert Contact Email Here]",
                    phone: "Phone:",
                    contact_phone: "7760695701 / 7348848406",
                    address: "Address:",
                    contact_address: "Melligeri Towers, Main Road, Station Road, Bagalkot - 587101",
                    
                    // Footer
                    copyright: "© 2025 Agro-Pests Solutions. All rights reserved."
                });
                
                // If a language other than English is already selected, translate the page
                const currentLang = window.TranslationSystem.getCurrentLanguage();
                if (currentLang !== 'en') {
                    window.TranslationSystem.translatePage(currentLang);
                }
            }
        });
    </script>
</body>
</html>