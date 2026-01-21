<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = sanitize($_POST['name']);
    $category = sanitize($_POST['category']);
    $quantity = sanitize($_POST['quantity']);
    $price = sanitize($_POST['price']);
    
    // Insert into database
    $sql = "INSERT INTO items (name, category, quantity, price) 
            VALUES ('$name', '$category', '$quantity', '$price')";
    
    if (executeQuery($sql)) {
        $_SESSION['message'] = "Item added successfully!";
        header("Location: view.php");
        exit();
    } else {
        $error = "Error adding item. Please try again.";
    }
}
?>
<?php include 'header.php'; ?>

<h1 class="page-title">Add New Item</h1>

<?php if (isset($error)): ?>
    <div class="error"><?php echo $error; ?></div>
<?php endif; ?>

<div class="form-container">
    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter item name">
        </div>
        
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required placeholder="e.g., Cake, Bread, Pastry">
        </div>
        
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="0" required placeholder="Enter quantity">
        </div>
        
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required placeholder="Enter price">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn">Add Item</button>
            <a href="view.php" class="btn cancel">Cancel</a>
        </div>
    </form>
</div>

</div>
</main>
</body>
</html>