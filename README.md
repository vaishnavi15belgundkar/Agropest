# Agropest

Agropest is a web platform providing professional crop protection solutions, product information, and resources for farmers and agricultural professionals. The platform features an admin dashboard, product management, crop-specific guides, contact forms, and legal/policy pages.

---

## Table of Contents
- [Features](#features)
- [Project Structure](#project-structure)
- [Setup & Configuration](#setup--configuration)
- [Database Structure](#database-structure)
- [Key Pages & Functionality](#key-pages--functionality)
- [Legal & Policy](#legal--policy)
- [Contact & Support](#contact--support)
- [Credits](#credits)

---

## Features
- **Admin Dashboard**: Manage products, view user contacts, and oversee platform content.
- **Product Catalog**: Browse crop protection products with details and images.
- **Crop Guides**: Detailed HTML guides for specific crops (e.g., Onion, Tomato).
- **Contact Form**: Users can send inquiries directly to the admin.
- **FAQ**: Frequently asked questions for user support.
- **Legal Pages**: Terms of Service and Privacy Policy.

---

## Project Structure
```
├── Admin/           # Admin dashboard and management scripts
├── Login/           # Admin login and password reset
├── Crops/           # Static HTML guides for crops
├── Images/          # Image assets
├── about.php        # About the platform
├── contact.php      # Contact form and info
├── crops.php        # Crop overview page
├── faq.php          # Frequently asked questions
├── footer.php       # Footer component
├── index.php        # Main landing page
├── navbar.php       # Navigation bar
├── privacy.php      # Privacy policy
├── products.php     # Product catalog
├── process.php      # Handles contact form submissions
├── terms.php        # Terms of service
├── user_db.sql      # MySQL database structure and sample data
├── config.php       # Database configuration
└── README.md        # Project documentation
```

---

## Setup & Configuration
1. **Clone or Download** the repository to your web server directory (e.g., XAMPP's `htdocs`).
2. **Database Setup**:
   - Import `user_db.sql` into your MySQL server to create required tables and sample data.
   - Default database credentials (see `config.php`):
     - Host: `localhost`
     - User: `root`
     - Password: *(empty)*
     - Database: `user_db`
3. **Admin Login**:
   - Username: `Admin`
   - Password: `Admin@123`
4. **Start your local server** and access the platform via your browser (e.g., `http://localhost/Agropest`).

---

## Database Structure
- **admin**: Stores admin credentials.
- **contact**: Stores contact form submissions.
- **products**: Stores product details and images.
- **user_cookies**: (Reserved for user session/cookie data).

See `user_db.sql` for full schema and sample data.

---

## Key Pages & Functionality
- **Landing Page (`index.php`)**: Modern, responsive homepage introducing Agropest.
- **Admin Dashboard (`Admin/Admin_dashboard.php`)**: Manage products, view contacts, and access admin features.
- **Product Catalog (`products.php`)**: Browse and search crop protection products.
- **Crop Guides (`crops.php`, `Crops/`)**: Access detailed guides for specific crops (e.g., Onion, Tomato).
- **Contact (`contact.php`)**: Submit inquiries via a form; data is stored in the database.
- **FAQ (`faq.php`)**: Answers to common user questions.
- **About (`about.php`)**: Information about Agropest and its mission.
- **Legal Pages**:
  - **Terms of Service (`terms.php`)**
  - **Privacy Policy (`privacy.php`)**

---

## Legal & Policy
- **Terms of Service**: See `terms.php` for user agreement and platform rules.
- **Privacy Policy**: See `privacy.php` for details on data collection, cookies, and user privacy.

---

## Contact & Support
- **Contact Form**: Use the form on `contact.php` to reach the Agropest team.
- **Email**: info@agropest.com
- **Phone**: 7760695701 / 7348848406
- **Address**: Melligeri Towers, Main Road, Station Road, Bagalkot - 587101

---

## Credits
- © 2024 Agro Pest. All Rights Reserved.
- Empowering Farmers, Nurturing Growth
- Developed for agricultural professionals and farmers seeking reliable crop protection solutions.