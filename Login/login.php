<?php
// Start the session
session_start();

include '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // SQL query to check if the username and password match the admin table
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $input_username, $input_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Set session variables
        $_SESSION['username'] = 'admin';
        $_SESSION['logged-in'] = true;

        // Redirect to dashboard
        header("Location: ../Admin/Admin_dashboard.php");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Dark Theme Color Palette for Admin Dashboard */
            --primary-color: #3b82f6;
            --primary-dark: #1d4ed8;
            --primary-light: #60a5fa;
            --primary-glow: rgba(59, 130, 246, 0.2);
            
            /* Secondary Colors */
            --secondary-color: #6366f1;
            --secondary-light: #8b5cf6;
            --accent-color: #10b981;
            --accent-light: #34d399;
            
            /* Dark Theme Background Colors */
            --background-primary: #0f172a;
            --background-secondary: #1e293b;
            --background-tertiary: #334155;
            --surface-color: #1e293b;
            --surface-elevated: #334155;
            --surface-hover: #475569;
            
            /* Border Colors */
            --border-color: #334155;
            --border-light: #475569;
            --border-focus: #3b82f6;
            
            /* Text Colors */
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --text-disabled: #64748b;
            
            /* Status Colors */
            --success-color: #10b981;
            --error-color: #ef4444;
            --warning-color: #f59e0b;
            --info-color: #3b82f6;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.3);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.4), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.5), 0 4px 6px -2px rgba(0, 0, 0, 0.4);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.6), 0 10px 10px -5px rgba(0, 0, 0, 0.5);
            --shadow-glow: 0 0 20px rgba(59, 130, 246, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--background-primary);
            color: var(--text-primary);
            overflow: hidden;
        }

        /* Animated Background */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            z-index: -2;
        }

        .background-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.03;
            background-image: 
                radial-gradient(circle at 25% 25%, var(--primary-color) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, var(--secondary-color) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, var(--accent-color) 0%, transparent 50%);
            animation: backgroundShift 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes backgroundShift {
            0%, 100% { transform: translateX(0) translateY(0); }
            25% { transform: translateX(-10px) translateY(-10px); }
            50% { transform: translateX(10px) translateY(10px); }
            75% { transform: translateX(-5px) translateY(5px); }
        }

        /* Grid Pattern Overlay */
        .grid-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(59, 130, 246, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(59, 130, 246, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: -1;
        }

        /* Main Container */
        .login-wrapper {
            display: flex;
            min-height: 60vh;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        /* Back Button */
        .back-button {
            position: absolute;
            top: 32px;
            left: 32px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            background: rgba(30, 41, 59, 0.8);
            color: var(--text-secondary);
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            font-size: 14px;
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 10;
        }

        .back-button:hover {
            background: rgba(51, 65, 85, 0.9);
            color: var(--text-primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            border-color: var(--border-light);
        }

        .back-button::before {
            content: "←";
            font-size: 16px;
            transition: transform 0.3s ease;
        }

        .back-button:hover::before {
            transform: translateX(-2px);
        }

        /* Login Card */
        .login-card {
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(40px);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 48px;
            width: 100%;
            max-width: 460px;
            box-shadow: var(--shadow-xl), var(--shadow-glow);
            position: relative;
            animation: cardAppear 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes cardAppear {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes shimmer {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }

        /* Header */
        .login-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .admin-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
            position: relative;
            overflow: hidden;
        }

        .admin-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .admin-badge:hover::before {
            left: 100%;
        }

        .admin-badge::after {
            content: "⚡";
            font-size: 14px;
        }

        .login-title {
            font-size: 36px;
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: 8px;
            background: linear-gradient(135deg, var(--text-primary), var(--text-secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .login-subtitle {
            font-size: 16px;
            color: var(--text-muted);
            font-weight: 400;
            line-height: 1.5;
        }

        /* Form Styling */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 28px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            position: relative;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
        }

        .form-input {
            width: 100%;
            padding: 18px 20px;
            border: 2px solid var(--border-color);
            border-radius: 14px;
            font-size: 16px;
            font-weight: 400;
            color: var(--text-primary);
            background: var(--surface-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 2;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            background: var(--surface-elevated);
            box-shadow: 0 0 0 3px var(--primary-glow), var(--shadow-md);
            transform: translateY(-2px);
        }

        .form-input::placeholder {
            color: var(--text-muted);
            font-weight: 400;
        }

        .input-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .form-input:focus + .input-wrapper::before {
            opacity: 0.05;
        }

        /* Login Button */
        .login-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4), var(--shadow-glow);
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.3s ease, height 0.3s ease;
        }

        .login-button:active::after {
            width: 300px;
            height: 300px;
        }

        /* Footer Links */
        .login-footer {
            text-align: center;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--border-color);
        }

        .forgot-password {
            color: var(--primary-light);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
            position: relative;
        }

        .forgot-password:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }

        .forgot-password::before {
            content: "🔐";
            margin-right: 6px;
            font-size: 12px;
        }

        /* Error Message */
        .error-message {
            background: rgba(239, 68, 68, 0.1);
            color: var(--error-color);
            padding: 18px;
            border-radius: 14px;
            border: 1px solid rgba(239, 68, 68, 0.2);
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            animation: errorAppear 0.5s ease-out;
            position: relative;
        }

        .error-message::before {
            content: "⚠️";
            margin-right: 8px;
            font-size: 16px;
        }

        @keyframes errorAppear {
            0% { 
                opacity: 0; 
                transform: translateY(-10px) scale(0.95);
            }
            100% { 
                opacity: 1; 
                transform: translateY(0) scale(1);
            }
        }

        /* Loading State */
        .login-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .login-button:disabled:hover {
            transform: none;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .login-card {
                padding: 36px 28px;
                margin: 20px;
                border-radius: 16px;
            }
            
            .login-title {
                font-size: 30px;
            }
            
            .back-button {
                top: 24px;
                left: 24px;
                padding: 10px 16px;
                font-size: 13px;
            }
            
            .form-input {
                padding: 16px 18px;
            }
            
            .login-button {
                padding: 16px;
            }
        }

        /* Focus Styles for Accessibility */
        .login-button:focus-visible,
        .back-button:focus-visible,
        .forgot-password:focus-visible {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }

        /* Subtle Animations */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        .admin-badge {
            animation: pulse 4s ease-in-out infinite;
        }

        /* Enhanced Visual Effects */
        .login-card:hover {
            box-shadow: var(--shadow-xl), 0 0 40px rgba(59, 130, 246, 0.1);
        }
    </style>
</head>
<body>
    <div class="background-container"></div>
    <div class="background-pattern"></div>
    <div class="grid-pattern"></div>
    
    <!-- Back Button -->
    <a href="../index.php" class="back-button">Back to Home</a>

    <!-- Login Container -->
    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-header">
                <div class="admin-badge">Admin Access</div>
                <h1 class="login-title">Welcome Back</h1>
                <p class="login-subtitle">Please sign in to your admin dashboard</p>
            </div>

            <form action="login.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-wrapper">
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            class="form-input" 
                            placeholder="Enter your username" 
                            required
                            autocomplete="username"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-wrapper">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-input" 
                            placeholder="Enter your password" 
                            required
                            autocomplete="current-password"
                        >
                    </div>
                </div>

                <?php if (isset($error_message)): ?>
                    <div class="error-message">
                        <?php echo htmlspecialchars($error_message); ?>
                    </div>
                <?php endif; ?>

                <button type="submit" class="login-button">
                    Sign In to Dashboard
                </button>
            </form>

            <!-- <div class="login-footer">
                <a href="Forgot_password.php" class="forgot-password">Forgot your password?</a>
            </div> -->
        </div>
    </div>

    <script>
        // Enhanced form interactions
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-input');
            const form = document.querySelector('.login-form');
            const button = document.querySelector('.login-button');
            
            // Input focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.parentElement.style.transform = 'translateY(-2px)';
                    this.parentElement.parentElement.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.parentElement.style.transform = 'translateY(0)';
                });

                // Typing effect
                input.addEventListener('input', function() {
                    if (this.value.length > 0) {
                        this.style.fontWeight = '500';
                    } else {
                        this.style.fontWeight = '400';
                    }
                });
            });

            // Form submission with loading state
            form.addEventListener('submit', function(e) {
                button.disabled = true;
                button.innerHTML = 'Signing in...';
                
                // Add loading animation
                const loadingSpinner = document.createElement('div');
                loadingSpinner.style.cssText = `
                    display: inline-block;
                    width: 16px;
                    height: 16px;
                    border: 2px solid rgba(255,255,255,0.3);
                    border-radius: 50%;
                    border-top-color: white;
                    animation: spin 1s linear infinite;
                    margin-right: 8px;
                `;
                
                // Add spinner animation
                const style = document.createElement('style');
                style.textContent = `
                    @keyframes spin {
                        to { transform: rotate(360deg); }
                    }
                `;
                document.head.appendChild(style);
                
                button.prepend(loadingSpinner);
            });

            // Keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && (e.ctrlKey || e.metaKey)) {
                    form.submit();
                }
            });

            // Add subtle card tilt effect
            const card = document.querySelector('.login-card');
            card.addEventListener('mousemove', function(e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });
            
            card.addEventListener('mouseleave', function() {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
            });
        });
    </script>
</body>
</html>