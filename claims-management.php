<?php
    require_once './autoload.php';
    $blog = new Blog();
    $blogData = $blog->getBlogs('3');     
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>Mirra Healthcare | Services</title>

   <?php include './include/csslinks.php'; ?>

</head>

<body>

    <header class="header-transparent" id="header-main">
        <?php include './include/search.php' ?>  
        <!-- Main navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <?php include './include/header.php' ?>
        </nav>
    </header>

    <main>
        <!-- Spotlight -->
        <section class="slice slice-lg pb-150 bg-gradient-primary">
            <div class="container pt-lg">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="display-4 text-white lh-110">Simplify your Claims Processing</h1>
                        <p class="lead mb-4 text-white mt-4">Break down each element and obtain high accuracy</p>
                        <div class="mt-5">
                            <a href="./contact.php" class="btn btn-outline-white btn-icon btn-circle btn-translate--hover">
                                <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                <span class="btn-inner--text">Schedule a call today</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-container" data-shape-style="curve" data-shape-position="bottom">
                <svg class="shape-fill-white" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
                </svg>
            </div>
        </section>

        <section class="slice slice-lg delimiter-bottom">
             <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="mb-md text-center">                           
                            <h3 class="h1 font-weight-400 lh-150 my-4">Features & Services</h3>
                            <!-- <p class="lead">One-Stop Shop for Credentialing</p> -->
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="container">
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Claims Adjudication Management</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                           Claims Adjudication Management processes your claims with the utmost accuracy consequently improving your turnaround time and increasing your output.
                        </p>                       
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Claims Gateway</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                            Mirra’s very own claims gateway processes over a thousand claims a day and has consequently reduced the error rate from 30% to less than 0.1% for its clients.
                        </p>                        
                    </div>                    
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Claims Lite</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                          Claims Lite, an extension of Mirra’s Claim Management services, converts all your paper claims into electronic forms. The digitiation of all your claims not only provides you with statistics on claims but also organizes them based on structure and type.
                        </p>                        
                    </div>                    
                </div>
               
                
                
            </div>
        </section>

        <section class="slice slice-lg bg-secondary">         

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 text-center">
                       
                       <h3 class="heading h2">Our in-house billing and claims processing software reduce the error rate from the average 30% to less than 0.1%. This means fewer denials, fewer claims pended for additional information and less work for your team.</h3>
                       
                        <div class="mt-5">
                            <a href="contact.php" class="btn btn-primary btn-circle btn-translate--hover px-4">Schedule a call today</a>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <section class="slice slice-lg">
            <div class="container">
                <div class="mb-md text-center">
                    <h3 >Key insights on Healthcare</h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">Stay on top with the lastest industry insights from Mirra<sup>®</sup></p>
                    </div>
                </div>
                <div class="container pb-4">
                    <div class="row row-grid">
                    <?php  if(!empty($blogData)) {
                    foreach ($blogData as $key => $row) {                     
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

            </div>
        </section>

        
        <section class="slice slice-lg bg-secondary">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 text-center">
                       
                       <h3 class="heading h2">Outsource your Claims today</h3>
                       <div class=" mt-3">
                        <p class="lead"> Spend fewer dollars and lesser man-hours in training your internal staff and let them focus on patient care. Focus on your patient care, while we take care of the rest.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="slice slice-lg">
            <div class="container">
                <!-- <div class="mb-md text-center">
                    <h3 class="heading h2">We transform your bills to revenue in a systematic flow keeping in mind the different stages of the process.</h3>
                    <div class="fluid-paragraph mt-3">
                        <p class="lead">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
                    </div>
                    -->
                </div> 
          
        </section>

        <section class="slice slice-lg pt-0 delimiter-bottom">
            <div class="container">
                
                <div class="row row-grid align-items-center justify-content-around">
                    <div class="col-lg-5 order-lg-2">
                        <div class="pr-md-4">
                            <span class="badge badge-lg badge-primary opacity-8 text-uppercase ls-1 font-weight-600 mb-3">GET IN TOUCH</span>
                            <h3 class="heading h3">Schedule a call with a Mirra<sup>®</sup> evangelist</h3>
                            <p class="lead my-4">Learn more about our products and service and how we can help you</p>
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-primary btn-circle btn-icon mt-4">
                                <span class="btn-inner--text">Schedule Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="position-relative" style="z-index: 10;">
                            <img alt="Image placeholder" src="assets/img/prv/app-3.png" class="img-center img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>    

    </main>

    <footer class="footer footer-dark bg-gradient-primary footer-rotate">
        <?php require './include/footer.php';?>
        <?php require './include/footerlinks.php';?>
    </footer>

</body>

</html>
