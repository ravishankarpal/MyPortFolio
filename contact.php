<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212; /* Dark background */
            color: #f4f4f4; /* Light text color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contact-form {
            background-color: #1e1e1e; /* Slightly lighter dark background for form */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 400px;
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff; /* White heading color */
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #333; /* Dark border */
            border-radius: 5px;
            background-color: #2a2a2a; /* Dark background for inputs */
            color: #ffffff; /* Light text for inputs */
        }

        .contact-form input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #218838;
        }

        .contact-form .success-message,
        .contact-form .error-message {
            text-align: center;
            margin-top: 10px;
        }

        .success-message {
            color: #28a745;
        }

        .error-message {
            color: #dc3545;
        }
    </style>
</head>
<body>

    <div class="contact-form">
        <h2>Contact Us</h2>
        <?php
        // Initialize the message variables
        $success_message = '';
        $error_message = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Email details
            $to = 'rshankarpl96@gmail.com';
            $subject = "$name wants to connect with you";
            $body = "You have received a new message from your website contact form.\n\n".
                    "Here are the details:\n\n".
                    "Name: $name\n".
                    "Email: $email\n".
                    "Message:\n$message";
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";

            // Send the email
            if (mail($to, $subject, $body, $headers)) {
                $success_message = "Message sent successfully!";
            } else {
                $error_message = "Failed to send message. Please try again.";
            }
        }
        ?>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br>

            <input type="submit" value="Send Message">
        </form>

        <?php
        // Display success or error message
        if (!empty($success_message)) {
            echo '<div class="success-message">' . $success_message . '</div>';
        }

        if (!empty($error_message)) {
            echo '<div class="error-message">' . $error_message . '</div>';
        }
        ?>
    </div>

</body>
</html>
