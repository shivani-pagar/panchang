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
// Detect if using HTTPS or HTTP
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$domain = $_SERVER['SERVER_NAME'];
$fullDomain = $protocol . $domain; // This gives https://yourdomain.com

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
$fullURL = $protocol . $domain . $_SERVER["REQUEST_URI"]; // This gives complete URL

include 'header.php';
?>


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

<section class="testimonial-contact-section py-5" style="background-color: #fffaf5; font-family: 'Mukta', sans-serif;">
    <div class="container">
        <div class="row g-5 align-items-center">
            
            <!-- Left Column: Testimonial -->
            <div class="col-lg-6">
                <div class="testimonial-side pe-lg-4">
                    <h4 class="text-orange fw-bold text-uppercase mb-2" style="color: #ff8c00; letter-spacing: 2px;">अभिप्राय</h4>
                    <h2 class="display-6 fw-bold mb-4">आमच्यावर विश्वास ठेवणारे <br><span style="color: #ff8c00;">समाधानी ग्राहक</span></h2>
                    
                    <div class="swiper testimonial-swiper-mini">
                        <div class="swiper-wrapper">
                            <!-- Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
                                    <div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="fs-6 italic" style="color: #555;">"सचिन गुरुजींनी सुचवलेल्या वास्तु बदलांमुळे आमच्या घरात खूप सकारात्मकता आली आहे. विना तोडफोड केलेले उपाय अत्यंत प्रभावी ठरले."</p>
                                    <div class="d-flex align-items-center mt-3">
                                        <img src="images/homepage-1/avatar/img-01.png" class="rounded-circle me-3" width="60" height="60" alt="avatar">
                                        <h3 class="fw-bold mb-0">अमोल सोनवणे, <span class="fw-normal text-muted">पुणे</span></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
                                    <div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="fs-6 italic" style="color: #555;">"मुलीच्या लग्नाचे सर्व विधी गुरुजींनी अत्यंत शास्त्रोक्त पद्धतीने पार पाडले. मंत्रोच्चार आणि विधींचे महत्त्व त्यांनी खूप छान समजावून सांगितले."</p>
                                    <div class="d-flex align-items-center mt-3">
                                        <img src="images/homepage-1/avatar/img-02.png" class="rounded-circle me-3" width="60" height="60" alt="avatar">
                                        <h3 class="fw-bold mb-0">सौ. आशालता पाटील, <span class="fw-normal text-muted">नाशिक</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper pagination -->
                        <div class="swiper-pagination mt-4 position-relative"></div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Contact Form (exactly as second example) -->
            <div class="col-lg-6">
                <div class="contact-form-card p-5 bg-white shadow-lg" style="border-radius: 25px; border-top: 8px solid #ff8c00;">
                    <h3 class="fw-bold mb-2">चर्चा करण्यासाठी संपर्क साधा</h3>
                    <p class="text-muted mb-4">तुमच्या अडचणी सोडवण्यासाठी आजच आमच्याशी संपर्क साधा.</p>
                    
                    <form method="post" id="contactForm">
                        <div class="row g-3">
                            <div id="form_response" class="col-md-12"></div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">नाव</label>
                                <input type="text" name="name" id="name" class="form-control classic-input" placeholder="तुमचे नाव" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">ईमेल</label>
                                <input type="email" name="email" id="email" class="form-control classic-input" placeholder="तुमचा ईमेल" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">मोबाईल नंबर</label>
                                <input type="tel" name="phone" id="phone" class="form-control classic-input" placeholder="९१XXXXXXXX" required>
                            </div>
                            <div class="col-md-6 ">
                                <label class="form-label fw-bold ">सेवेचा प्रकार</label>
                                <select name="service" id="service" class="form-select classic-input" required>
                                    <option value="" selected disabled>निवडा...</option>
                                    <option>वास्तु कन्सल्टिंग</option>
                                    <option>ज्योतिष मार्गदर्शन</option>
                                    <option>पूजा विधी</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">संदेश</label>
                                <textarea name="message" id="message" class="form-control classic-input" rows="3" placeholder="तुमची समस्या थोडक्यात लिहा..." required></textarea>
                            </div>

                            <!-- Hidden fields for complete URL information (same as second section) -->
                            <input type="hidden" name="Full_Domain" id="full_domain" value="<?php echo $fullDomain; ?>">
                            <input type="hidden" name="Full_URL" id="full_url" value="<?php echo $fullURL; ?>">
                            <input type="hidden" name="Page_Name" id="page_name" value="<?php echo $curPageName; ?>">
                            <input type="hidden" name="Protocol" id="protocol" value="<?php echo $protocol; ?>">

                            <div class="col-12">
                                <button type="submit" id="submit_btn" class="btn btn-orange w-100 py-3 mt-2 fw-bold text-uppercase" style="background: linear-gradient(45deg, #D32F2F, #B71C1C); border: none; color: white; border-radius: 50px; box-shadow: 0 10px 20px rgba(211, 47, 47, 0.2);">
                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                    <span class="btn-text">माहिती पाठवा</span>
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="map-section-premium py-5" style="background-color: #ffffff; font-family: 'Mukta', sans-serif;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="section-title-wrapper">
                    <h4 class="text-orange fw-bold text-uppercase mb-2" style="color: #ff8c00; letter-spacing: 2px; font-size: 0.9rem;">आमचे स्थान</h4>
                    <h2 class="display-6 fw-bold text-dark">नकाशावर आम्हाला <strong style="color: #D32F2F;">शोधा</strong></h2>
                    <div class="divider-line mx-auto" style="width: 60px; height: 3px; background: #D32F2F; margin-top: 10px;"></div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="map-outer-frame shadow-lg p-2 bg-white" style="border-radius: 25px; border: 1px solid #ffe0b2;">
                    <div class="map-inner-container overflow-hidden" style="border-radius: 20px; position: relative; height: 450px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d468.63026350080673!2d73.76316220000001!3d20.006747353011278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdded41effaacb3%3A0xfc8bd65d5e7b070d!2sSachin%20Joshi%20Panchang%20Vaastu!5e0!3m2!1sen!2sin!4v1771239458484!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        
                        <div class="map-floating-card d-none d-lg-block">
                            <h5 class="fw-bold mb-2" style="color: #D32F2F;">पंचांग वास्तु असोसिएट्स</h5>
                            <p class="small text-muted mb-0"><i class="fas fa-map-marker-alt me-2 text-warning"></i> नाशिक, महाराष्ट्र - ४२२००५</p>
                            <a href="https://goo.gl/maps/YOUR_LINK" target="_blank" class="btn-get-directions mt-3">मार्ग पहा</a>
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

                console.log("Form values:", {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                });

                // Project specific variables
                var project_unique_code = "panchangvastu180";
                var domain = "<?php echo $domain; ?>";
                var url = "<?php echo $curPageName; ?>";

                // Validation patterns
                var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                var mobile_regex = /^\d{10}$/;

                // Clear previous messages
                $formResponse.removeClass('show success error').empty();

                // SIMPLE NAME VALIDATION
                if (name === "") {
                    showMessage('** कृपया आपले नाव प्रविष्ट करा **', 'error');
                    $("#name").focus();
                    return false;
                }

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

                // Prepare form data for PHP
                var form = $('#contactForm')[0];
                var formData = new FormData(form);

                // Add extra required fields for PHP
                formData.append("Project_Unique_Code", project_unique_code);
                formData.append("Domain", domain);
                formData.append("URL", url);

                // Log what we're sending to PHP
                console.log("Sending data to PHP:", {
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

                        // Check if PHP script returned success
                        if (response.trim() === 'sent') {
                            console.log("PHP success, now sending to Google Sheets...");

                            // 2) THEN send to Google Sheets
                            // Create a NEW FormData for Google Sheets with EXACT field names that Apps Script expects
                            var sheetFormData = new FormData();

                            // IMPORTANT: Use EXACT field names from your testDoPost function
                            sheetFormData.append("Name", name); // Capital N
                            sheetFormData.append("Email", email); // Capital E
                            sheetFormData.append("Phone", phone); // Capital P
                            sheetFormData.append("Comments", message); // Capital C - actual message
                            sheetFormData.append("Subject", "Contact Form"); // Capital S
                            sheetFormData.append("Message", "Contact Form"); // Capital M - fixed value
                            sheetFormData.append("Domain", domain); // Capital D
                            sheetFormData.append("URL", url); // URL (all caps)
                            sheetFormData.append("Project_Unique_Code", project_unique_code); // Exact

                            console.log("Sending to Google Sheets with EXACT field names:", {
                                "Name": name,
                                "Email": email,
                                "Phone": phone,
                                "Comments": message,
                                "Subject": "Contact Form",
                                "Message": "Contact Form",
                                "Domain": domain,
                                "URL": url,
                                "Project_Unique_Code": project_unique_code
                            });

                            $.ajax({
                                url: "https://script.google.com/macros/s/AKfycbz2r7iZUb-qftS2jZRSwtPUv6avKzx2cW7A80_XLpLuxK2SW8qwT8wARCP3uvQ3-dgX/exec",
                                type: "POST",
                                data: sheetFormData,
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