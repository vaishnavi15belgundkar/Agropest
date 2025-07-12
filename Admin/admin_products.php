<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin' || !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
    header("Location: login.php");
    exit();
}

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Database connection
include 'config.php'; // Include your database configuration file


// Initialize success and error messages
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Handle image upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        // Get binary content of the uploaded image
        $photo = file_get_contents($_FILES['photo']['tmp_name']);
    } else {
        $error = "Error: Please upload a valid image.";
    }

    // Proceed if no errors in the upload
    if (empty($error)) {
        // Prepare the SQL query
        $query = "INSERT INTO products (Image, Name, Price, Quantity, Description) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters and send the image data
        $stmt->bind_param('ssdis', $photo, $name, $price, $quantity, $description);
        $stmt->send_long_data(0, $photo);

        // Execute the query
        if ($stmt->execute()) {
            $success = "Product added successfully!";
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

// Count total products
$result = $conn->query("SELECT COUNT(*) AS productCount FROM products");
$productCount = $result->fetch_assoc()['productCount'];
$result->close();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Products</title>
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
            display: flex;
        }
        
        .main-content {
            margin-left: 260px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(90deg, #1e293b, #334155);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid #475569;
        }

        .navbar-title {
            font-size: 22px;
            font-weight: 700;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-links {
            display: flex;
            gap: 10px;
        }

        .navbar-links a {
            color: #cbd5e1;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .navbar-links a:hover {
            background: linear-gradient(90deg, #1e40af, #7c3aed);
            color: white;
            transform: translateY(-2px);
        }

        .content-area {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
        }

        .content-area h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .content-area p {
            font-size: 16px;
            margin-bottom: 30px;
            color: #cbd5e1;
        }

        .form-container {
            max-width: 600px;
            padding: 30px;
            background: rgba(30, 41, 59, 0.8);
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid #334155;
            backdrop-filter: blur(10px);
        }

        .form-container h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #e2e8f0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #cbd5e1;
            font-size: 14px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #475569;
            border-radius: 8px;
            background: rgba(51, 65, 85, 0.5);
            color: #e2e8f0;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        input::placeholder, textarea::placeholder {
            color: #94a3b8;
        }

        button {
            background: linear-gradient(90deg, #059669, #047857);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        button:hover {
            background: linear-gradient(90deg, #047857, #065f46);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(5, 150, 105, 0.3);
        }

        .error {
            color: #ef4444;
            margin-bottom: 20px;
            padding: 12px;
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid #ef4444;
            border-radius: 8px;
            font-weight: 500;
        }

        .success {
            color: #22c55e;
            margin-bottom: 20px;
            padding: 12px;
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid #22c55e;
            border-radius: 8px;
            font-weight: 500;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
            
            .navbar {
                flex-direction: column;
                gap: 15px;
                padding: 15px;
            }
            
            .navbar-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .content-area {
                padding: 20px;
            }
            
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <div class="main-content">
        <div class="navbar">
            <div class="navbar-title">Products Dashboard</div>
            <div class="navbar-links">
                <a href="admin_products.php">Add Product</a>
                <a href="update_products.php">Update Product</a>
                <a href="delete_products.php">Delete Product</a>
            </div>
        </div>
        
        <div class="content-area">
            <h1>Admin - Manage Products</h1>
            <p>Total Products Listed: <strong><?php echo $productCount; ?></strong></p>
            
            <div class="form-container">
                <h2>Add a New Product</h2>
                <?php if (!empty($error)): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php elseif (!empty($success)): ?>
                    <p class="success"><?php echo $success; ?></p>
                <?php endif; ?>
                
                <form action="admin_products.php" method="post" enctype="multipart/form-data">
                    <label for="name">Product Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="description">Product Description:</label>
                    <textarea id="description" name="description" rows="3" required></textarea>

                    <label for="price">Product Price (INR):</label>
                    <input type="number" id="price" name="price" step="0.01" required>

                    <label for="quantity">Product Quantity:</label>
                    <input type="number" id="quantity" name="quantity" required>

                    <label for="photo">Product Photo:</label>
                    <input type="file" id="photo" name="photo" accept="image/*" required>

                    <button type="submit">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>