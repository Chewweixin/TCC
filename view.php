<?php
require_once 'config.php';

// Handle delete request
if (isset($_GET['delete'])) {
    $id = sanitize($_GET['delete']);
    $sql = "DELETE FROM items WHERE id = '$id'";
    executeQuery($sql);
    $_SESSION['message'] = "Item deleted successfully!";
    header("Location: view.php");
    exit();
}

// Get all items
$sql = "SELECT * FROM items ORDER BY id DESC";
$result = executeQuery($sql);
$items = fetchAll($result);
?>
<?php include 'header.php'; ?>

<h1 class="page-title">VIEW and EDIT Items</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="message"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
<?php endif; ?>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($items) > 0): ?>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo htmlspecialchars($item['category']); ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>RM<?php echo number_format($item['price'], 2); ?></td>
                        <td class="action-links">
                            <a href="edit.php?id=<?php echo $item['id']; ?>">Edit</a> | 
                            <a href="view.php?delete=<?php echo $item['id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" style="text-align: center; padding: 40px;">
                        No items found. <a href="add.php">Add a new item</a> to get started.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="add-item-btn">
        <a href="add.php" class="btn">Add New Item</a>
    </div>
</div>

</div>
</main>
</body>
</html>