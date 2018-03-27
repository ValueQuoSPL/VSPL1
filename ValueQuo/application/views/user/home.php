  

<!--<marquee bgcolor="#F1592A">Website is under development, released for limited people. Production ready Website will be launched in public soon.</marquee>-->

<!-- Header-->
     <div class="row">
            <div class="float-right col-md-4 numscroller" ng-controller="contactdetailsController">  
            <div ng-repeat="contact in contactDetails">                
                <h5><i class="fa fa-phone fa-fw fa-lg" style="font-size:25px; color:#F1592A;"></i>{{contact.contact_number}}
                </h5>
            </div>
            
     </div>
     <br> <br> <br> <br>
        <header data-background="img/header/10.jpg" class="  intro introhalf">
         
            <!-- Intro Header-->
            <div class="home-div">
                
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/user/img/header/FinPlanning_Banner.jpg" alt="Los Angeles"  class="img-responsive">
    </div>
    <div class="item">
      <img src="assets/user/img/header/ITServices_Banner.jpg" alt="Chicago" class="img-responsive">
    </div>
     <div class="item">
      <img src="assets/user/img/header/GraDesign_Banner.jpg" alt="Chicago" class="img-responsive">
    </div>
 
  </div>

  <!-- Left and right controls -->
<!--  <a class="left carousel-control" data-target="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" data-target="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
            </div> 
              <!-- <div class="home-header"> 
                    <h1>Value<span>Quo</span></h1>
                    <h4>Smart <span class="bold">Business</span></h4>
               </div>-->
        </header>

  
        <!-- Slider-->
        <section id="about" data-wow-delay="0.1s" class="section-small wow zoomIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="cust-head">Who We Are</h3>
                        <p class="no-pad">“ValueQuo” signifies High Value Quotient. Value quotient is the ratio of a solution's desired outcomes to its undesired outcomes. Higher value quotient infers better customer experience where solutions meets all expectations within optimal cost and delivers more than what a customer can expect.</p>
                          <p class="no-pad"> &nbsp &nbsp &nbsp &nbsp &nbsp We are a team of domain experts with experience and expertise of various domains like Banking, Finance, Insurance, Investment, IT, Design and Solution. We collaborate as “ValueQuo” to offer unique ideas and innovative solutions way beyond any ordinary services, products or solutions. </p>
                        <h2 class="classic">The ValueQuo Team</h2>
                    </div>
                    <div data-wow-duration="2s" data-wow-delay=".2s" class="col-lg-5 col-lg-offset-1 wow zoomIn">
                        <div id="carousel-light2" data-interval="2000" class="carousel slide carousel-fade">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-light2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-light2" data-slide-to="1"></li> 
                            </ol>
                            <div role="listbox" class="carousel-inner">                               
                                <div class="item active"><img src="assets/user/img/header/slider.png" alt="" class="img-responsive center-block"></div>
                                <div class="item"><img src="assets/user/img/header/slider2.png" alt="" class="img-responsive center-block"></div> 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- About Section--> 
        <!-- Services Section-->
        <section id="services" class="bg-img4 text-center">
             
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3>Our Services</h3>
                        <p>We strive to provide unique services beyond regular services and deliver Value in each delivery. Our services focus on simplifying and resolving all pain areas inculding those which are usually overlooked or ommited just because “that’s not trending”. We offer world class services in following verticles.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div data-wow-delay="1s" class="col-lg-4 col-sm-6 wow fadeIn">
                        <h4><img src="assets/user/img/header/finance.png" alt="" class="img-responsive icon icon-big center-block"> Financial Planning</h4>
                        <p>We provide end to end Financial Planning service. Our services starts from personalised analysis of customer's financial landscape till investing in right products to achieve all financial goals. Our specialised brand product "Buckswise.com" is one stop shop for Personal Finance Management. </p>
                   <div>
                        <a class="btn btn-dark btn-s" ng-href="./myservices" ng-click="activeMenu = 'myservices'">More Details >>></a>
                     </div>
                   </div>
                  
                    <div data-wow-delay="1.4s" class="col-lg-4 col-sm-6 wow fadeIn">
                        <h4><img src="assets/user/img/header/IT.png" alt="" class="img-responsive icon icon-big center-block"> IT Services</h4>
                        <p>Our IT Team consists of dedicated and well experienced Domain experts, Solution Architects, Technical Architects, Developers and Project Managers. We provide “ValueQuo” solutions in addition to Development, Testing, Maintenance and Support of all leading technologies in IT industry.</p>
                     <div>
                        <a class="btn btn-dark btn-s" ng-href="./myservices" ng-click="activeMenu = 'myservices'">More Details >>></a>
                    </div>
                    </div>
                    
                    <div data-wow-delay="1.6s" class="col-lg-4 col-sm-6 wow fadeIn">
                        <h4><img src="assets/user/img/header/graphics.png" alt="" class="img-responsive icon icon-big center-block"> Graphics Design</h4>
                        <p>Give your imagination in words to us, we will convert that into overwhelming Graphics materialising your imagination with blend of our creativity and modernity.We have expertise in brochures, poster, pamphlet, mock-ups, flyers, logo, branding materials and all types of print design.</p>
                     <div>
                        <a class="btn btn-dark btn-s" ng-href="./myservices" ng-click="activeMenu = 'myservices'">More Details >>></a>
                    </div>
                    </div>
                </div>
            </div>
        </section> 
