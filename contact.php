<?php include 'header.php'; ?>

<h1 class="page-title">Contact Us</h1>

<div class="content-container">
    <p>Have questions or need support with the HOBANIDPETT bakery management system?</p>
    
    <div class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Email:</strong> support@hobanidpett.com</p>
        <p><strong>Phone:</strong> (123) 456-7890</p>
        <p><strong>Address:</strong> 123 Bakery Street, Sweet City, SC 12345</p>
    </div>
    
    <div class="contact-form">
        <h2>Send us a Message</h2>
        <form>
            <div class="form-group">
                <label for="contact_name">Your Name:</label>
                <input type="text" id="contact_name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="contact_email">Your Email:</label>
                <input type="email" id="contact_email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn">Send Message</button>
            </div>
        </form>
    </div>
</div>

</div>
</main>
</body>
</html>