 <div class="col-md-5 col-lg-5">
                <div class="form-wrp">
                    <form method="post" id="myForm">
                        <div class="row">

                            <div class="col-md-12">
                                <h2 class="pbmit-titlee">for more information contact us</h2>
                            </div>
                                <div id="check1"></div>
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" >
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="phone" id="phone"  class="form-control" placeholder="Phone" >
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" >
                            </div>
                            <div class="col-md-12">
                                <button type="submit" id="btn_submit" class="pbmit-btn w-100">
                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                    send message
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">


    $(document).ready(function(){
      
        $('#myForm').submit(function(e){
            
            e.preventDefault();
            var name = $('#name').val();
          
           
            var phone = $('#phone').val();
            var subject = $('#subject').val();
            var error = false;
            var flg=1;
            // alert(name);alert(email);alert(subject);
             var name_regex="^[a-zA-Z\\s]*$";
            var email_regex =/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\..{2,2}))$)\b/gi;
            var mobile_regex=/\d{10}/;
        if(!name.match(name_regex) || name == "")
        {
          $('#check1').html('** Please Enter your Name **').css( "color", "red");
          $("#name").focus();
          var error = true;
          return false;
        }
        
         
        //  if (!email.match(email_regex)|| email == "") 
        // {
        //   $('#check1').html('** Please Enter Your Email Id **').css( "color", "red");
        //   $("#email").focus();
        //   var error = true;
        //   return false;
        // }
        
        if (!phone.match(mobile_regex)|| phone == "") 
        {
          $('#check1').html('** Please Enter Your Phone No **').css( "color", "red");
          $("#phone").focus();
          var error = true;
          return false;
        }
        
     
         if (subject == "") 
        {
          $('#check1').html('** Please Enter Your Subject **').css( "color", "red");
          $("#subject").focus();
          var error = true;
          return false;
        } 
        if(error!=true)
            {
                $('#btn_submit').attr({'disabled' : 'true', 'value' : 'Sending...' });  
               var form = $('#myForm')[0];
                var formData = new FormData(form);
                $.ajax({
                    url: "inner-valid.php",

                    type: "POST",             
                    data: formData,
                    contentType: false,       
                    cache: false,             
                    processData:false, 
                    success: function(data) {
                    
                       
                        if(data=='sent')
                        {
                            $('#btn_submit').removeAttr('disabled').attr('value', 'Sent')
                            $('#check1').html('** Thank You For Contacting Us,We Will Contact You Soon.. **').css( "color", "green");
                             $("#myForm").get(0).reset();
                            
                        }
                        else
                        {
                                $('#btn_submit').removeAttr('disabled').attr('value', 'Retry');
                            $('#check1').html(data).css("color","red");
                        }
                    }
                });
                return false;
            }
            else
            {
                alert("error");
            }
        });
    });
</script>