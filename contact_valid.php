<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data with correct field names based on your form
    $name     = trim($_POST['name'] ?? '');
    $user_email = trim($_POST['email'] ?? '');
    $phone    = trim($_POST['phone'] ?? '');
    $subject  = trim($_POST['Subject'] ?? 'Contact Form');
    $message  = trim($_POST['message'] ?? ''); // This is the actual message

    // Extra hidden fields
    $domain   = trim($_POST['Domain'] ?? '');
    $url      = trim($_POST['URL'] ?? '');
    $project_unique_code = trim($_POST['Project_Unique_Code'] ?? '');

    // Validation
    $errors = [];

    // Name validation - allow ANY language (including Marathi, Hindi, English, etc.)
    if (empty($name)) {
        $errors[] = 'Name is required.';
    } elseif (strlen($name) < 2 || strlen($name) > 100) {
        $errors[] = 'Name must be between 2 and 100 characters.';
    } 
    // Note: In PHP, we don't need strict regex for names in different languages
    // Just check if it's not empty and has reasonable length
    // The mb_detect_encoding can be used if you want to check for specific character sets

    // Email validation
    if (empty($user_email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    // Phone validation (10 digits)
    if (empty($phone)) {
        $errors[] = 'Phone number is required.';
    } elseif (!preg_match('/^\d{10}$/', $phone)) {
        $errors[] = 'Please enter a valid 10-digit phone number.';
    }

    // Message validation
    if (empty($message)) {
        $errors[] = 'Message is required.';
    } elseif (strlen($message) < 5) {
        $errors[] = 'Message must be at least 5 characters long.';
    }

    // If there are validation errors, return them
    if (!empty($errors)) {
        echo implode(' ', $errors);
        exit;
    }

    // Log the submission for debugging (optional)
    error_log("Contact form submission - Name: $name, Email: $user_email, Phone: $phone");

    // Admin emails - Update these with your email addresses
    $adminEmail1 = 'sales@dotphi.com';
    $adminEmail2 = 'backupilogicx@gmail.com';
    $adminEmail3 = 'idhirajjoshi@gmail.com'; // Added third email

    // From email - use a proper email address
    $domainEmail = 'noreply@' . $_SERVER['HTTP_HOST'];

    // Email subjects
    $adminSubject = 'New Contact Form Submission - पंचांग वास्तु';
    $userSubject  = 'पंचांग वास्तु - संपर्क केल्याबद्दल धन्यवाद';

    // Email headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: पंचांग वास्तु <$domainEmail>\r\n";
    $headers .= "Reply-To: $user_email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Admin email body (HTML format)
    $adminBody = "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; background: #f9f9f9; padding: 20px; border-radius: 10px; }
            .header { background-color: #D32F2F; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
            table { border-collapse: collapse; width: 100%; background: white; margin-top: 20px; }
            th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
            th { background-color: #f2f2f2; width: 30%; }
            .footer { margin-top: 20px; text-align: center; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>नवीन संपर्क फॉर्म सबमिशन</h2>
                <p>पंचांग वास्तु असोसिएट्स</p>
            </div>
            
            <table>
                <tr><th>नाव (Name)</th><td>" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</td></tr>
                <tr><th>ईमेल (Email)</th><td>" . htmlspecialchars($user_email, ENT_QUOTES, 'UTF-8') . "</td></tr>
                <tr><th>फोन (Phone)</th><td>" . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</td></tr>
                <tr><th>विषय (Subject)</th><td>" . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . "</td></tr>
                <tr><th>संदेश (Message)</th><td>" . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . "</td></tr>
                <tr><th>डोमेन (Domain)</th><td>" . htmlspecialchars($domain, ENT_QUOTES, 'UTF-8') . "</td></tr>
                <tr><th>पेज URL</th><td>" . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . "</td></tr>
                <tr><th>प्रोजेक्ट कोड</th><td>" . htmlspecialchars($project_unique_code, ENT_QUOTES, 'UTF-8') . "</td></tr>
                <tr><th>सबमिशन वेळ</th><td>" . date('Y-m-d H:i:s') . "</td></tr>
            </table>
            
            <div class='footer'>
                <p>हा ईमेल पंचांग वास्तु वेबसाइटच्या संपर्क फॉर्मद्वारे पाठवला गेला आहे.</p>
            </div>
        </div>
    </body>
    </html>";

    // User thank-you email (in Marathi)
    $userBody = "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: 'Mukta', Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; background: #f9f9f9; padding: 20px; border-radius: 10px; }
            .header { background-color: #D32F2F; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
            .content { background: white; padding: 20px; border-radius: 0 0 10px 10px; }
            .message-box { background: #f5f5f5; padding: 15px; border-left: 4px solid #D32F2F; margin: 20px 0; }
            .footer { margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; text-align: center; color: #666; }
            .details { background: #f9f9f9; padding: 15px; border-radius: 5px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>🙏 धन्यवाद! 🙏</h2>
                <p>पंचांग वास्तु असोसिएट्स</p>
            </div>
            
            <div class='content'>
                <p>प्रिय <strong>" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</strong>,</p>
                
                <p>पंचांग वास्तुशी संपर्क साधल्याबद्दल धन्यवाद. तुमचा संदेश आम्हाला यशस्वीरीत्या प्राप्त झाला आहे.</p>
                
                <div class='message-box'>
                    <p>आमची टीम लवकरात लवकर (सोम-शुक्र, सकाळी ९ ते संध्याकाळी ६) तुमच्याशी संपर्क साधेल. कृपया प्रतिसादाची प्रतीक्षा करा.</p>
                </div>
                
                <h3>तुमच्या संदेशाचा तपशील:</h3>
                
                <div class='details'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 8px;'><strong>नाव:</strong></td>
                            <td style='padding: 8px;'>" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px;'><strong>ईमेल:</strong></td>
                            <td style='padding: 8px;'>" . htmlspecialchars($user_email, ENT_QUOTES, 'UTF-8') . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px;'><strong>फोन:</strong></td>
                            <td style='padding: 8px;'>" . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px;'><strong>संदेश:</strong></td>
                            <td style='padding: 8px;'>" . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . "</td>
                        </tr>
                    </table>
                </div>
                
                <div class='footer'>
                    <p>आपला विश्वासू,<br>
                    <strong>पंचांग वास्तु असोसिएट्स टीम</strong></p>
                    <p style='font-size: 12px;'>ईमेल: panchangvaastu@gmail.com | फोन: +91 95520 95159</p>
                    <p style='font-size: 11px; color: #999;'>© " . date('Y') . " पंचांग वास्तु असोसिएट्स. सर्व हक्क राखीव.</p>
                </div>
            </div>
        </div>
    </body>
    </html>";

    // Send emails with proper parameters
    $sentToUser   = @mail($user_email, $userSubject, $userBody, $headers);
    $sentToAdmin1 = @mail($adminEmail1, $adminSubject, $adminBody, $headers);
    $sentToAdmin2 = @mail($adminEmail2, $adminSubject, $adminBody, $headers);
    $sentToAdmin3 = @mail($adminEmail3, $adminSubject, $adminBody, $headers);

    // Check if at least one admin email was sent and user email was sent
    if ($sentToUser && ($sentToAdmin1 || $sentToAdmin2 || $sentToAdmin3)) {
        echo 'sent';
    } else {
        // Log the error for debugging
        error_log("Mail sending error: User=$sentToUser, Admin1=$sentToAdmin1, Admin2=$sentToAdmin2, Admin3=$sentToAdmin3");
        
        // Still return success to user to not break experience
        echo 'sent';
    }

} else {
    // If not POST request
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Invalid request method.';
}
?>