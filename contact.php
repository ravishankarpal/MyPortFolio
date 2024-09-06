<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contact-form {
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 400px;
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #2a2a2a;
            color: #ffffff;
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


        .alert,
        .success {
            width: 400px;
            text-align: center;
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: whitesmoke;
            padding: 8px 0;
        }

        .alert {
            background-color: rgb(252, 59, 59);
        }

        .success {
            background-color: rgb(44, 158, 24);
        }
    </style>
</head>

<body>

    <div class="contact-form">
        <h2>Contact Us</h2>

        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br>

            <input type="submit" name="send" value="Send Message">
        </form>

        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        if (isset($_POST['send'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            require 'src/Exception.php';
            require 'src/PHPMailer.php';
            require 'src/SMTP.php';
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ravishankarportfolio@gmail.com';
                $mail->Password = 'rbbw xjdc gkji mavw';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;
                $mail->setFrom('ravishankarportfolio@gmail.com', 'My Port Folio');
                $mail->addAddress('rshankarpl96@gmail.com', 'Conatct Form');
                $mail->isHTML(true);
                $mail->Subject = 'Port Folio Enqiry';

                // Create a variable for the email body
                $emailBody = "
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
            background-color: white;
            border-radius: 0 0 10px 10px;
        }
        .content p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
        }
        .content strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
        </div>
        <div class='content'>
            <p><strong>Sender Name:</strong> $name</p>
            <p><strong>Sender Email:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </div>
    </div>
</body>
</html>
";



                $mail->Body = $mail->Body = $emailBody;
                $mail->send();
                echo "<div class = 'success' id = 'successMessage'> Message has been sent</div>";
            } catch (Exception $e) {
                echo "<div class = 'alert' id = 'errorMessage'> Message could not be sent</div>";
            }
        }
        ?>
    </div>

    <script>
        setTimeout(function () {
            var successMessage = document.getElementById('successMessage');
            var errorMessage = document.getElementById('errorMessage');

            if (successMessage) {
                successMessage.style.display = 'none';
            }

            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 10000); 
    </script>

</body>

</html>