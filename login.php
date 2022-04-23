<?php 
require('top.php');
?>  <!-- Start Contact Area -->


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
                        <form id="register-form" method="post">
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="login_email" id="login_email" placeholder="Your Email*" style="width:100%">
                               
                                </div>
                                <span class="field_error" id="login_email_error"></span>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="login_password" id="login_password" placeholder="Your Password*" style="width:100%">
                                </div>
                                <span class="field_error" id="login_password_error"></span>
                            </div>
                            
                            <div class="contact-btn">
                                <button type="button" class="fv-btn" onclick="user_login()">Login</button>
                            </div>
                        </form>
                        <div class="form-output login_msg">
                            <p class="form-messege" id="login_msg"></p>
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
                        <form id="-form" action="#" method="post">
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">
                                   
                                </div>
                                <span class="field_error" id="name_error"></span>
                                <span></span>
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
                                <span class="field_error" id="password_error"></span>
                            </div>
                            
                            <div class="contact-btn">
                                <button type="button" class="fv-btn" onclick="user_register1()">Register</button>
                            </div>
                        </form>
                        <div class="form-output register_msg">
                            <p class="form-messege field_error"></p>
                        </div>
                    </div>
                </div> 
        
        </div>
            
       
    </div> 
</section>
<script>
  function user_register1(){  
    jQuery('.field_error').html('');
    var name = jQuery("#name").val();
    var email = jQuery("#email").val();
    var mobile = jQuery("#mobile").val();
    var password = jQuery("#password").val();
    var is_error = '';
    if (name == "") {
        jQuery('#name_error').html('Please enter name');
        is_error='yes';
    }
    if (email == "") {
        jQuery("#email_error").html('Please enter email');
        is_error='yes';
    }
    if (mobile == "") {
        jQuery("#mobile_error").html('Please enter mobile');
        is_error='yes';
    }
    if (password == "") {
        jQuery("#password_error").html('Please enter password');
        is_error='yes';
    }
    if(is_error=='') {
        jQuery.ajax({
            url: 'register_submit.php',
            type: 'post',
            data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&password=' + password,
            success: function (result) {
              
                if(result=='email_present'){
                    jQuery('#email_error').html('Email Id already registered');
                }
                if(result=='insert'){
                    jQuery('.register_msg p').html('Thank you for registeration');
                }
            }
        });
    }
}
function user_login(){  
    jQuery('.field_error').html('');
    
    var email = jQuery("#login_email").val();
   
    var password = jQuery("#login_password").val();
    var is_error = '';
    if (email == "") {
        jQuery("#login_email_error").html('Please enter email');
        is_error='yes';
    }
    if (password == "") {
        jQuery("#login_password_error").html('Please enter password');
        is_error='yes';
    }
    if(is_error=='') {
        jQuery.ajax({
            url: 'login_submit.php',
            type: 'post',
            data: 'email=' + email + '&password=' + password,
            success: function (result) {
              
                if(result=='wrong'){
                    jQuery('.login_msg p').html('Please enter valid login details');
                }
                if(result=='valid'){
                    window.location.href='index.php';
                }
            }
        });
    }
}
 </script>
 
<!-- End Contact Area -->
<?php require('footer.php')?>        