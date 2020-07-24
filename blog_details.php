
<!DOCTYPE html>
    <html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Blogs - Mom and Paw</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <!-- Navbar STart -->
<?php include "header.php"; ?>
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="bg-half  d-block w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
 <h2> Blog Title </h2>
                            <ul class="list-unstyled mt-1 mb-0">
                                <li class="list-inline-item h6 user text-muted mr-2"><i class="mdi mdi-account"></i> User Name</li>
                                <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</li>
                            </ul>
                                                       <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="blog.php">Our Blogs</a></li>
                                        <li class="breadcrumb-item"><a href="#">Blog Details</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

       
        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="card blog blog-detail border-0 shadow rounded">
                            <img src="images/blog/01.jpg" class="img-fluid rounded-top" alt="">
                            <div class="card-body content">
                                <h6><i class="mdi mdi-tag text-primary mr-1"></i><a href="javscript:void(0)" class="text-primary">Software</a>, <a href="javscript:void(0)" class="text-primary">Application</a></h6>
                                <p class="text-muted mt-3">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. </p>
                                <blockquote class="blockquote mt-3 p-3">
                                    <p class="text-muted mb-0 font-italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                                </blockquote>
                                <p class="text-muted">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                                <div class="post-meta mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33 Like</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08 Comment</a></li>
                                        <li class="list-inline-item ml-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-share-outline mr-1"></i>33 Share</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Comments :</h5>

                                <ul class="media-list list-unstyled mb-0">
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="media align-items-center">
                                                <a class="pr-3" href="#">
                                                    <img src="images/dummy.png" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                    <small class="text-muted">15th August, 2019 at 01:25 pm</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted font-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </li>
     
                                </ul>
                            </div>
                        </div>

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Related Posts :</h5>

                                <div class="row">
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="card blog rounded border-0 shadow">
                                            <div class="position-relative">
                                                <img src="images/blog/01.jpg" class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top bg-dark"></div>
                                            </div>
                                            <div class="card-body content">
                                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                                    </ul>
                                                    <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="author">
                                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="card blog rounded border-0 shadow">
                                            <div class="position-relative">
                                                <img src="images/blog/02.jpg" class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top bg-dark"></div>
                                            </div>
                                            <div class="card-body content">
                                                <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                                    </ul>
                                                    <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="author">
                                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Leave A Comment :</h5>

                                <form class="mt-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Comment</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control pl-5" required=""></textarea>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input id="name" name="name" type="text" placeholder="Name" class="form-control pl-5" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input id="email" type="email" placeholder="Email" name="email" class="form-control pl-5" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-md-12">
                                            <div class="send">
                                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div>
                        </div>
                    </div>
                    <!-- BLog End -->

                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar rounded shadow">
                            <div class="card-body">
                                <!-- SEARCH -->
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Search</h4>
                                    <div id="search2" class="widget-search mt-4 mb-0">
                                        <form role="search" method="get" id="searchform" class="searchform">
                                            <div>
                                                <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                                                <input type="submit" id="searchsubmit" value="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- SEARCH -->
    
                                <!-- CATAGORIES -->
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Catagories</h4>
                                    <ul class="list-unstyled mt-4 mb-0 blog-catagories">
                                        <li><a href="jvascript:void(0)">Finance</a> <span class="float-right">13</span></li>
                                        <li><a href="jvascript:void(0)">Business</a> <span class="float-right">09</span></li>
                                        <li><a href="jvascript:void(0)">Blog</a> <span class="float-right">18</span></li>
                                        <li><a href="jvascript:void(0)">Corporate</a> <span class="float-right">20</span></li>
                                        <li><a href="jvascript:void(0)">Investment</a> <span class="float-right">22</span></li>
                                    </ul>
                                </div>
                                <!-- CATAGORIES -->
    
                                <!-- RECENT POST -->
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Recent Post</h4>
                                    <div class="mt-4">
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-left"><a href="jvascript:void(0)">Consultant Business</a><span class="text-muted mt-2">15th June, 2019</span></div>
                                        </div>
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/08.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-left"><a href="jvascript:void(0)">Look On The Glorious Balance</a> <span class="text-muted mt-2">15th June, 2019</span></div>
                                        </div>
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/01.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-left"><a href="jvascript:void(0)">Research Financial.</a> <span class="text-muted mt-2">15th June, 2019</span></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- RECENT POST -->
    
                                <!-- TAG CLOUDS -->
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Tags Cloud</h4>
                                    <div class="tagcloud mt-4">
                                        <a href="jvascript:void(0)" class="rounded">Business</a>
                                        <a href="jvascript:void(0)" class="rounded">Finance</a>
                                        <a href="jvascript:void(0)" class="rounded">Marketing</a>
                                        <a href="jvascript:void(0)" class="rounded">Fashion</a>
                                        <a href="jvascript:void(0)" class="rounded">Bride</a>
                                        <a href="jvascript:void(0)" class="rounded">Lifestyle</a>
                                        <a href="jvascript:void(0)" class="rounded">Travel</a>
                                        <a href="jvascript:void(0)" class="rounded">Beauty</a>
                                        <a href="jvascript:void(0)" class="rounded">Video</a>
                                        <a href="jvascript:void(0)" class="rounded">Audio</a>
                                    </div>
                                </div>
                                <!-- TAG CLOUDS -->
                                
                                <!-- SOCIAL -->
                                <!-- SOCIAL -->
                            </div>
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->

        <!-- Footer Start -->
    <?php include "footer.php"; ?>
        <!-- End Style switcher -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>

</html>