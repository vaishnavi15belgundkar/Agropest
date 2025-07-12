<?php

session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin' || !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
    header("Location: login.php");
    exit();
}


include 'config.php'; // Include your database configuration file   

// Fetch contact form data
$sql = "SELECT Name, Email, Phone, Message FROM contact";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Agropest</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #e4e4e7;
            min-height: 100vh;
        }

        .content {
            margin-left: 260px; /* Fixed: Match sidebar width exactly */
            padding: 20px;
            background: inherit;
        }

        .header {
            background-color: transparent; /* Changed to match body background */
            padding: 15px 0; /* Removed horizontal padding to align with content */
            border-bottom: 1px solid #334155; /* Match sidebar border color */
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .nav-bar {
            display: flex;
            align-items: center;
        }

        .nav-bar img {
            width: 25px;
            height: 25px;
            margin-left: 20px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .nav-bar img:hover {
            transform: scale(1.3);
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .profile-pic:hover {
            transform: scale(1.3);
        }

        .icon-container {
            position: relative;
            display: inline-block;
        }

        .badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            font-weight: bold;
            display: none; /* Initially hidden when there are no messages */
        }

        h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        h2 {
            color: #cbd5e1;
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .table-container {
            margin-top: 20px;
            overflow-x: auto;
            background: rgba(30, 41, 59, 0.8);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            border: 1px solid #334155;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: transparent;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #334155;
        }

        th {
            background: linear-gradient(90deg, #1e40af, #7c3aed);
            color: white;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        tr:nth-child(even) {
            background-color: rgba(51, 65, 85, 0.3);
        }

        tr:hover {
            background-color: rgba(59, 130, 246, 0.1);
            transition: background-color 0.3s ease;
        }

        td {
            color: #e2e8f0;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .content {
                margin-left: 0;
                padding: 15px;
            }
            
            .table-container {
                padding: 15px;
            }
            
            table {
                font-size: 14px;
            }
            
            th, td {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>

    <div class="content">
        <div class="header">
            <h1>CRM Dashboard</h1>
        </div>

        <div class="table-container">
            <h2>Contact Us Submissions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row['Name']) . "</td>
                                    <td>" . htmlspecialchars($row['Email']) . "</td>
                                    <td>" . htmlspecialchars($row['Phone']) . "</td>
                                    <td>" . htmlspecialchars($row['Message']) . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No submissions found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('click', function(event) {
                const href = this.getAttribute('href');
                if (href.startsWith('#')) { 
                    event.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });
    </script>
</body>
</html>
<?php
$conn->close();
?>