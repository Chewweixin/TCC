<?php
// ==================== 数据库连接 ====================
$host = 'localhost';
$user = 'root';      // XAMPP 默认
$pass = '';          // XAMPP 默认
$dbname = 'cafe_db';

// 连接数据库
$conn = new mysqli($host, $user, $pass, $dbname);

// 检查连接
if ($conn->connect_error) {
    $db_status = "Database: Not Connected";
    $products = [];
} else {
    $db_status = "Database: Connected";
    
    // 从数据库获取产品
    $result = $conn->query("SELECT * FROM products ORDER BY category, name");
    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Welcome to the Caf&eacute;!</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* 只添加一点PHP相关的样式 */
        .db-status {
            background: #f8f9fa;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #666;
        }
        .db-status.connected { color: green; }
        .db-status.disconnected { color: red; }
        
        .products-from-db {
            background: #fff9e6;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        .product-item {
            display: inline-block;
            margin: 10px;
            padding: 10px 15px;
            background: white;
            border: 1px solid #eee;
            border-radius: 5px;
            min-width: 150px;
        }
        .product-price {
            color: #e44d26;
            font-weight: bold;
        }
    </style>
</head>

<body class="bodyStyle">

    <!-- 数据库状态显示（很小，不干扰设计） -->
    <div class="db-status <?php echo $conn->connect_error ? 'disconnected' : 'connected'; ?>">
        <?php echo $db_status; ?> | 
        <?php echo count($products); ?> products from database | 
        PHP <?php echo phpversion(); ?>
    </div>

    <!-- 原来的标题 -->
    <div id="header" class="mainHeader">
        <hr>
        <div class="center">Caf&eacute;</div>
    </div>
    <br>

    <!-- 从数据库动态显示产品 -->
    <?php if (count($products) > 0): ?>
    <div class="products-from-db center">
        <h3>Our Menu (Updated Daily)</h3>
        <p><em>All items are loaded from our database</em></p>
        
        <?php
        // 按类别分组产品
        $categories = [];
        foreach ($products as $product) {
            $categories[$product['category']][] = $product;
        }
        
        foreach ($categories as $category => $items):
        ?>
        <div style="margin: 30px 0;">
            <h4 style="color: #333; border-bottom: 2px solid #ff9900; display: inline-block; padding-bottom: 5px;">
                <?php echo $category; ?>
            </h4>
            
            <!-- 这里是新的产品网格布局 -->
            <div class="product-grid">
                <?php foreach ($items as $item): ?>
                <div class="product-card">
                    <?php if (!empty($item['image']) && file_exists('images/' . $item['image'])): ?>
                    <img src="images/<?php echo $item['image']; ?>" 
                        alt="<?php echo $item['name']; ?>"
                        class="product-image">
                    <?php else: ?>
                    <div style="height: 150px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; color: #999;">
                        No Image
                    </div>
                    <?php endif; ?>
                    <div class="product-info">
                        <div class="product-name"><?php echo $item['name']; ?></div>
                        <div class="product-price">$<?php echo $item['price']; ?></div>
                        <?php if ($item['is_featured']): ?>
                        <div class="featured-badge">Featured</div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <!-- 原来的内容（完全不变） -->
    <div id="mainContent">
        <hr>
        <div id="mainPictures" class="center">
            <table>
                <tr>
                    <td><img src="images/Coffee-and-Pastries.png" height=auto width="490"></td>
                    <td><img src="images/Cake-Vitrine.png" height=auto width="450"></td>
                </tr>
            </table>
            <hr>
            <p>The Caf&eacute; offers an assortment of delicious and delectable pastries and coffees that will put a smile on your face. From cookies to croissants, tarts and cakes, each treat is specially prepared to excite your tastebuds and brighten your day!</p>
            <br>
            <table>
                <tr>
                    <td bgcolor="aquamarine">
                        <div class="cursiveText">Frank bakes a rich variety of cookies. Try them all!</div>
                        <table>
                            <tr>
                                <td><img src="images/Cookies.png" height=auto width="300"></td>
                            </tr>
                        </table>
                    </td>
                    <td bgcolor="orange">
                        <table>
                            <tr>
                                <td><img src="images/Cup-of-Hot-Chocolate.png" height=auto width="200"></td>
                                <td class="cursiveText">Tea<br>Coffee<br>Latte<br>Hot Chocolate<br>Yes, we have it!</td>
                            </tr>
                        </table>
                    </td>
                    <td bgcolor="aquamarine">
                        <div class="cursiveText">Our tarts are always a customer favorite!<br><br></div>
                        <table>
                            <tr>
                                <td><img src="images/Strawberry-Tarts.png" height=auto width="170"></td>
                                <td><img src="images/Strawberry-&-Blueberry-Tarts.png" height=auto width="170"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <hr>
        </div>
    </div>

    <div id="aboutUs" class="center">
        <hr>
        <div>
            <h2>About Us</h2>
        </div>
            <table>
                <tr>
                    <td><img src="images/Cafe-Owners.png" height=auto width="400"></td>
                    <td><p>Frank and Martha have been adding sweetness to their customers's lives since 2016. Both of them will personally greet you with a welcoming smile when you visit! Frank's recipes have been passed down from his mother and use simple and fresh ingredients to produce delightful flavors.</p></td>
                </tr>
            </table>
            <hr>
    </div>

    <div id="ContactUs" align="center">
        <hr>
        <div>
            <h2>Contact Us</h2>
        </div>
        <table>
            <tr>
                <td><img src="images/Coffee-Shop.png" height=auto width="120"></td>
            </tr>
        </table>
        <div><p>123 Sweet Tooth St.<br>London SW1A 0AA, UK<br>Tel: +44-12-12345678</p></div>
        <div>
            <h3>Hours</h3>
        </div>
        <div>Weekdays: 6:00am - 6:00pm<br>Saturday: 7:00am - 7:00pm<br>Closed on Sundays</div>
    </div>

    <div id="Copyright" class="center">
        <h5>
            <p>&copy; <?php echo date("Y"); ?>, Mom & Pop Cafe. All rights reserved.</p>
            <p><small>Page served by PHP | Menu items loaded from MySQL database</small></p>
        </h5>
    </div>

    <?php
    // 关闭数据库连接
    if (!$conn->connect_error) {
        $conn->close();
    }
    ?>
</body>
</html>