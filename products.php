<?php
// Define all notebook categories
$categories = [
    "small-spiral" => [
        "title" => "Small Spiral Notebook",
        "size" => "85mm × 105mm",
        "description" => "Compact notebooks with strong spiral binding. 100% recycled paper.",
        "products" => [
            ["image" => "images/small1.jpg", "title" => "Eco Brown Small Spiral", "desc" => "80 pages | Recycled paper | Metal spiral binding", "price" => "LKR 450"],
            ["image" => "images/small2.jpg", "title" => "Premium Small Spiral", "desc" => "100 pages | Thick recycled sheets", "price" => "LKR 550"],
        ]
    ],
    "medium-spiral" => [
        "title" => "Medium Spiral Notebook",
        "size" => "105mm × 145mm",
        "description" => "Ideal for daily notes with durable spiral binding.",
        "products" => [
            ["image" => "images/medium1.jpg", "title" => "Eco Medium Spiral", "desc" => "120 pages | Smooth recycled sheets", "price" => "LKR 650"],
            ["image" => "images/medium2.jpg", "title" => "Premium Medium Spiral", "desc" => "150 pages | Eco-friendly materials", "price" => "LKR 750"],
        ]
    ],
    "large-spiral" => [
        "title" => "Large Spiral Notebook",
        "size" => "150mm × 195mm",
        "description" => "Spacious writing area with premium handmade finish.",
        "products" => [
            ["image" => "images/large1.jpg", "title" => "Eco Large Spiral", "desc" => "200 pages | Strong binding", "price" => "LKR 950"],
            ["image" => "images/large2.jpg", "title" => "Premium Large Spiral", "desc" => "220 pages | Thick recycled sheets", "price" => "LKR 1100"],
        ]
    ],
    "medium-normal" => [
        "title" => "Medium Normal Notebook",
        "size" => "100mm × 135mm",
        "description" => "Classic binding style, perfect for school & office.",
        "products" => [
            ["image" => "images/mnormal1.jpg", "title" => "Medium Normal Eco", "desc" => "120 pages | Handmade recycled sheets", "price" => "LKR 500"],
            ["image" => "images/mnormal2.jpg", "title" => "Medium Normal Premium", "desc" => "150 pages | Smooth finish", "price" => "LKR 600"],
        ]
    ],
    "large-normal" => [
        "title" => "Large Normal Notebook",
        "size" => "145mm × 190mm",
        "description" => "Elegant handmade cover with stitched binding.",
        "products" => [
            ["image" => "images/lnormal1.jpg", "title" => "Large Normal Eco", "desc" => "200 pages | Recycled materials", "price" => "LKR 950"],
            ["image" => "images/lnormal2.jpg", "title" => "Large Normal Premium", "desc" => "220 pages | Thick recycled sheets", "price" => "LKR 1100"],
        ]
    ]
];

// Get category from URL, default to small-spiral
$cat = isset($_GET['category']) && isset($categories[$_GET['category']]) ? $_GET['category'] : 'small-spiral';
$current = $categories[$cat];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ALN PRODUCTS | <?php echo $current['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css">
</head>
<body>

<section class="products">
    <h2><?php echo $current['title']; ?></h2>
    <p class="subtitle"><?php echo $current['size']; ?></p>
    <p class="eco-note"><?php echo $current['description']; ?></p>

    <div class="gallery">
        <?php foreach ($current['products'] as $product): ?>
            <div class="gallery-item"
                 onclick="openModal('<?php echo $product['image']; ?>', '<?php echo $product['title']; ?>', '<?php echo $product['desc']; ?>', '<?php echo $product['price']; ?>')">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                <p><?php echo $product['price']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <a href="products.html" class="back-link">← Back to Products</a>
</section>

<!-- MODAL -->
<div id="productModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <img id="modalImage">
        <h3 id="modalTitle"></h3>
        <p id="modalDesc"></p>
        <p id="modalPrice" class="price"></p>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
