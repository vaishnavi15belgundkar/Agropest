<?php
include 'config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - Agro Pest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8fffe 0%, #f0f9f4 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c59 100%);
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="2" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1.5" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grain)"/></svg>');
            opacity: 0.1;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Products Section */
        .products-section {
            padding: 80px 0;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            padding: 0 20px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: #2d5016;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .section-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Filter and Search */
        .filter-section {
            padding: 0 20px;
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
            flex: 1;
            max-width: 400px;
        }

        .search-box input {
            width: 100%;
            padding: 15px 50px 15px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 30px;
            font-size: 16px;
            background: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .search-box input:focus {
            outline: none;
            border-color: #4a7c59;
            box-shadow: 0 6px 25px rgba(74, 124, 89, 0.2);
        }

        .search-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            font-size: 18px;
        }

        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            border: 1px solid #f0f0f0;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .product-image {
            position: relative;
            height: 250px;
            overflow: hidden;
            background: linear-gradient(135deg, #f8fffe 0%, #f0f9f4 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 30px;
        }

        .product-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2d5016;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 20px;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding: 15px;
            background: linear-gradient(135deg, #f8fffe 0%, #f0f9f4 100%);
            border-radius: 15px;
        }

        .price-tag {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2d5016;
        }

        .price-tag::before {
            content: '₹';
            font-size: 1.1rem;
            margin-right: 2px;
        }

        .quantity-info {
            color: #666;
            font-size: 0.9rem;
            background: white;
            padding: 5px 12px;
            border-radius: 20px;
            border: 1px solid #e0e0e0;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            flex: 1;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #1a2f0c, #2d5016);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        .btn-secondary {
            background: white;
            color: #2d5016;
            border: 2px solid #2d5016;
        }

        .btn-secondary:hover {
            background: #2d5016;
            color: white;
            transform: translateY(-2px);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
            color: #666;
        }

        .empty-state i {
            font-size: 4rem;
            color: #ccc;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        /* Loading Animation */
        .loading {
            display: none;
            text-align: center;
            padding: 40px;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #2d5016;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .products-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 25px;
            }
            
            .hero-section h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .hero-section h1 {
                font-size: 2.2rem;
            }
            
            .hero-section p {
                font-size: 1rem;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .filter-section {
                flex-direction: column;
                align-items: center;
            }
            
            .search-box {
                max-width: 100%;
            }
            
            .product-info {
                padding: 20px;
            }
            
            .product-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .hero-section h1 {
                font-size: 1.8rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .product-image {
                height: 200px;
            }
            
            .product-image img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <!-- Include navbar here -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <!-- <section class="hero-section">
        <div class="hero-content">
            <h1>Our Premium Products</h1>
            <p>Discover our comprehensive range of high-quality agrochemical solutions designed to enhance crop productivity and protect your investments. From herbicides to fungicides, we provide everything you need for sustainable farming.</p>
        </div>
    </section> -->

    <!-- Products Section -->
    <section class="products-section">
        <div class="section-header">
            <h2>Agricultural Solutions</h2>
            <p>Explore our extensive portfolio of trusted agricultural products, carefully selected to meet the diverse needs of modern farming.</p>
        </div>

        <!-- Filter and Search -->
        <div class="filter-section">
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Search products...">
                <span class="search-icon">🔍</span>
            </div>
        </div>

        <!-- Loading Animation -->
        <div class="loading" id="loading">
            <div class="spinner"></div>
            <p>Loading products...</p>
        </div>

        <!-- Products Grid -->
        <div class="products-grid" id="productsGrid">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="product-card" data-name="<?php echo strtolower(htmlspecialchars($row['Name'])); ?>">
                        <div class="product-image">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['Image']); ?>" 
                                 alt="<?php echo htmlspecialchars($row['Name']); ?>"
                                 >
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><?php echo htmlspecialchars($row['Name']); ?></h3>
                            <p class="product-description"><?php echo htmlspecialchars($row['Description']); ?></p>
                            <div class="product-details">
                                <div class="price-tag"><?php echo htmlspecialchars($row['Price']); ?></div>
                                <div class="quantity-info"><?php echo htmlspecialchars($row['Quantity']); ?></div>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary" >
                                    View Details
                                </button>
                                <button class="btn btn-secondary" onclick="inquireProduct('<?php echo htmlspecialchars($row['Name']); ?>')">
                                    Inquire
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="empty-state">
                    <i>📦</i>
                    <h3>No Products Available</h3>
                    <p>We're working on adding new products. Please check back later.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const productCards = document.querySelectorAll('.product-card');
            let visibleCount = 0;

            productCards.forEach(card => {
                const productName = card.getAttribute('data-name');
                if (productName.includes(searchTerm)) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Show/hide empty state
            const emptyState = document.querySelector('.empty-state');
            if (visibleCount === 0 && searchTerm !== '') {
                if (!emptyState) {
                    const newEmptyState = document.createElement('div');
                    newEmptyState.className = 'empty-state';
                    newEmptyState.innerHTML = `
                        <i>🔍</i>
                        <h3>No products found</h3>
                        <p>Try adjusting your search terms or browse all products.</p>
                    `;
                    document.getElementById('productsGrid').appendChild(newEmptyState);
                }
            } else if (emptyState && visibleCount > 0) {
                emptyState.remove();
            }
        });

        // Product actions
        function viewProduct(productId) {
            // Add your product view logic here
            console.log('Viewing product:', productId);
            // You can redirect to a product detail page or show a modal
        }

        function inquireProduct(productName) {
            // Add your inquiry logic here
            console.log('Inquiring about:', productName);
            // You can redirect to contact form or show inquiry modal
            alert(`Thank you for your interest in ${productName}. We'll get back to you soon!`);
        }

        // Smooth scroll animation for cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Initialize animation
        document.querySelectorAll('.product-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>

<?php $conn->close(); ?>