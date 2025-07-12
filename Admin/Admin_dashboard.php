<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Agropest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #e4e4e7;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            height: 100vh;
            width: 260px;
            background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%);
            color: white;
            position: fixed;
            display: flex;
            flex-direction: column;
            padding-top: 0;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
            border-right: 1px solid #334155;
        }

        .sidebar h1 {
            text-align: center;
            margin: 0;
            font-size: 22px;
            font-weight: 700;
            padding: 25px 0;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            border-bottom: 2px solid #334155;
            letter-spacing: 1px;
        }

        .sidebar a {
            text-decoration: none;
            color: #cbd5e1;
            padding: 16px 24px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            margin: 4px 0;
            font-weight: 500;
        }

        .sidebar a:hover {
            background: linear-gradient(90deg, #1e40af, #7c3aed);
            color: white;
            border-left: 4px solid #3b82f6;
            transform: translateX(8px);
        }

        .sidebar img {
            margin-right: 12px;
            width: 22px;
            height: 22px;
            filter: brightness(0) invert(1);
            transition: all 0.3s ease;
        }

        .sidebar a:hover img {
            filter: brightness(0) invert(1);
            transform: scale(1.1);
        }

        .logout {
            margin-top: auto;
            margin-bottom: 20px;
            padding: 0;
            background: none;
            border: none;
        }

        .logout a {
            background: linear-gradient(90deg, #dc2626, #b91c1c);
            color: white;
            text-align: center;
            border-radius: 8px;
            margin: 0 16px;
            font-weight: 600;
            border-left: none;
            justify-content: center;
        }

        .logout a:hover {
            background: linear-gradient(90deg, #b91c1c, #991b1b);
            transform: translateX(0);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
        }

        /* Content Area */
        .content {
            margin-left: 260px;
            padding: 0;
            min-height: 100vh;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            padding: 20px 32px;
            border-bottom: 1px solid #475569;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #f8fafc;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .nav-bar {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-bar img {
            width: 28px;
            height: 28px;
            cursor: pointer;
            transition: all 0.3s ease;
            filter: brightness(0) invert(1);
            padding: 8px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-bar img:hover {
            transform: scale(1.2);
            background: rgba(59, 130, 246, 0.2);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .profile-pic {
            width: 44px !important;
            height: 44px !important;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid #3b82f6;
            background: rgba(59, 130, 246, 0.1) !important;
            padding: 0 !important;
        }

        .profile-pic:hover {
            transform: scale(1.1);
            border-color: #8b5cf6;
            box-shadow: 0 4px 16px rgba(59, 130, 246, 0.4);
        }

        .icon-container {
            position: relative;
            display: inline-block;
        }

        .badge {
            position: absolute;
            top: -2px;
            right: -2px;
            background: linear-gradient(45deg, #ef4444, #dc2626);
            color: white;
            border-radius: 50%;
            padding: 4px 8px;
            font-size: 11px;
            font-weight: bold;
            display: none;
            animation: pulse 2s infinite;
            box-shadow: 0 2px 8px rgba(239, 68, 68, 0.4);
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* Dashboard Content */
        #dashboard {
            max-width: 1200px;
            margin: 40px auto;
            padding: 32px;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid #475569;
        }

        #dashboard h2 {
            text-align: center;
            color: #f8fafc;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 16px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        #dashboard > p {
            text-align: center;
            color: #94a3b8;
            font-size: 18px;
            margin-bottom: 32px;
        }

        /* Website Stats */
        #website-stats {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 32px;
            border-radius: 12px;
            margin-top: 32px;
            border: 1px solid #334155;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        #website-stats h3 {
            font-size: 24px;
            color: #f8fafc;
            margin-bottom: 24px;
            font-weight: 700;
            text-align: center;
            border-bottom: 2px solid #3b82f6;
            padding-bottom: 12px;
        }

        #website-stats p {
            font-size: 16px;
            color: #cbd5e1;
            margin: 16px 0;
            padding: 12px 20px;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 8px;
            border-left: 4px solid #3b82f6;
            transition: all 0.3s ease;
        }

        #website-stats p:hover {
            background: rgba(59, 130, 246, 0.15);
            transform: translateX(4px);
        }

        #website-stats span {
            font-weight: 700;
            color: #3b82f6;
        }

        /* Traffic Details */
        #traffic-details {
            margin-top: 32px;
            padding: 24px;
            background: rgba(15, 23, 42, 0.5);
            border-radius: 12px;
            border: 1px solid #334155;
        }

        #traffic-details h3 {
            font-size: 20px;
            color: #f8fafc;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
            border-bottom: 1px solid #475569;
            padding-bottom: 12px;
        }

        #traffic-details ul {
            list-style-type: none;
            padding-left: 0;
        }

        #traffic-details li {
            margin: 12px 0;
            padding: 12px 16px;
            background: rgba(59, 130, 246, 0.08);
            border-radius: 8px;
            border-left: 3px solid #8b5cf6;
            color: #e2e8f0;
            transition: all 0.3s ease;
        }

        #traffic-details li:hover {
            background: rgba(59, 130, 246, 0.12);
            transform: translateX(4px);
        }

        #traffic-details strong {
            color: #3b82f6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            
            .content {
                margin-left: 200px;
            }
            
            #dashboard {
                margin: 20px;
                padding: 20px;
            }
            
            .header {
                padding: 15px 20px;
            }
            
            .header h1 {
                font-size: 20px;
            }
            
            #website-stats {
                padding: 20px;
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                width: 180px;
            }
            
            .content {
                margin-left: 180px;
            }
            
            .nav-bar {
                gap: 10px;
            }
            
            .nav-bar img {
                width: 24px;
                height: 24px;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1e293b;
        }

        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h1>Agropest</h1>
    <a href="Admin_dashboard.php"><img src="../Images/dashboard.png" alt="Dashboard Icon">Dashboard</a>
    <a href="admin_products.php"><img src="../Images/box.png" alt="Products Icon">Products</a>
    <a href="user_info.php"><img src="../Images/user.png" alt="User Icon">CRM</a>
    <div class="logout"><a href="Logout.php">Logout</a></div>
