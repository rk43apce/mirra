<?php
    require_once './autoload.php';
    $blog = new Blog();

    $category = Input::get('category');

    $blogData = $blog->getBlogs('15', $category);    
    $IntroBlogData = $blog->getBlogs('1', $category);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>Mirra Healthcare | Insights</title>

    <?php include './include/csslinks.php' ?>



</head>

<body >


    <header class="header-transparent" id="header-main">

        <!-- Search -->
        <div id="search-main" class="navbar-search">
            <div class="container">
                <!-- Search form -->
                <form class="navbar-search-form" role="form">
                    <div class="form-group">
                        <div class="input-group input-group-transparent">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="navbar-search-suggestions">
                    <h6>Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>Billing Management</span> in Revenue Cycle Management
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>Utilization Management</span> in Care Management
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>Patient Education</span> in Education
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>Provider Enrollment Services</span> Credentialing & Contracting
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>Cloud Solutions</span> in IT Solutions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Topbar -->
        <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
            <div class="container">
                <div class="navbar-nav align-items-center">
                    <div class="d-none d-lg-inline-block">
                        <span class="navbar-text mr-3"></span>
                    </div>
                    <div>
                        <ul class="nav">
                            <li class="nav-item dropdown ml-lg-2 dropdown-animate" data-toggle="hover">
                                <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="Image placeholder" src="./assets/img/icons/flags/us.svg">
                                    <span class="d-none d-lg-inline-block">United States</span>
                                    <span class="d-lg-none">EN</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-arrow">
                                    <a href="" class="dropdown-item">
                                        <img alt="Image placeholder" src="./assets/img/icons/flags/es.svg">Spanish</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./pages/support.html">Support</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-action="search-open" data-target="#search-main"><i class="fas fa-search"></i></a>
                            </li>                          
                            <li class="nav-item">
                                <a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main navbar -->

        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <?php include './include/header.php' ?>
        </nav>

    </header>

    <main>

        <?php   
        if(!empty($IntroBlogData)) {
            foreach ($IntroBlogData as $key => $row) {                     
            $cnt= 0; ?>
                    <section id='blogIntroSection' class="spotlight bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/img/backgrounds/img-1-1920x800.jpg');">
            <div class="spotlight-holder py-lg py-lg-0">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container py-md d-flex align-items-center">
                    <div class="col">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-7 text-center">
                                <h1 class="text-white lh-150 mb-4"><?php echo $row['title'];?></h1>
                                <ul class="list-inline">
                                    <li class="list-inline-item text-white">Written by Pariksith Singh</li>
                                </ul>
                                <span class="clearfix"></span>
                                <a href="blog-article.php?blogId=<?php echo $row['id']; ?>" class="btn btn-white btn-circle btn-icon mt-4">
                                    <span class="btn-inner--text">Continue reading</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } } ?>     
        
        <section>
            <div id='category'>
            </div>
        </section>

        <section class="slice slice-lg" id="sct_features">          
            <div class="container pb-4">
                <div class="mb-md text-center">
                    <h3 class="h3" id='title' >Latest from the <?php echo $category; ?></h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">Stay on top with the lastest industry insights from Mirra<sup>®</sup></p>
                    </div>
                </div>
                
                <div class="row row-grid">
                <?php  if(!empty($blogData)) {
                foreach ($blogData as $key => $row) {                     
                    $cnt= 0; ?>
                    <div class="col-lg-4 py-2">
                        <div class="card shadow-sm shadow--hover ">
                        <img alt="Image placeholder" src="assets/img/mirra/hmo-hosp-2.jpg" class="card-img-top">
                        <div class="card-body py-5 text-center" style='min-height:275px;'>
                        <span class="badge badge-pill badge-warning d-inline mt-2"><?php echo $row['category'] ?></span>
                        <a href="./blog-article.php?blogId=<?php echo $row['id'];?>" class="h5 lh-150 d-block mt-3"><?php echo $row['title'] ?></a>                
                        </div>
                        </div>
                    </div>
                <?php } } ?>                                                   
                </div>
            </div>
        </section>

        <section class="slice py-5 bg-gradient-secondary">
            <div class="container">
                <div class="row row-grid align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <div class="pr-lg-5 text-center text-lg-right">
                            <h5 class="mb-0">Sign up for the daily newsletter:</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group shadow mb-0">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend border-right-0">
                                        <span class="input-group-text bg-white"><i class="fas fa-envelope-open"></i></span>
                                    </div>
                                    <input type="text" class="form-control border-left-0" placeholder="Enter your email ...">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <footer class="footer footer-dark bg-gradient-primary ">
        <?php require './include/footer.php';?>
    </footer>

    <?php require './include/footerlinks.php';?>

</body>

</html>
