<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <!-- Container to Center the Contact Form -->
    <div class="container-wrapper">
        <div class="contact-container">
            <h1>Contact Us</h1>
            <p>If you have any questions, feel free to reach out to us using the form below.</p>

            <!-- Form for submitting the data -->
            <form action="Result" method="POST" class="contact-form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>
