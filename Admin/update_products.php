<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin' || !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'config.php'; // Include your database configuration file

$product = null; // Holds product details after fetching
$error_message = "";
$success_message = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['fetch'])) {
        // Fetch product details by ID or name
        $search = $_POST['search'];
        $query = "SELECT * FROM products WHERE id = ? OR name = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("is", $search, $search);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $stmt->close();

        // If no product is found, set an error message
        if (!$product) {
            $error_message = "Product not available.";
        }
    } elseif (isset($_POST['update'])) {
        // Update product details
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        // Handle image upload
        if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {
            $targetDir = "uploads/"; // Directory to store images
            $targetFile = $targetDir . basename($_FILES['photo']['name']);

            if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                // Update with new image
                $sql = "UPDATE products SET name=?, description=?, price=?, quantity=?, Image=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssdisi", $name, $description, $price, $quantity, $targetFile, $id);
            } else {
                $error_message = "Failed to upload image.";
            }
        } else {
            // Update without changing image
            $sql = "UPDATE products SET name=?, description=?, price=?, quantity=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssdii", $name, $description, $price, $quantity, $id);
        }

        if ($stmt->execute()) {
            $success_message = "Product updated successfully!";
        } else {
            $error_message = "Error updating product: " . $stmt->error;
        }
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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

        .main-content {
            margin-left: 260px; /* Match sidebar width */
            padding: 0;
            width: calc(100% - 260px);
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(90deg, #0f172a, #1e293b);
            color: white;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid #334155;
        }

        .navbar-title {
            font-size: 24px;
            font-weight: bold;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-links a {
            color: #cbd5e1;
            padding: 12px 20px;
            text-decoration: none;
            margin-left: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .navbar-links a:hover {
            background: linear-gradient(90deg, #1e40af, #7c3aed);
            color: white;
            transform: translateY(-2px);
        }

        .content-wrapper {
            padding: 30px;
        }

        h1 {
            color: #f1f5f9;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 700;
        }

        .form-container {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid #475569;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            max-width: 700px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        .form-container h2 {
            color: #f1f5f9;
            margin-bottom: 25px;
            font-size: 20px;
            font-weight: 600;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #cbd5e1;
            font-weight: 500;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #475569;
            border-radius: 8px;
            background: rgba(15, 23, 42, 0.6);
            color: #e4e4e7;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        button {
            background: linear-gradient(90deg, #059669, #0d9488);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        button:hover {
            background: linear-gradient(90deg, #047857, #0f766e);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(5, 150, 105, 0.3);
        }

        .error {
            color: #ef4444;
            background: rgba(239, 68, 68, 0.1);
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .success {
            color: #22c55e;
            background: rgba(34, 197, 94, 0.1);
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid rgba(34, 197, 94, 0.3);
        }

        img {
            max-width: 150px;
            height: auto;
            border: 2px solid #475569;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                width: 100%;
            }
            
            .navbar {
                padding: 15px 20px;
            }
            
            .navbar-title {
                font-size: 20px;
            }
            
            .content-wrapper {
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

    <div class="content-wrapper">
        <h1>Update Product</h1>

        <!-- Fetch Product Form -->
        <div class="form-container">
            <h2>Fetch Product Details</h2>
            <form action="update_products.php" method="post">
                <label for="search">Enter Product ID or Name:</label>
                <input type="text" id="search" name="search" required>
                <button type="submit" name="fetch">Fetch</button>
            </form>
        </div>
        
        <?php if (isset($error_message) && !empty($error_message)): ?>
        <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <?php if (isset($success_message) && !empty($success_message)): ?>
        <div class="success"><?php echo $success_message; ?></div>
        <?php endif; ?>

        <!-- Display and Update Product Form -->
        <?php if ($product): ?>
            <div class="form-container">
                <h2>Update Product Details</h2>
                <form action="update_products.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $product['Id']; ?>">

                    <label for="name">Product Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $product['Name']; ?>" required>

                    <label for="description">Product Description:</label>
                    <textarea id="description" name="description" rows="3" required><?php echo $product['Description']; ?></textarea>

                    <label for="price">Product Price:</label>
                    <input type="number" id="price" name="price" value="<?php echo $product['Price']; ?>" required>

                    <label for="quantity">Product Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="<?php echo $product['Quantity']; ?>" required>

                    <label for="photo">Current Product Photo:</label>
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($product['Image']); ?>" alt="<?php echo htmlspecialchars($product['Name']); ?>" width="150">

                    <label for="photo">Upload New Product Photo:</label>
                    <input type="file" id="photo" name="photo" accept="image/*">

                    <button type="submit" name="update">Update Product</button>

                </form>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>