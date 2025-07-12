<?php

session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin' || !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'config.php'; // Include your database configuration file

$product = null;

if (isset($_POST['fetch'])) {
    $search = $conn->real_escape_string($_POST['search']);
    $sql = "SELECT * FROM products WHERE id='$search' OR name LIKE '%$search%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "<p style='color:red;'>Product not found.</p>";
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn->query("DELETE FROM products WHERE id=$id");
    header('Location: admin_products.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
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
            margin-left: 260px; /* Match sidebar width exactly */
            padding: 0;
            width: calc(100% - 260px); /* Ensure proper width calculation */
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #e4e4e7;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            border-bottom: 1px solid #334155;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-title {
            font-size: 24px;
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
            border: 1px solid transparent;
        }

        .navbar-links a:hover {
            background: linear-gradient(90deg, #1e40af, #7c3aed);
            color: white;
            border: 1px solid #3b82f6;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .form-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid #475569;
        }

        .form-container h2 {
            color: #e4e4e7;
            margin-bottom: 25px;
            font-size: 28px;
            font-weight: 600;
            text-align: center;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #cbd5e1;
            font-weight: 500;
            font-size: 14px;
        }

        input, textarea {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 20px;
            border: 1px solid #475569;
            border-radius: 8px;
            background: #0f172a;
            color: #e4e4e7;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        input[readonly], textarea[readonly] {
            background: #1e293b;
            cursor: not-allowed;
            opacity: 0.7;
        }

        button {
            background: linear-gradient(90deg, #dc2626, #b91c1c);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        button:hover {
            background: linear-gradient(90deg, #b91c1c, #991b1b);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
        }

        .back-btn {
            background: linear-gradient(90deg, #3b82f6, #2563eb) !important;
        }

        .back-btn:hover {
            background: linear-gradient(90deg, #2563eb, #1d4ed8) !important;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3) !important;
        }

        button[name="fetch"] {
            background: linear-gradient(90deg, #059669, #047857);
        }

        button[name="fetch"]:hover {
            background: linear-gradient(90deg, #047857, #065f46);
            box-shadow: 0 4px 12px rgba(5, 150, 105, 0.3);
        }

        .error-message {
            color: #ef4444;
            background: rgba(239, 68, 68, 0.1);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ef4444;
            margin-bottom: 20px;
            text-align: center;
        }

        .product-details {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 25px;
            border-radius: 10px;
            margin-top: 30px;
            border: 1px solid #334155;
        }

        .button-group {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
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
    <div class="form-container">
        <h2>Fetch Product Details</h2>
        <form method="post">
            <label for="search">Enter Product ID or Name:</label>
            <input type="text" id="search" name="search" required>
            <button type="submit" name="fetch">Fetch</button>
        </form>

        <?php if ($product): ?>
            <div class="product-details">
                <h2>Product Details</h2>
                <form method="post">
                    <label>Product Name:</label>
                    <input type="text" value="<?php echo $product['Name']; ?>" readonly>
                    <label>Product Description:</label>
                    <textarea readonly><?php echo $product['Description']; ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $product['Id']; ?>">
                    <div class="button-group">
                        <button type="submit" name="delete">Delete</button>
                        <button type="button" class="back-btn" onclick="window.location.href='delete_products.php'">Back</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>