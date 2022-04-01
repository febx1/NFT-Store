<?php 
require('top.php');
?>   <!-- Start Contact Area --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="js/main.js"></script>
 <script>
  function user_register(){  
                JQuery('.field_error').html('');
    var name = jQuery("#name").val();
    var email = jQuery("#email").val();
    var mobile = jQuery("#mobile").val();
    var password = jQuery("#password").val();
    var is_error = '';
    if (name == "") {
        JQuery('#name_error').html('Please enter name');
        is_error='yes';
    }
    if (email == "") {
        JQuery("#email_error").html('Please enter email');
        is_error='yes';
    }
    if (mobile == "") {
        JQuery("#mobile_error").html('Please enter mobile');
        is_error='yes';
    }
    if (password == "") {
        JQuery("#password_error").html('Please enter password');
        is_error='yes';
    }
    if(is_error=='') {
        jQuery.ajax({
            url: 'send_message.php',
            type: 'post',
            data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&message=' + message,
            success: function (result) {
                alert(result);
            }
        });
    }
 </script>
<section class="htc__contact__area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form-wrap mt--60">
                    <div class="col-xs-12">
                        <div class="contact-title">
                            <h2 class="title__line--6">Login</h2>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <form id="contact-form" action="#" method="post">
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="name" placeholder="Your Email*" style="width:100%">
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="name" placeholder="Your Password*" style="width:100%">
                                </div>
                            </div>
                            
                            <div class="contact-btn">
                                <button type="submit" class="fv-btn">Login</button>
                            </div>
                        </form>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div> 
        
        </div>
        

            <div class="col-md-6">
                <div class="contact-form-wrap mt--60">
                    <div class="col-xs-12">
                        <div class="contact-title">
                            <h2 class="title__line--6">Register</h2>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <form id="contact-form" action="#" method="post">
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">
                                   
                                </div>
                                <span class="field_error" id="name_error"></span>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="email" id="email" placeholder="Your Email*" style="width:100%">
                                   
                                </div>
                                <span class="field_error" id="email_error"></span>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:100%">
                                </div>
                                <span class="field_error" id="mobile_error"></span>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="password" name="password" id="password" placeholder="Your Password*" style="width:100%">
                                </div>
                                <span class="field_error" id="name_error"></span>
                            </div>
                            
                            <div class="contact-btn">
                                <button type="button" class="fv-btn" onclick="user_register()">Register</button>
                            </div>
                        </form>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div> 
        
        </div>
            
       
    </div>
</section>
<!-- End Contact Area -->
<?php require('footer.php')?>        