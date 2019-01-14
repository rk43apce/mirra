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

<?php include './include/csslinks.php';?>
</head>

<body>

    <header class="header-transparent" id="header-main">
<?php include './include/search.php'?><!-- Main navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
<?php include './include/header.php'?>
</nav>
    </header>

    <main>
        <!-- Spotlight -->
        <section class="slice slice-lg pb-150 bg-gradient-primary">
            <div class="container pt-lg">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="display-4 text-white lh-110">Unifying administrative function and patient care</h1>
                        <p class="lead mb-4 text-white mt-4">Maximize your reimbursement and reduce your turnaround time</p>
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
                        <h4>Claims Submission</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                        Timely claims submission of billable fees to insurance companies is carried out for you.
                        </p>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Patient Collections</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                           Patient balances and payments left to be collected are also determined by Mirra on your behalf.
                        </p>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Patient Registration</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                         Accurate patient information is collected at all stages to establish an updated and verified medical record of all your patients.
                        </p>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Remittance Processing</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                         Application or Rejection of payments is observed and undertaken through remittance processing.
                        </p>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Third Party Follow Up</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                         Mirra communicated with third-party insurers on your behalf and timely collects payments from them.
                        </p>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <h4>Utilization Review</h4>
                    </div>
                    <div class="col-lg-8">
                        <p class="lead lh-180">
                         Each medical service offered by your practice is examined to establish its necessity, resulting in proper utilization reviews.
                        </p>
                    </div>
                </div>




            </div>
        </section>

        <section class="slice slice-lg bg-secondary">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 text-center">

                       <h3 class="heading h2">Mirra helps create a robust revenue cycle that provides a consistent supply of fuel through seamless financial transactions ensuring the optimal functioning of a healthcare establishment.</h3>

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

                       <h3 class="heading h2">Unify your Administrative Processes</h3>
                       <div class=" mt-3">
                        <p class="lead"> Mirra Healthcare can help you achieve an uber-efficient approach by offering a complete set of services that work holistically in tandem, to iron out all the creases in your revenue management system.</p>
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
                </div> -->
               <!--  <div class="row row-grid">
                    <div class="col-lg-6">


                        <div class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="./assets/img/mirra/psingh-video.jpg">
                                <a href="https://www.youtube.com/watch?v=4jSz_4Y2sdk&feature=youtu.be" class="btn btn-lg btn-white btn-icon-only btn-zoom--hover rounded-circle shadow-sm position-absolute right-4 top-4" data-fancybox="">
                                    <span class="btn-inner--icon"><i class="fas fa-play"></i></span>
                                </a>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <h3 class="heading h2">
                           We transform your bills to revenue in a systematic flow keeping in mind the different stages of the process. 
                        </h3>
                    </div>
                </div> -->
               
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
