<?php
?>
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

</style>

<!-- Sidebar -->
<div class="sidebar">
    <h1>Agropest</h1>
    <a href="Admin_dashboard.php"><img src="../Images/dashboard.png" alt="Dashboard Icon">Dashboard</a>
    <a href="admin_products.php"><img src="../Images/box.png" alt="Products Icon">Products</a>
    <a href="user_info.php"><img src="../Images/user.png" alt="User Icon">CRM</a>
    <div class="logout"><a href="Logout.php">Logout</a></div>
</div>