<section>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h3>Why Choose Us?</h3>
          </div>
        </div>
        <div class="row">
          <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn animated" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
            <h4><i class="icon-big ion-social-usd"></i>Our Value System</h4>
            <p>ValueQuo never compromises on business ethics. We strongly believe in adherence to our value system in all situations else we may lose our identity. Our values are our strength. </p>
          </div>
          <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn animated" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
            <h4><i class="icon-big ion-social-pinterest"></i>Professionalism</h4>
            <p>ValueQuo is committed to exhibit high degree of professionalism in every relationship. We don’t commit anything which we can’t deliver and what we commit, we deliver.</p>
          </div>
          <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn animated" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
            <h4><i class="icon-big ion-android-contacts"></i> Customer First Policy</h4>
            <p>At ValuQuo, every customer matters and we put customer’s interest as our top priority. ValueQuo is founded to give customer’s a distinguished experience and guaranteed satisfaction.</p>
          </div>
          <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn animated" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
            <h4><i class="icon-big ion-android-desktop"></i>Our Expertise</h4>
            <p>Knowledge is the key to perform any work effectively and efficiently with excellence. We keep on learning continuously to keep us ahead and hence our customers.</p>
          </div>
        </div>
      </div>
    </section>
        <!-- Team Section-->
 
          <!--<div ng-include="'our-partner.php'"></div> -->
        <//?php include('our-partner.php'); ?>  

        <!-- Testimonials Section-->
        <section id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h3 class="text-center cust-head">Testimonials</h3>
                        <div id="carousel-testimonials" data-ride="carousel" data-interval="5000" class="carousel slide carousel-fade">
                            <!-- Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                                <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides-->
                            <div role="listbox" class="carousel-inner">
                                <div class="item active"><img src="assets/user/img/testimonials/3.jpg" alt="" class=" center-block">
                                    <div class="carousel-caption">
                                        <h2 class="classic">Jane Navarro</h2>
                                        <h5 class="no-pad">Thank you ValueQuo team for your amazing branding work within stringent timelines. We were sceptical if designers would understand our ideas and put on paper so quickly. But you guys did it and now we are receiving appreciations which we would like to share with you too !!! </h5>
                                    </div>
                                </div>
                                <div class="item"><img src="assets/user/img/testimonials/Vinod.jpg" alt="" class="center-block">
                                    <div class="carousel-caption">
                                        <h2 class="classic">Vinod Budhwar</h2>
                                        <h5 class="no-pad">I have been in desperate need for some genuine financial management advice and help. ValueQuo came at the opportune moment for help, just a visit to ValueQuo office and a casual chat with with advisor followed by a short presentation was all it took me to get started. I found the whole process smooth and most importantly the confidence and genuineness ValueQuo demonstrated throughout is truly inspiring. Good start team ValueQuo, keep up the great job and wish you all the more success in days to come!!</h5>
                                    </div>
                                </div>
                                <div class="item"><img src="assets/user/img/testimonials/Rajiv.jpg" alt="" class="center-block">
                                    <div class="carousel-caption">
                                        <h2 class="classic">Rajiv Kumar</h2>
                                        <h5 class="no-pad">We were struggling to choose a vendor to design and implement our business solution. It was real tough to take decision when there are plenty of IT Service providers and everyone sound convincing. Then one of my friend referred ValueQuo. ValueQuo team understood our business and provided contemporary solution within agreed timeline and budget. ValueQuo solutions are unique and unparalleled. ValueQuo team exhibits high degree of professionalism not just quote professionalism as their value system. Thanks and good luck....</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        
<!--        <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5" ng-controller="contactdetailsController">
                <h3 class="cust-head">Contact us</h3>
                <div ng-repeat="contact in contactDetails">
                <p>{{contact.description}}</p>
                <hr>
                <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> {{contact.address}}
                </h5>
                <h5><i class="fa fa-envelope fa-fw fa-lg"></i> {{contact.email}}
                </h5>
                <h5><i class="fa fa-phone fa-fw fa-lg"></i>{{contact.contact_number}}
                </h5>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2" ng-controller="regController">
                <h3 class="cust-head">Say hello</h3>
                
                <form id="contactForm" name="sentMessage"  ng-submit="sayhello()" novalidate="">
                       
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="cmmntfocus" class="sr-only control-label">Your Name</label>
                               <input type="text"  ng-model="user.blog_id" ng-value="blog_detail.id">
                                <input id="name" type="text" placeholder="Your Name" ng-model="user.name" required="" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="email" class="sr-only control-label">Your Email</label>
                                <input id="email" type="email" placeholder="Your Email" ng-model="user.email" required="" ng-pattern="/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i"  class="form-control input-lg">
                            <span class="error" ng-cloak ng-show="sentMessage.email.$error.pattern" style="color:red">Invalid email</span>
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
                        <button type="submit" class="btn btn-dark" ng-if="user.name && user.phone && user.email && user.comment " >Send</button>
                    </form>
                
                
            </div>
        </div>
    </div>
</section>-->
        <!-- Map Section-->
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60526.399004476596!2d73.85523510512361!3d18.533423383553398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1513571097625" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->

<!--<div class="container" ng-controller="MyController">
   <div id="dvMap" style="width: 100%; height: 400px">
   </div>
    </div>-->
        <script>
            $('.carousel').carousel({
                pause: "true"
            }); 
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
//            $("#email").focusout(function () {
//                var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
//                var email = $('#email').val();
//                var elem = jQuery.trim($("#email").val());
//                if (elem.length == 0) {
//                    alert('This field cannot be left blank.');
//                } else {
//                    if ((!email.match(email_regex))) {
//                        alert('Enter valid email address.');
//                        return false;
//                    }
//                }
//            });
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