</div>

<!-- Content Area -->
<div class="content">
    <div class="header">
        <h1>Agropest Admin Dashboard</h1>
        <div class="nav-bar">
            <div class="icon-container">
                <img src="../Images/email.png" alt="Messages" id="message-icon">
                <span class="badge" id="message-badge">0</span>
            </div>
            <img src="../Images/user.png" alt="Profile Picture" class="profile-pic">
        </div>
    </div>
    
    <div id="dashboard">
        <h2>Dashboard Section</h2>
        <p>Welcome to the dashboard!</p>
        
        <div id="website-stats">
            <h3>Website Statistics</h3>
            <p>Total Visits: <span id="total-visits">12,342 viewers</span></p>
            <p>Unique Visitors: <span id="unique-visitors">9,215</span></p>
            <p>Page Views: <span id="page-views">42,785</span></p>
            <p>Average Session Duration: <span id="avg-session-duration">3m 25s</span></p>
            <p>Bounce Rate: <span id="bounce-rate">45.2%</span></p>
            <p>New vs Returning Visitors: <span id="new-vs-returning">65% new, 35% returning</span></p>
            
            <div id="traffic-details">
                <h3>Traffic Details</h3>
                <ul>
                    <li><strong>Top Traffic Source:</strong> Organic Search</li>
                    <li><strong>Top Referring Site:</strong> Facebook</li>
                    <li><strong>Mobile vs Desktop:</strong> 70% mobile, 30% desktop</li>
                    <li><strong>Top Landing Page:</strong> /Index</li>
                    <li><strong>Top Exit Page:</strong> /Contact</li>
                    <li><strong>Country with Most Visitors:</strong> India</li>
                    <li><strong>Gender Distribution:</strong> 55% Male, 45% Female</li>
                    <li><strong>Age Range:</strong> 18-34 (45%), 35-54 (35%), 55+ (20%)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    let messageCount = 0;

    // Function to increment message count and display badge
    function addNewMessage() {
        messageCount++;
        const badge = document.getElementById("message-badge");
        badge.textContent = messageCount;
        badge.style.display = "block"; // Show badge when new messages arrive
    }

    // Simulating new messages (call this whenever a new message arrives)
    setTimeout(() => addNewMessage(), 2000); // Message 1 arrives after 2 seconds
    setTimeout(() => addNewMessage(), 5000); // Message 2 arrives after 5 seconds

    document.querySelectorAll('.sidebar a').forEach(link => {
        link.addEventListener('click', function(event) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) { // Only prevent default for internal navigation
                event.preventDefault();
                const targetId = href.substring(1); // Remove '#' from href
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    async function fetchWebsiteStats() {
        try {
            // Mocking the API response for now
            const data = {
                totalVisits: '12,342',
                trafficDetails: `
                    <ul>
                        <li><strong>Top Traffic Source:</strong> Organic Search</li>
                        <li><strong>Top Referring Site:</strong> Facebook</li>
                        <li><strong>Mobile vs Desktop:</strong> 70% mobile, 30% desktop</li>
                        <li><strong>Top Landing Page:</strong> /home</li>
                        <li><strong>Top Exit Page:</strong> /contact-us</li>
                        <li><strong>Country with Most Visitors:</strong>India</li>
                        <li><strong>Gender Distribution:</strong> 55% Male, 45% Female</li>
                        <li><strong>Age Range:</strong> 18-34 (45%), 35-54 (35%), 55+ (20%)</li>
                    </ul>`
            };

            document.getElementById('total-visits').textContent = data.totalVisits;
            document.getElementById('traffic-details').innerHTML = data.trafficDetails;
        } catch (error) {
            console.error('Error fetching website stats:', error);
            document.getElementById('total-visits').textContent = 'Error fetching data';
            document.getElementById('traffic-details').textContent = 'Error fetching data';
        }
    }
</script>

</body>
</html>