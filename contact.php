<?php include 'header.php'; ?>

<style>
    /* Contact Page Custom Styles */
    .contact-container {
        background: 
            linear-gradient(rgba(255, 248, 240, 0.85), rgba(255, 248, 240, 0.85)),
            url('images/contact-background.png') no-repeat center center;
        background-size: cover;
        padding: 40px; 
        border-radius: 10px; 
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }
    
    .contact-container p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    
    .contact-info {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 25px;
        border-radius: 8px;
        margin-top: 25px;
        border: 1px solid #f0e6d6;
    }
    
    .contact-info h2 {
        color: #d4a574;
        margin-bottom: 20px;
        font-size: 1.5rem;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0e6d6;
    }
    
    .contact-info p {
        margin-bottom: 15px;
        padding-left: 25px;
        position: relative;
    }
    
    .contact-info p strong {
        color: #d4a574;
        min-width: 80px;
        display: inline-block;
    }
    
    .contact-info p:first-of-type:before {
        content: "📧";
        position: absolute;
        left: 0;
        top: 0;
    }
    
    .contact-info p:nth-of-type(2):before {
        content: "📞";
        position: absolute;
        left: 0;
        top: 0;
    }
    
    .contact-info p:last-of-type:before {
        content: "📍";
        position: absolute;
        left: 0;
        top: 0;
    }
</style>

<h1 class="page-title">Contact Us</h1>

<div class="content-container contact-container">
    <p>Have questions or need support with the Maltese bakery management system?</p>
    
    <div class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Email:</strong> support@maltese.com</p>
        <p><strong>Phone:</strong> (123) 456-7890</p>
        <p><strong>Address:</strong> 123 Bakery Street, Sweet City, SC 12345</p>
    </div>
</div>

</div>
</main>
</body>
</html>