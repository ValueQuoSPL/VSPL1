
<br>
<br>
<br><br>
<img src="assets/user/img/header/ContactUs.jpg" alt="Chicago" class="img-responsive">
<!--<style>
.other-bg2{
background-image: url("assets/user/img/header/ContactUs.jpg");
}
</style>
<header data-background="img/header/ContactUs.jpg" class="other-bg2 intro introhalf">-->
    <!-- Intro Header-->
    <div class="intro-body home-header">
        <!--<h1>Contact <span>Us</span></h1>                
        <h4>SAY HELLO</h4>-->
    </div>
<!--</header>-->
<!-- Contact Section-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5" ng-controller="contactdetailsController">
                <h3 class="cust-head">Contact us</h3>
                <div ng-repeat="contact in contactDetails">
                <p>{{contact.description}}</p>
                <hr>
                <h5><i class="fa fa-map-marker fa-fw fa-lg" style="font-size:30px; color:#F1592A;"></i> {{contact.address}}
                </h5>
                <h5><i class="fa fa-envelope fa-fw fa-lg" style="font-size:28px; color:#F1592A;"></i> {{contact.email}}
                </h5>
                <h4><i class="fa fa-phone fa-fw fa-lg" style="font-size:30px; color:#F1592A;"></i>{{contact.contact_number}}
                </h4>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2" ng-controller="regController">
                <h3 class="cust-head">Say hello</h3>
                <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
                <form id="contactForm" name="sentMessage"  ng-submit="sayhello()" novalidate="">
                       
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="cmmntfocus" class="sr-only control-label">Your Name</label>
                               <!--<input type="text"  ng-model="user.blog_id" ng-value="blog_detail.id">-->
                                <input id="name" type="text" placeholder="Your Name" ng-model="user.name" required="" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="email" class="sr-only control-label">Your Email</label>
                                <input id="email" type="email" placeholder="Your Email" ng-model="user.email" required="" data-validation-required-message="Please enter email" class="form-control input-lg"><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="phone" class="sr-only control-label">Your Phone</label>
                                <input id="phone" type="tel" placeholder="Your Phone" required ng-model="user.phone" maxlength="10" data-validation-required-message="Please enter phone number" class="form-control input-lg"><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="message" class="sr-only control-label">Your Comment</label>
                                <textarea id="message" rows="1" placeholder="Your Comment" ng-model="user.comment" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-dark"  ng-disabled="sentMessage.$invalid" >Send</button>
                        <!--<button type="submit" class="btn btn-dark" ng-if="user.name && user.phone && user.email && user.comment " >Send</button>-->
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- Map Section-->
<!---<div  ng-controller="MyController">
         <div id="dvMap" style="width: 100%; height: 400px">
         </div>
    </div>--->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.2867535491014!2d73.94256951445875!3d18.56110648738544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c3e7787cc30b%3A0xbb32afcf0be0f79!2sCity+Vista!5e0!3m2!1sen!2sin!4v1519539332681" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<script>
//    Validation for name
            $("#name").bind("keypress", function (event) {
                var charCode = event.which;
                if (charCode == 8 || charCode == 0) {
                    return;
                } else {
                    var keyChar = String.fromCharCode(charCode);
                    return /[a-zA-Z\s]/.test(keyChar);
                }
            });
//    Validation for name
//    Validation for email
            $("#email").focusout(function () {
                var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                var email = $('#email').val();
                var elem = jQuery.trim($("#email").val());
                if (elem.length == 0) {
                    alert('This field cannot be left blank.');
                } else {
                    if ((!email.match(email_regex))) {
                        alert('Enter valid email address.');
                        return false;
                    }
                }
            });
//    Validation for email
//    Validation for mobile
            $("#phone").keydown(function (e) {
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
                        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                        (e.keyCode >= 35 && e.keyCode <= 40)) {
                    return;
                }
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
//    Validation for mobile
</script>

