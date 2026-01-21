<?php
// Set current page for active nav styling
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maltese - Bakery Management</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #fef9f3;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header & Navigation */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: #d4a574;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .logo-img {
            height: 90px;
            width: auto;
            object-fit: contain;
            border-radius: 5px;
        }

        .logo-container span {
            font-size: 2.5rem;
            font-weight: bold;
            font-weight: 700;
            color: #d4a574;
            letter-spacing: 2px;
        }
        
        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 10px;
        }
        
        nav a {
            text-decoration: none;
            color: #666;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        nav a:hover, nav a.active {
            background-color: #d4a574;
            color: white;
        }
        
        /* Main Content */
        main {
            min-height: 70vh;
            padding: 40px 0;
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            background-color: #d4a574;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }
        
        .btn:hover {
            background-color: #c1915c;
        }
        
        .btn.cancel {
            background-color: #95a5a6;
        }
        
        .btn.cancel:hover {
            background-color: #7f8c8d;
        }
        
        /* Messages */
        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
        
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }
        
        /* Page Titles */
        .page-title {
            font-size: 2rem;
            color: #d4a574;
            margin-bottom: 30px;
            text-align: center;
        }
        
        /* Home Page */
        .hero {
            text-align: center;
            padding: 80px 0;
            background: 
                linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), /* White overlay */
                url('images/bakery-background.png') no-repeat center center;
            background-size: cover;
            border-radius: 15px;
            margin-bottom: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .hero h1 {
            font-size: 2.8rem;
            color: #d4a574;
            margin-bottom: 20px;
            font-weight: 800;
            letter-spacing: 1px;
        }
        
        .hero p {
            font-size: 1.2rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.8;
        }
        
        /* Table Styles */
        .table-container {
            overflow-x: auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 20px;
            margin-bottom: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        th {
            background-color: #f9f3ec;
            color: #d4a574;
            font-weight: 600;
        }
        
        tr:hover {
            background-color: #fef9f3;
        }
        
        .action-links a {
            color: #d4a574;
            text-decoration: none;
            margin-right: 15px;
            font-weight: 500;
        }
        
        .action-links a:hover {
            text-decoration: underline;
        }
        
        .action-links a.delete {
            color: #e74c3c;
        }
        
        .add-item-btn {
            text-align: center;
            margin-top: 30px;
        }
        
        /* Form Styles */
        .form-container, .content-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-weight: 500;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border 0.3s ease;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #d4a574;
        }
        
        textarea {
            resize: vertical;
        }
        
        /* Contact Page */
        .contact-info {
            margin: 30px 0;
            padding: 20px;
            background-color: #f9f3ec;
            border-radius: 5px;
        }
        
        .contact-info h2 {
            color: #d4a574;
            margin-bottom: 15px;
        }
        
        .contact-form {
            margin-top: 30px;
        }
        
        .contact-form h2 {
            color: #d4a574;
            margin-bottom: 20px;
        }
        
        /* Footer */
        footer {
            text-align: center;
            padding: 30px 0;
            color: #888;
            border-top: 1px solid #eee;
            margin-top: 50px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            nav {
                gap: 10px;
            }
            
            nav a {
                padding: 6px 12px;
                font-size: 0.9rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .form-container, .content-container {
                padding: 20px;
            }
            
            .btn {
                display: block;
                margin-bottom: 10px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <div class="logo-container">
                    <img src="images/bakery-logo.png" alt="Maltese Bakery Logo" class="logo-img">
                    <span>Maltese Bakery</span>
                </div>
            </div>
            <nav>
                <a href="homepage.php" class="<?php echo ($current_page == 'homepage.php' || $current_page == 'index.php') ? 'active' : ''; ?>">HOME</a>
                <a href="view.php" class="<?php echo $current_page == 'view.php' ? 'active' : ''; ?>">VIEW ITEMS</a>
                <a href="add.php" class="<?php echo $current_page == 'add.php' ? 'active' : ''; ?>">ADD ITEM</a>
                <a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">ABOUT</a>
                <a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">CONTACT US</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">