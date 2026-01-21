<?php include 'header.php'; ?>

<style>
    /* About Page Custom Styles */
    .about-container {
        max-width: 1200px; /* Wider container */
        margin: 0 auto;
        background: 
            linear-gradient(rgba(245, 240, 230, 0.8), rgba(245, 240, 230, 0.8)),
            url('images/about-us-background.png') no-repeat center center;
        background-size: cover;
        padding: 60px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 50px;
        border: 2px solid #f0e6d6;
    }
    
    .about-title {
        font-size: 2.0rem;
        color: #d4a574;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 800;
        letter-spacing: 3px;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 20px;
    }
    
    .about-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background-color: #d4a574;
    }
    
    .about-content {
        font-size: 1.3rem;
        line-height: 1.9;
        color: #555;
        margin-bottom: 30px;
        text-align: center;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .about-content p {
        margin-bottom: 25px;
        padding: 0 20px;
    }
    
    .features-section {
        background-color: rgba(255, 255, 255, 0.85);
        padding: 40px;
        border-radius: 15px;
        margin-top: 50px;
        border: 1px solid #f0e6d6;
    }
    
    .features-title {
        font-size: 2.2rem;
        color: #d4a574;
        text-align: center;
        margin-bottom: 30px;
        font-weight: 800;
        letter-spacing: 1px;
    }
    
    .features-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        list-style-type: none;
        padding: 0;
        max-width: 900px;
        margin: 0 auto;
    }
    
    .feature-item {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-left: 5px solid #d4a574;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .feature-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .feature-item:before {
        content: "🍰";
        font-size: 1.8rem;
        margin-right: 15px;
        vertical-align: middle;
    }
    
    .feature-item li {
        font-size: 1.2rem;
        color: #666;
        line-height: 1.6;
        display: inline;
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .features-list {
            grid-template-columns: 1fr;
        }
        
        .about-container {
            padding: 40px 30px;
            margin: 0 15px;
        }
    }
    
    @media (max-width: 768px) {
        .about-title {
            font-size: 2.5rem;
        }
        
        .about-content {
            font-size: 1.1rem;
        }
        
        .features-section {
            padding: 30px 20px;
        }
        
        .feature-item {
            padding: 20px;
        }
    }
</style>

<div class="about-container">
    <h1 class="about-title">About MALTESE</h1>
    
    <div class="about-content">
        <p>MALTESE is a premium bakery management system designed to help bakery owners manage their inventory, track products, and streamline operations.
           Our system allows you to easily add, view, edit, and delete bakery items with a user-friendly interface that makes inventory management a breeze.
           With MALTESE, you can focus on creating delicious baked goods while we handle the organizational aspects of your business.</p>
    </div>
    
    <div class="features-section">
        <h2 class="features-title">Our Features</h2>
        
        <ul class="features-list">
            <div class="feature-item">
                <li>Easy inventory management</li>
            </div>
            <div class="feature-item">
                <li>Real-time quantity tracking</li>
            </div>
            <div class="feature-item">
                <li>Simple add/edit/delete operations</li>
            </div>
            <div class="feature-item">
                <li>Category organization</li>
            </div>
            <div class="feature-item">
                <li>Price management</li>
            </div>
            <div class="feature-item">
                <li>User-friendly interface</li>
            </div>
        </ul>
    </div>
</div>

</div>
</main>
</body>
</html>