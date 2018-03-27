<br><br><br><br>
<style>
#p_blog {
   overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;    
}

.other-bg3{
background-image: url("assets/user/img/header/blogs.jpg");
}

</style>
<!-- Header-->
<header data-background="" class="intro introhalf">
    <!-- Intro Header-->
    <img src="assets/user/img/header/blogs.jpg" alt="Chicago" class="img-responsive">
    <!--<div class="intro-body home-header">
        <h1 class="no-pad">Our <span>Blogs</span></h1>
        <h4>Latest Blogs</h4>                                                                                                                                                                                                                                                                                                                                           
    </div>  -->
</header>

<!-- News Block-->
<section id="news" class="section-small" ng-controller="blogController">
    <div class="container">
        <h3 class="pull-left cust-head">OUR LATEST BLOGS</h3>
        <div class="clearfix"></div>
        <div class="row grid-pad">
            <div ng-repeat="blog in blogs">
                <div class="col-sm-6"><a ng-href="./blogs-detail/{{blog.id}}"><img src="./uploads/{{blog.image}}" alt="" height="300px" class="img-responsive center-block">
                        <h5>{{blog.title}}<small><i class="fa fa-calendar"></i> on {{blog.create_date}}</small></h5></a> 
                    <p id="p_blog">{{blog.description}}</p>
                    <a class="btn btn-dark btn-xs" ng-href="./blogs-detail/{{blog.id}}">Read More</a>
<!--                    <ul class="lcs" ><li><a ng-click="blog.likes = blog.likes + 1; submitlikesCount(blog.likes, blog.id);" ng-model="blog.likes"><i class="fa fa-thumbs-o-up"></i>{{blog.likes}}</a></li>-->
                    <ul class="lcs" ><li><span> <i class="fa fa-thumbs-o-up"></i>  {{blog.likes}} likes</span></li>
                        <!--// ng-init="blog.likes = parseInt(blog.likes)-->
                        
<!--<li><a href="#blogs-detail" ><i class="fa fa-thumbs-o-up"></i> 122</a></li>-->
                        <li ng-controller="commentsController"><a> <i class="fa fa-comment-o"></i>  {{blogcommentCount}} comments</a></li>  
                        <li><a> <i class="fa fa-share-square-o"></i> 20 share</a></li> 
                    </ul> <br> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pagination-->
<!--<div class="section section-small bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <nav>
                    <ul class="pagination">
                        <li><a href="" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li class="active"><a href="">1<span class="sr-only">(current)</span></a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">&middot;&middot;&middot;</a><a href="">38</a></li>
                        <li><a href="" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>  -->