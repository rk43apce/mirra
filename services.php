<?php
    require_once './autoload.php';
    $services = new Services();
    $servicesData = $services->getServices();     
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
        <section class="slice slice-lg pb-250 bg-gradient-primary">
            <div class="container pt-lg">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="display-4 text-white lh-110">Services to help you focus on Patient Care</h1>
                        <p class="lead mb-4 text-white mt-4">Driven by latest Technology, Designed by Physicians</p>
                        <div class="mt-5">
                            <a href="./contact.php" class="btn btn-outline-white btn-icon btn-circle btn-translate--hover">
                                <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                <span class="btn-inner--text">Contact us</span>
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

        <section class="slice slice-lg pt-lg-sm mb-5">
            <div class="container">
                <div class="row row-grid">
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                    <img alt="Image placeholder" src="./assets/img/mirra/medical-credentialing-services.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Credentialing and Contracting</h5>
                                    <p class="my-4">Maximize reimbursement and decrease credentialing turnaround time</p>
                                    <a href="./credentialing.php" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                    <img alt="Image placeholder" src="./assets/img/mirra/provider-enrollment-services.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Utilization Management</h5>
                                    <p class="my-4">Efficiently designed for Prior Authorization & Referral Management</p>
                                    <a href="./utilization-management.php" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                     <img alt="Image placeholder" src="./assets/img/mirra/quality.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Quality</h5>
                                    <p class="my-4">Set standards of quality performance and ensure benefits</p>
                                    <a href="./claims-management.php" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                   
                                    <img alt="Image placeholder" src="./assets/img/mirra/compliance-and-audits.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Compliance and Audit</h5>
                                    <p class="my-4">Set standards of compliance at par with regulatory standards</p>
                                    <a href="https://thehealthcareprimer.com/compliance-quotient.php" target="_blank" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
		<br>
		<section class="slice slice-lg pt-lg-sm mt-5">
			<div class="container">
				<div class="row row-grid">
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                    <img alt="Image placeholder" src="./assets/img/mirra/revenue-cycle-management.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Revenue Cycle Management</h5>
                                    <p class="my-4">Maximize reimbursement and decrease credentialing turnaround time</p>
                                    <a href="./revenue-cycle-management.php" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                    <img alt="Image placeholder" src="./assets/img/mirra/care-management.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Care Management</h5>
                                    <p class="my-4">Efficiently designed for Prior Authorization & Referral Management</p>
                                    <a href="#" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                    <img alt="Image placeholder" src="./assets/img/mirra/billing-management.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Billing Management</h5>
                                    <p class="my-4">Set standards of quality performance and ensure benefits</p>
                                    <a href="./billing-management.php" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div data-animate-hover="1">
                            <div class="card shadow-sm animate-this">
                                <div class="card-body py-5 px-lg-5">
                                    <img alt="Image placeholder" src="./assets/img/mirra/medical-credentialing-services.png" style="width: 70px;">
                                    <h5 class="h5 mt-4">Education</h5>
                                    <p class="my-4">Set standards of compliance at par with regulatory standards</p>
                                    <a href="#" class="link font-weight-bold" data-link="1">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg pt-0 delimiter-bottom">
            <div class="container">
                <div class="mb-md text-center">
                    <h3 class="heading h3">Designed to Increase Return on Investment </h3>
                    <div class="fluid-paragraph fluid-paragraph-sm text-center mt-4">
                        <p class="lead lh-180">Mirra<sup>®</sup> is a full service resource for group practices, IPAs, HMOs and ACOs and Solo Providers</p>
                    </div>
                </div>

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
                            <img alt="Image placeholder" src="assets/img/mirra/app-3.png" class="img-center img-fluid">
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
