<?php
    // require_once './autoload.php';
    // $blog = new Blog();
    // $blogData = $blog->getBlogs('15');    
    // $IntroBlogData = $blog->getBlogs('1');    
?>

<?php
    require_once './autoload.php';
    $blog = new Blog();      
    $IntroBlogData = $blog->getBlogs('1');
?>

<?php

$rowCount = $blog->rowCount();  

// Set some useful configuration
$baseURL = htmlspecialchars($_SERVER["PHP_SELF"]);
$limit = 15;

// Paging limit & offset
$offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;

// Initialize pagination class
$pagConfig = array(
    'baseURL' => $baseURL,
    'totalRows'=>$rowCount,
    'perPage'=>$limit
);
$pagination =  new Pagination($pagConfig);

$dataInsights =  $blog->getInsights($limit, $offset)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Mirra Healthcare | Insights</title>
    <?php include './include/csslinks.php' ?>  
</head>

<body >


    <header class="header-transparent" id="header-main">
        <!-- Search -->
        <?php include './include/search.php' ?>  
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
                                <a href="./blog-article.php?blogId=<?php echo $row['id'];?>" class="btn btn-white btn-circle btn-icon mt-4">
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
        <section class="slice slice-lg" >
            <div class="container">
                <div class="card-group mt--200">
                    <div class="card text-white border-0 overflow-hidden">
                    <a href="insights-category.php?category=Principles">
                            <img alt="Image placeholder" class="img-fluid" src="assets/img/mirra/principles.jpg">
                            <span class="mask bg-dark opacity-5"></span>
                            <span class="mask mask--hover bg-primary opacity-7"></span>
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="text-center">
                                    <div class="animate-item--visible opacity-10">
                                        <h5 class="heading h3 text-white mb-1">Principles</h5>
                                        <p class="card-text text-white">25 articles</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card text-white border-0 overflow-hidden">
                    <a href="insights-category.php?category=Management">
                            <img alt="Image placeholder" class="img-fluid" src="assets/img/mirra/management.jpg">
                            <span class="mask bg-blue opacity-5"></span>
                            <span class="mask mask--hover bg-blue opacity-7"></span>
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="text-center">
                                    <div class="animate-item--visible opacity-10">
                                        <h5 class="heading h3 text-white mb-1">Management</h5>
                                        <p class="card-text text-white">30 articles</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card text-white border-0 overflow-hidden">
                    <!-- <a href="insights-category.php?category=Operations" onClick="loadBlogs('5', 'Operations');"> -->
                    <a href="insights-category.php?category=Operations">
                            <img alt="Image placeholder" class="img-fluid" src="assets/img/mirra/operations.jpg">
                            <span class="mask bg-pink opacity-5"></span>
                            <span class="mask mask--hover bg-pink opacity-7"></span>
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="text-center">
                                    <div class="animate-item--visible opacity-10">
                                        <h5 class="heading h3 text-white mb-1">Operations</h5>
                                        <p class="card-text text-white">45 articles</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg" id="sct_features">          
            <div class="container pb-4">
                <div class="mb-md text-center">
                    <h3 class="h3" id='title' >Latest from the blog</h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">Stay on top with the lastest industry insights from Mirra<sup>®</sup></p>
                    </div>
                </div>
                
                <div class="row row-grid">
                <?php  if(!empty($dataInsights)) {
                foreach ($dataInsights as $key => $row) {                     
                    $cnt= 0; ?>
                    <div class="col-lg-4 py-2">
                        <div class="card shadow-sm shadow--hover ">
                        <img alt="Image placeholder" src="assets/img/mirra/hmo-hosp-2.jpg" class="card-img-top">
                        <div class="card-body py-5 text-center" style='min-height:275px;'>
                        <span class="badge badge-pill badge-warning d-inline mt-2"><?php echo $row['category'] ?></span>
                        <a href="./blog-article.php?blogId=<?php echo $row['id'] ?>" class="h5 lh-150 d-block mt-3"><?php echo $row['title'] ?></a>                
                        </div>
                        </div>
                    </div>
                <?php } } ?>                                                   
                </div>
            </div>
            <div class="container pb-4">
                <nav aria-label="Page navigation blogPagination">               
                    <?php echo $pagination->createLinks();?>                 
                </nav>
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
    <?php require './include/footerlinks.php';?>
    </footer>

</body>

</html>
