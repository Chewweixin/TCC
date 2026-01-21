-- Create database
CREATE DATABASE IF NOT EXISTS bakery_db;
USE bakery_db;

-- Create items table
CREATE TABLE IF NOT EXISTS items (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    quantity INT(11) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO items (name, category, quantity, price) VALUES
('Chocolate Cake', 'Cake', 25, 2.00),
('Vanilla Cupcake', 'Cupcake', 50, 1.50),
('Whole Wheat Bread', 'Bread', 30, 3.50),
('Croissant', 'Pastry', 40, 2.25),
('Chocolate Chip Cookie', 'Cookie', 100, 0.75),
('Glazed Donut', 'Donut', 60, 1.25),
('Blueberry Muffin', 'Muffin', 35, 1.75),
('Apple Pie', 'Pie', 15, 5.99),
('Bagel', 'Bread', 45, 1.00),
('Brownie', 'Dessert', 80, 1.50);