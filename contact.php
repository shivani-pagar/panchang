<style>
    /* Input Fields Styling */
    .classic-input {
        background-color: #fdfdfd !important;
        border: 1px solid #eee !important;
        padding: 15px 20px !important;
        border-radius: 12px !important;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        margin-bottom: 5px;
    }

    .classic-input:focus {
        background-color: #fff !important;
        border-color: #FFB300 !important;
        box-shadow: 0 5px 15px rgba(255, 179, 0, 0.1) !important;
    }

    /* Submit Button Custom Styling */
    .btn-classic-submit {
        background: linear-gradient(45deg, #D32F2F, #B71C1C);
        color: #fff !important;
        border: none;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 10px 20px rgba(211, 47, 47, 0.2);
        transition: 0.3s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .btn-classic-submit:hover:not(:disabled) {
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(211, 47, 47, 0.4);
        background: linear-gradient(45deg, #B71C1C, #D32F2F);
    }
    
    .btn-classic-submit:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    /* Info Card Styling */
    .classic-info-card {
        border-radius: 15px;
        border: 1px solid #f1f1f1;
        transition: all 0.3s ease;
        border-left: 4px solid #FFB300;
    }

    .classic-info-card:hover {
        transform: translateX(5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
    }

    /* Info Icon Box */
    .info-icon-box {
        width: 50px;
        height: 50px;
        background: #FFF3E0;
        color: #D32F2F;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    /* Small Action Button */
    .pbmit-btn-sm-classic {
        font-size: 0.8rem;
        font-weight: 700;
        color: #D32F2F;
        text-transform: uppercase;
        text-decoration: none;
        border-bottom: 2px solid #FFB300;
        padding-bottom: 3px;
        transition: 0.3s;
    }

    .pbmit-btn-sm-classic:hover {
        color: #FFB300;
    }

    /* Message styling */
    #form_response {
        padding: 10px 15px;
        border-radius: 8px;
        font-weight: 500;
        display: none;
    }
    
    #form_response.show {
        display: block;
    }
    
    #form_response.success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    #form_response.error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    /* Responsive Fixes */
    @media (max-width: 991px) {
        .contact-form-wrapper {
            padding: 30px 20px;
        }

        .contact-info-sidebar {
            margin-top: 30px;
        }
    }
</style>

<?php
$domain = $_SERVER['SERVER_NAME']; 
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); 
include 'header.php'; 
?>

<div class="pbmit-title-bar-wrapper" style="background-image:url(images/guruji/ser-img/aboubg.jpg);">
    <div class="container paddcon">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">आमच्याशी संपर्क साधा</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>मुख्यपृष्ठ</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">संपर्क</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'sachin_guruji.php'; ?>
            </div>

            <?php include 'inner-form.php'; ?>

        </div>
    </div>
</div>

<section class="contact-section-classic py-5" style="background-color: #fffaf5; font-family: 'Mukta', sans-serif;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="contact-form-wrapper p-4 p-md-5 bg-white shadow-sm" style="border-radius: 20px; border-top: 5px solid #D32F2F;">
                    <div class="pbmit-heading-subheading mb-4">
                        <h4 class="pbmit-subtitle text-orange fw-bold text-uppercase" style="color: #ff8c00; letter-spacing: 2px;">संपर्कात रहा</h4>
                        <h2 class="pbmit-title display-6 fw-bold">आमच्याशी <strong style="color: #D32F2F;">संपर्क साधा</strong></h2>
                    </div>

                    <form method="post" id="contactForm" onsubmit="return false;">
                        <div class="row g-3">
                            <div id="form_response" class="col-md-12"></div>

                            <div class="col-md-12">
                                <input type="text" name="name" id="name" class="form-control classic-input" placeholder="आपले नाव" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="phone" id="phone" class="form-control classic-input" placeholder="मोबाईल नंबर" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" class="form-control classic-input" placeholder="ईमेल" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="40" rows="4" class="form-control classic-input" placeholder="आपला संदेश" required=""></textarea>
                            </div>

                            <!-- Hidden fields for PHP email script and Google Sheets -->
                            <input type="hidden" name="Subject" value="मराठी संपर्क फॉर्म">
                            <input type="hidden" name="Comments" id="comments-hidden" value="">
                            <input type="hidden" name="Domain" value="<?php echo $domain; ?>">
                            <input type="hidden" name="URL" value="<?php echo $curPageName; ?>">
                            <input type="hidden" name="Project_Unique_Code" value="panchangvastu180">

                            <div class="col-md-12 text-center text-md-start">
                                <button type="submit" id="submit_btn" class="pbmit-btn btn-classic-submit">
                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                    <span class="btn-text">संदेश पाठवा</span>
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="ifram mt-5 overflow-hidden shadow-sm" style="border-radius: 15px; border: 1px solid #eee;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.123456789!2d73.7654321!3d19.9876543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDU5JzE1LjYiTiA3M8KwNDUnNTUuNiJF!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-info-sidebar h-100 d-flex flex-column gap-4 py-md-2">
                    <div class="classic-info-card p-4 bg-white shadow-sm">
                        <div class="d-flex align-items-start gap-3">
                            <div class="info-icon-box">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="info-details">
                                <h5 class="fw-bold mb-1" style="color: #D32F2F;">ईमेल</h5>
                                <a href="mailto:panchangvaastu@gmail.com" class="text-decoration-none text-muted">panchangvaastu@gmail.com</a>
                                <div class="mt-3">
                                    <a href="mailto:panchangvaastu@gmail.com" class="pbmit-btn-sm-classic">मेल करा</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="classic-info-card p-4 bg-white shadow-sm">
                        <div class="d-flex align-items-start gap-3">
                            <div class="info-icon-box">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="info-details">
                                <h5 class="fw-bold mb-1" style="color: #D32F2F;">फोन</h5>
                                <a href="tel:+919552095159" class="text-decoration-none text-muted">(+91) 95520 95159</a>
                                <div class="mt-3">
                                    <a href="tel:+919552095159" class="pbmit-btn-sm-classic">कॉल करा</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="classic-info-card p-4 bg-white shadow-sm border-gold-left">
                        <div class="d-flex align-items-start gap-3">
                            <div class="info-icon-box">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-details">
                                <h5 class="fw-bold mb-1" style="color: #D32F2F;">पत्ता</h5>
                                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                                    पंचांग वास्तु असोसिएट्स, रुपाली अपार्टमेंट, दुकान क्र. 1, कॉलेज रोड, बी.वाय.के. सिग्नल मागे, नाशिक - 422005
                                </p>
                                <div class="mt-3">
                                    <a href="#map" class="pbmit-btn-sm-classic">पत्ता पहा</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<!-- jQuery first, then your script -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
// Wait for jQuery to be fully loaded
(function($) {
    "use strict";
    
    $(document).ready(function() {
        console.log("Document ready - Contact form initialized");
        
        // Make sure we're targeting the correct form
        var $contactForm = $('#contactForm');
        var $submitBtn = $('#submit_btn');
        var $formResponse = $('#form_response');
        
        if (!$contactForm.length) {
            console.error("Contact form not found!");
            return;
        }
        
        // Remove any existing event handlers and attach new one
        $contactForm.off('submit').on('submit', function(e) {
            e.preventDefault();
            console.log("Form submitted - processing...");
            
            // Get form values
            var name = $('#name').val().trim();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var message = $('#message').val().trim();
            
            console.log("Form values:", {name: name, phone: phone, email: email, message: message});
            
            // Project specific variables
            var project_unique_code = "panchangvastu180";
            var domain = "<?php echo $domain; ?>";
            var url = "<?php echo $curPageName; ?>";
            
            // SIMPLE VALIDATION - No complex regex for name
            var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var mobile_regex = /^\d{10}$/;
            
            // Clear previous messages
            $formResponse.removeClass('show success error').empty();
            
            // SIMPLE NAME VALIDATION - Just check if not empty
            if (name === "") {
                showMessage('** कृपया आपले नाव प्रविष्ट करा **', 'error');
                $("#name").focus();
                return false;
            }
            
            // Optional: Check if name has at least 2 characters
            if (name.length < 2) {
                showMessage('** नाव किमान 2 अक्षरे असावी **', 'error');
                $("#name").focus();
                return false;
            }
            
            // Phone validation
            if (phone === "") {
                showMessage('** कृपया मोबाईल नंबर प्रविष्ट करा **', 'error');
                $("#phone").focus();
                return false;
            }
            
            if (!mobile_regex.test(phone)) {
                showMessage('** कृपया वैध 10-अंकी मोबाईल नंबर प्रविष्ट करा **', 'error');
                $("#phone").focus();
                return false;
            }
            
            // Email validation
            if (email === "") {
                showMessage('** कृपया ईमेल प्रविष्ट करा **', 'error');
                $("#email").focus();
                return false;
            }
            
            if (!email_regex.test(email)) {
                showMessage('** कृपया वैध ईमेल प्रविष्ट करा **', 'error');
                $("#email").focus();
                return false;
            }
            
            // Message validation
            if (message === "") {
                showMessage('** कृपया आपला संदेश प्रविष्ट करा **', 'error');
                $("#message").focus();
                return false;
            }
            
            if (message.length < 3) {
                showMessage('** संदेश किमान 3 अक्षरे असावा **', 'error');
                $("#message").focus();
                return false;
            }
            
            // Disable button and show loading
            $submitBtn.prop('disabled', true);
            $('.form-btn-loader').removeClass('d-none');
            $submitBtn.find('.btn-text').text('पाठवत आहे...');
            
            // Copy message to Comments field
            $('#comments-hidden').val(message);
            
            // Prepare form data
            var form = $('#contactForm')[0];
            var formData = new FormData(form);
            
            // Add extra required fields
            formData.append("Project_Unique_Code", project_unique_code);
            formData.append("Domain", domain);
            formData.append("URL", url);
            
            // Log what we're sending
            console.log("Sending data:", {
                name: name,
                phone: phone,
                email: email,
                message: message
            });
            
            // 1) FIRST send to PHP email script
            console.log("Sending to PHP email script...");
            
            $.ajax({
                url: "contact_valid.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                timeout: 30000,
                
                success: function(response) {
                    console.log("PHP Response:", response);
                    console.log("Response type:", typeof response);
                    console.log("Response trimmed:", response.trim());
                    
                    // Check if PHP script returned success
                    if(response.trim() === 'sent') {
                        console.log("PHP success, now sending to Google Sheets...");
                        
                        // 2) THEN send to Google Sheets
                        $.ajax({
                            url: "https://script.google.com/macros/s/AKfycbz2r7iZUb-qftS2jZRSwtPUv6avKzx2cW7A80_XLpLuxK2SW8qwT8wARCP3uvQ3-dgX/exec",
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            timeout: 30000,
                            
                            success: function(sheetResponse) {
                                console.log("Sheet Response:", sheetResponse);
                                showMessage('** धन्यवाद! आम्ही लवकरच तुमच्याशी संपर्क साधू **', 'success');
                                $contactForm[0].reset();
                            },
                            
                            error: function(xhr, status, error) {
                                console.error("Sheet Error:", error, status);
                                console.error("Sheet XHR:", xhr);
                                // Still show success since PHP email was sent
                                showMessage('** धन्यवाद! तुमचा संदेश पाठवला गेला आहे **', 'success');
                                $contactForm[0].reset();
                            },
                            
                            complete: function() {
                                // Re-enable button after Google Sheets completes
                                $submitBtn.prop('disabled', false);
                                $('.form-btn-loader').addClass('d-none');
                                $submitBtn.find('.btn-text').text('संदेश पाठवा');
                            }
                        });
                        
                    } else {
                        // PHP script returned an error
                        console.error("PHP Error Response:", response);
                        showMessage('** त्रुटी: ' + response + ' **', 'error');
                        
                        // Re-enable button
                        $submitBtn.prop('disabled', false);
                        $('.form-btn-loader').addClass('d-none');
                        $submitBtn.find('.btn-text').text('संदेश पाठवा');
                    }
                },
                
                error: function(xhr, status, error) {
                    console.error("PHP AJAX Error:", error, status);
                    console.error("XHR Details:", xhr);
                    showMessage('** सर्व्हर त्रुटी. कृपया पुन्हा प्रयत्न करा. **', 'error');
                    
                    // Re-enable button
                    $submitBtn.prop('disabled', false);
                    $('.form-btn-loader').addClass('d-none');
                    $submitBtn.find('.btn-text').text('संदेश पाठवा');
                }
            });
            
            return false;
        });
        
        // Helper function to show messages
        function showMessage(text, type) {
            $formResponse
                .text(text)
                .removeClass('success error')
                .addClass('show ' + type);
            
            // Auto hide after 10 seconds
            setTimeout(function() {
                $formResponse.removeClass('show');
            }, 10000);
        }
        
        // Also handle any other forms on the page
        $('form').not('#contactForm').on('submit', function() {
            console.log("Other form submitted - ignoring");
            return true; // Allow other forms to submit normally
        });
        
    });
    
})(jQuery);
</script>