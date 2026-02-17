<style>
 
.inner-form-horizontal {
    background: #ffffff;
    border-radius: 12px;
    border: 2px solid #FFD700; 
    max-width: 1200px; 
    margin: 0 auto;
}

/* Slim Inputs */
.input-icon-wrap {
    position: relative;
}

.input-icon-wrap i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #FFB300;
    font-size: 0.9rem;
}

.h-input {
    height: 45px !important; 
    padding-left: 35px !important;
    border-radius: 8px !important;
    border: 1px solid #ffe0b2 !important;
    background-color: #fffcf8 !important;
    font-size: 0.95rem !important;
}

.h-input:focus {
    border-color: #D32F2F !important;
    box-shadow: none !important;
}

/* Action Button */
.h-submit-btn {
    height: 45px;
    background: linear-gradient(45deg, #D32F2F, #B71C1C);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    transition: 0.3s;
}

.h-submit-btn:hover {
    background: #3E2723;
    transform: translateY(-2px);
}

/* Responsive for Mobile (Stacking) */
@media (max-width: 1199px) {
    .inner-form-horizontal h5 {
        text-align: center;
        margin-bottom: 15px !important;
    }
}
</style>

<section class="horizontal-form-section py-4" style="background-color: #fff9f2;">
    <div class="container-fluid">
       
            <form method="post" id="innerForm" class="row g-2 align-items-center">
                
                <div class="col-xl-2 col-lg-12">
                    <h5 class="m-0 fw-bold" style="color: #D32F2F; line-height: 1.2;">त्वरीत <br>संपर्क साधा</h5>
                </div>

                <div class="col-xl-2 col-md-3">
                    <div class="input-icon-wrap">
                        <i class="fas fa-user"></i>
                        <input type="text" name="inner_name" id="inner_name" class="form-control h-input" placeholder="नाव" required>
                    </div>
                </div>

                <div class="col-xl-2 col-md-3">
                    <div class="input-icon-wrap">
                        <i class="fas fa-phone-alt"></i>
                        <input type="tel" name="inner_phone" id="inner_phone" class="form-control h-input" placeholder="मोबाईल" required>
                    </div>
                </div>

                <div class="col-xl-2 col-md-3">
                    <div class="input-icon-wrap">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="inner_email" id="inner_email" class="form-control h-input" placeholder="ईमेल" required>
                    </div>
                </div>

                <div class="col-xl-2 col-md-3">
                    <div class="input-icon-wrap">
                        <i class="fas fa-edit"></i>
                        <input type="text" name="inner_subject" id="inner_subject" class="form-control h-input" placeholder="विषय" required>
                    </div>
                </div>

                <textarea name="inner_message" id="inner_message" style="display:none;">Enquiry from horizontal form</textarea>
                <input type="hidden" name="Project_Unique_Code" value="panchangvastu180">

                <div class="col-xl-2 col-lg-12">
                    <button type="submit" id="inner_btn_submit" class="h-submit-btn w-100">
                        <i class="form-btn-loader fa fa-circle-o-notch fa-spin d-none"></i>
                        पाठवा <i class="fas fa-paper-plane ms-1"></i>
                    </button>
                </div>

                <div id="inner_check" class="col-12 mt-2"></div>
            </form>
        
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#innerForm').submit(function(e) {
            e.preventDefault();

            // Get form values
            var name = $('#inner_name').val().trim();
            var phone = $('#inner_phone').val().trim();
            var email = $('#inner_email').val().trim();
            var subject = $('#inner_subject').val().trim();

            // Validation patterns
            var name_regex = /^[a-zA-Z\s]*$/;
            var mobile_regex = /^\d{10}$/;
            var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Clear previous messages
            $('#inner_check').html('');

            // Validation
            if (name == "" || !name.match(name_regex)) {
                $('#inner_check').html('** Please Enter your Name **').css("color", "red");
                $("#inner_name").focus();
                return false;
            }

            if (phone == "" || !phone.match(mobile_regex)) {
                $('#inner_check').html('** Please Enter Valid 10-digit Phone No **').css("color", "red");
                $("#inner_phone").focus();
                return false;
            }

            if (email == "" || !email_regex.test(email)) {
                $('#inner_check').html('** Please Enter Valid Email **').css("color", "red");
                $("#inner_email").focus();
                return false;
            }

            if (subject == "") {
                $('#inner_check').html('** Please Enter Subject **').css("color", "red");
                $("#inner_subject").focus();
                return false;
            }

            // Disable button and show loading
            $('#inner_btn_submit').prop('disabled', true);
            $('.form-btn-loader').removeClass('d-none');
            $('#inner_btn_submit').text('Sending...');

            // Set hidden fields for Google Sheets
            $('#Name').val(name);
            $('#Email').val(email);
            $('#Phone').val(phone);
            $('#Subject').val(subject);
            $('#Comments').val('Inner form enquiry: ' + subject);

            // Prepare form data
            var form = $('#innerForm')[0];
            var formData = new FormData(form);

            // Log what we're sending
            console.log("Sending inner form data:", {
                name: name,
                phone: phone,
                email: email,
                subject: subject
            });

            // 1) FIRST send to PHP email script
            $.ajax({
                url: "inner-valid.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                timeout: 30000,

                success: function(response) {
                    console.log("PHP Response:", response);

                    if (response.trim() == 'sent') {

                        // 2) THEN send to Google Sheets
                        var sheetFormData = new FormData();

                        // Add fields with EXACT names that Apps Script expects (from testDoPost)
                        sheetFormData.append("Name", name); // Capital N
                        sheetFormData.append("Email", email); // Capital E
                        sheetFormData.append("Phone", phone); // Capital P
                        sheetFormData.append("Subject", subject); // Capital S
                        sheetFormData.append("Message", "Inner Form Enquiry"); // Capital M
                        sheetFormData.append("Comments", "Inner form enquiry: " + subject); // Capital C
                        sheetFormData.append("Domain", "<?php echo $_SERVER['SERVER_NAME']; ?>");
                        sheetFormData.append("URL", "<?php echo substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?>");
                        sheetFormData.append("Project_Unique_Code", "panchangvastu180");

                        console.log("Sending to Google Sheets:", {
                            "Name": name,
                            "Email": email,
                            "Phone": phone,
                            "Subject": subject,
                            "Comments": "Inner form enquiry: " + subject
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
                                $('#inner_btn_submit').prop('disabled', false).text('Send Message');
                                $('#inner_check').html('** Thank You! We Will Contact You Soon **').css("color", "green");
                                $("#innerForm")[0].reset();
                            },

                            error: function(xhr, status, error) {
                                console.error("Sheet Error:", error);
                                // Still show success since PHP email was sent
                                $('#inner_btn_submit').prop('disabled', false).text('Send Message');
                                $('#inner_check').html('** Thank You! We Will Contact You Soon **').css("color", "green");
                                $("#innerForm")[0].reset();
                            },

                            complete: function() {
                                $('.form-btn-loader').addClass('d-none');
                            }
                        });

                    } else {
                        $('#inner_check').html(response).css("color", "red");
                        $('#inner_btn_submit').prop('disabled', false).text('Send Message');
                        $('.form-btn-loader').addClass('d-none');
                    }
                },

                error: function(xhr, status, error) {
                    console.error("PHP Error:", error);
                    $('#inner_check').html('** Server error. Please try again. **').css("color", "red");
                    $('#inner_btn_submit').prop('disabled', false).text('Send Message');
                    $('.form-btn-loader').addClass('d-none');
                }
            });

        });

    });
</script>