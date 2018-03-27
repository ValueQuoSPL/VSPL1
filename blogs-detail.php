
<br><br><br><br>
 <img src="assets/user/img/header/blogs.jpg" alt="Chicago" class="img-responsive"
<header data-background="" class="intro introhalf">
    <!-- Intro Header-->
   >
    <div class="intro-body">
        <!--<h4 class="cust-head">Home / Latest blogs / March 12, 2020</h4>
        <h2 class="cust-head">O tempora, o mores. Aequam memento rebus in arduis servare mentem.</h2>-->
    </div>
</header>
               <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        
                        
<section>
    <div class="container" ng-controller="commentsController">
        <div class="row wow fadeIn">
            <div class="col-md-7">
                <!--<div ng-controller="bdetailcontroller">-->
                <h3 class="cust-head">{{blog_detail.title}}</h3>
                <p>{{blog_detail.description}}</p>
    
                
                <ul class="lcs">
                    <li><a ng-click="submitlikesCount(blog_detail.likes)" ng-model="blog_detail.likes">
                        <i class="fa fa-thumbs-o-up"></i> {{blog_detail.likes}} Likes</a></li>
                    <li><a href="" ng-click="setFocus()">
                        <i class="fa fa-comment-o"></i>{{commentCount}} Comments</a></li>
                    <br>
                    <h6> Liked this article please share this</h6>
                              
                            <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5aaf60bba63ccf001315af3a&product=inline-share-buttons"></script>
                            
                            <div class="sharethis-inline-share-buttons"></div> 
                </ul>
                
                
                <!--</div>-->
                <!--<div id="shareBtn" class="btn btn-success">Share</div>--> 
                
                <br>
                <hr>
                <h3 class="cust-head">Comments</h3>
                <div ng-repeat="comment in comments">
                    <div>
                        <div class="media">
                            <div class="media-left">
                                <img src="assets/user/img/team/avatar1.jpg" class="media-object" style="width:45px">
                            </div>
                            <div class="media-body" >
                                <h4 class="media-heading">{{comment.name}}<small><i>Posted on {{comment.create_date}}</i></small></h4>
                                <p>{{comment.comment}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <img src="uploads/{{blog_detail.image}}" alt="" class="img-responsive">
                <hr><div class=" ">
                    <h3 class="cust-head">Write Comment</h3>

                    <form id="contactForm" name="sentMessage"  ng-submit="submitForm()()" novalidate="">
                       
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="cmmntfocus" class="sr-only control-label">Your Name</label>
                               <!--<input type="text"  ng-model="user.blog_id" ng-value="blog_detail.id">-->
                                <input id="cmmntfocus" type="text" placeholder="Your Name" ng-model="user.name" required="" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
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
                                <label for="message" class="sr-only control-label">Your Comment</label>
                                <textarea id="message" rows="1" placeholder="Your Comment" ng-model="user.comment" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-dark"  ng-disabled="sentMessage.$invalid" >Send</button>
                        <!--<button type="submit" class="btn btn-dark" ng-if="user.name && user.email && user.comment " >Send</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section section-small">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <ul class="pager">
                        <li class="previous"><a href="" class="text-muted"><span aria-hidden="true"></span><i class="fa fa-angle-left"></i> PREVIOUS</a></li>
                        <li><a href=""><i class="fa ion-grid fa-2x"></i></a></li>
                        <li class="next"><a href="" class="text-muted">NEXT <span aria-hidden="true"></span><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>  


<script type="text/javascript">



