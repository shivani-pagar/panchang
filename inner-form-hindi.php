<div class="col-md-5 col-lg-5">
    <div class="form-wrp">
        <form method="post" id="innerForm">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pbmit-titlee">अधिक जानकारी के लिए हमसे संपर्क करें</h2>
                </div>

                <div id="inner_check" class="col-md-12"></div>

                <div class="col-md-12">
                    <input type="text" name="inner_name" id="inner_name" class="form-control" placeholder="आपका नाम" required>
                </div>

                <div class="col-md-12">
                    <input type="tel" name="inner_phone" id="inner_phone" class="form-control" placeholder="फ़ोन" required>
                </div>

                <div class="col-md-12">
                    <input type="email" name="inner_email" id="inner_email" class="form-control" placeholder="ईमेल" required>
                </div>

                <div class="col-md-12">
                    <input type="text" name="inner_subject" id="inner_subject" class="form-control" placeholder="विषय" required>
                </div>

                <div class="col-md-12">
                    <textarea name="inner_message" id="inner_message" rows="3" class="form-control" placeholder="आपका संदेश" style="display:none;">Enquiry from inner form</textarea>
                </div>

                <!-- Hidden fields for Google Sheets (matching your Apps Script expectations) -->
                <input type="hidden" name="Name" id="Name" value="">
                <input type="hidden" name="Email" id="Email" value="">
                <input type="hidden" name="Phone" id="Phone" value="">
                <input type="hidden" name="Subject" id="Subject" value="">
                <input type="hidden" name="Message" value="Inner Form Enquiry">
                <input type="hidden" name="Comments" id="Comments" value="Inner form submission">
                <input type="hidden" name="Domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                <input type="hidden" name="URL" value="<?php echo substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?>">
                <input type="hidden" name="Project_Unique_Code" value="panchangvastu180">

                <div class="col-md-12">
                    <button type="submit" id="inner_btn_submit" class="pbmit-btn w-100">
                        <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                        मेसेज भेजें
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $('#innerForm').submit(function(e){
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
        if(name == "" || !name.match(name_regex)) {
            $('#inner_check').html('** कृपया अपना नाम दर्ज करें**').css("color", "red");
            $("#inner_name").focus();
            return false;
        }

        if(phone == "" || !phone.match(mobile_regex)) {
            $('#inner_check').html('** कृपया वैध 10 अंकों का फ़ोन नंबर दर्ज करें **').css("color", "red");
            $("#inner_phone").focus();
            return false;
        }

        if(email == "" || !email_regex.test(email)) {
            $('#inner_check').html('** कृपया वैध ईमेल दर्ज करें **').css("color", "red");
            $("#inner_email").focus();
            return false;
        }

        if(subject == "") {
            $('#inner_check').html('** कृपया विषय दर्ज करें **').css("color", "red");
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

                if(response.trim() == 'sent') {
                    
                    // 2) THEN send to Google Sheets
                    var sheetFormData = new FormData();
                    
                    // Add fields with EXACT names that Apps Script expects (from testDoPost)
                    sheetFormData.append("Name", name);                    // Capital N
                    sheetFormData.append("Email", email);                  // Capital E
                    sheetFormData.append("Phone", phone);                  // Capital P
                    sheetFormData.append("Subject", subject);              // Capital S
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