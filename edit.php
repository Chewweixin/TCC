<?php
require_once 'config.php';

// Get item ID from URL
if (!isset($_GET['id'])) {
    header("Location: view.php");
    exit();
}

$id = sanitize($_GET['id']);

// Fetch item data
$sql = "SELECT * FROM items WHERE id = '$id'";
$result = executeQuery($sql);
$item = mysqli_fetch_assoc($result);

if (!$item) {
    header("Location: view.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = sanitize($_POST['name']);
    $category = sanitize($_POST['category']);
    $quantity = sanitize($_POST['quantity']);
    $price = sanitize($_POST['price']);
    
    $sql = "UPDATE items SET 
            name = '$name', 
            category = '$category', 
            quantity = '$quantity', 
            price = '$price' 
            WHERE id = '$id'";
    
    if (executeQuery($sql)) {
        $_SESSION['message'] = "Item updated successfully!";
        header("Location: view.php");
        exit();
    } else {
        $error = "Error updating item. Please try again.";
    }
}
?>
<?php include 'header.php'; ?>

<h1 class="page-title">Edit Item</h1>

<?php if (isset($error)): ?>
    <div class="error"><?php echo $error; ?></div>
<?php endif; ?>

<div class="form-container">
    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($item['name']); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="<?php echo htmlspecialchars($item['category']); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="0" value="<?php echo $item['quantity']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" value="<?php echo $item['price']; ?>" required>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn">Update Item</button>
            <a href="view.php" class="btn cancel">Cancel</a>
        </div>
    </form>
</div>

</div>
</main>
</body>
</html>