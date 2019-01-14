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

    <title>Mirra Healthcare | Home</title>

     <?php include './include/csslinks.php' ?>   
</head>

<body>

    <header class="header-transparent" id="header-main">
        <!-- Search -->
        <?php include './include/search.php' ?>   
        <!-- Main navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
        <?php include './include/header.php' ?>
        </nav>
    </header>

    <main>

        <section class="section-rotate" >
            <div class="section-inner bg-gradient-primary" ></div>
            <!--Illustation -->
            <div class="pt-5 position-absolute middle right-0 col-lg-6 col-xl-6 d-none d-lg-block">
                <!-- <img alt="" src="./assets/img/svg/in-sync.svg" class="img-fluid"> -->
            </div>
            <!-- SVG shapes background - Hexagons -->
            <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                <figure class="w-100">

                    <svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1506.3 578.7" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-fill-purple" d="M 147.269 295.566 C 147.914 293.9 149.399 292.705 151.164 292.431 L 167.694 289.863 C 169.459 289.588 171.236 290.277 172.356 291.668 L 182.845 304.699 C 183.965 306.091 184.258 307.974 183.613 309.64 L 177.572 325.239 C 176.927 326.905 175.442 328.1 173.677 328.375 L 157.147 330.943 C 155.382 331.217 153.605 330.529 152.485 329.137 L 141.996 316.106 C 140.876 314.714 140.583 312.831 141.228 311.165 L 147.269 295.566 Z"
                        />
                        <path class="shape-fill-green" d="M 92.927 474.881 C 93.309 473.896 94.187 473.19 95.23 473.028 L 105.002 471.51 C 106.045 471.347 107.096 471.754 107.758 472.577 L 113.959 480.28 C 114.621 481.103 114.794 482.216 114.413 483.201 L 110.841 492.423 C 110.46 493.408 109.582 494.114 108.539 494.277 L 98.767 495.795 C 97.723 495.957 96.673 495.55 96.011 494.727 L 89.81 487.024 C 89.148 486.201 88.975 485.088 89.356 484.103 L 92.927 474.881 Z"
                        />
                        <path class="shape-fill-teal" d="M 34.176 36.897 C 34.821 35.231 36.306 34.036 38.071 33.762 L 54.601 31.194 C 56.366 30.919 58.143 31.608 59.263 32.999 L 69.752 46.03 C 70.872 47.422 71.165 49.305 70.52 50.971 L 64.479 66.57 C 63.834 68.236 62.349 69.431 60.584 69.706 L 44.054 72.274 C 42.289 72.548 40.512 71.86 39.392 70.468 L 28.903 57.437 C 27.783 56.045 27.49 54.162 28.135 52.496 L 34.176 36.897 Z"
                        />
                        <path class="shape-fill-blue" d="M 975.636 9.762 C 976.101 8.561 977.171 7.7 978.443 7.502 L 990.354 5.652 C 991.626 5.454 992.907 5.95 993.714 6.953 L 1001.272 16.343 C 1002.079 17.346 1002.29 18.703 1001.826 19.903 L 997.472 31.144 C 997.008 32.344 995.938 33.205 994.666 33.403 L 982.754 35.254 C 981.483 35.451 980.202 34.956 979.395 33.953 L 971.837 24.563 C 971.03 23.559 970.818 22.203 971.283 21.002 L 975.636 9.762 Z"
                        />
                        <path class="shape-fill-gray-dark" d="M 1417.759 409.863 C 1418.404 408.197 1419.889 407.002 1421.654 406.728 L 1438.184 404.16 C 1439.949 403.885 1441.726 404.574 1442.846 405.965 L 1453.335 418.996 C 1454.455 420.388 1454.748 422.271 1454.103 423.937 L 1448.062 439.536 C 1447.417 441.202 1445.932 442.397 1444.167 442.672 L 1427.637 445.24 C 1425.872 445.514 1424.095 444.826 1422.975 443.434 L 1412.486 430.403 C 1411.366 429.011 1411.073 427.128 1411.718 425.462 L 1417.759 409.863 Z"
                        />
                        <path class="shape-fill-orange" d="M 1313.903 202.809 C 1314.266 201.873 1315.1 201.201 1316.092 201.047 L 1325.381 199.604 C 1326.373 199.449 1327.372 199.837 1328.001 200.618 L 1333.895 207.941 C 1334.525 208.723 1334.689 209.782 1334.327 210.718 L 1330.932 219.484 C 1330.57 220.42 1329.735 221.092 1328.743 221.246 L 1319.454 222.689 C 1318.462 222.843 1317.464 222.457 1316.834 221.674 L 1310.94 214.351 C 1310.31 213.569 1310.146 212.511 1310.508 211.575 L 1313.903 202.809 Z"
                        />
                        <path class="shape-fill-red" d="M 1084.395 506.137 C 1084.908 504.812 1086.09 503.861 1087.494 503.643 L 1100.645 501.6 C 1102.049 501.381 1103.463 501.929 1104.354 503.036 L 1112.699 513.403 C 1113.59 514.51 1113.823 516.009 1113.31 517.334 L 1108.504 529.744 C 1107.99 531.07 1106.809 532.02 1105.405 532.239 L 1092.254 534.282 C 1090.85 534.5 1089.436 533.953 1088.545 532.845 L 1080.2 522.478 C 1079.309 521.371 1079.076 519.873 1079.589 518.547 L 1084.395 506.137 Z"
                        />
                    </svg>


                </figure>
            </div>
            <!-- Hero container -->
            <div class="container pt-lg pb-xl-md position-relative zindex-100">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <a href="register.php" class="alert alert-news" data-toggle="tooltip" data-original-title="Click to Login">
                            <span class="badge badge-pill badge-warning">New</span>
                            <span class="alert-content">Connect with healthcare professionals with Mirra Community</span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <div class="">
                            <h2 class="text-white my-4">
	                    <span class="display-4 font-weight-light">Unifying Healthcare</span>
	                    <span class="d-block">You <strong class="font-weight-light">Focus on Patient Care</strong></span>
						<span class="d-block">We <strong class="font-weight-light">Take Care of the Rest</strong></span>		
	                </h2>
                            <p class="lead text-white">Mirra improves the quality of healthcare by improving efficiency and creating inter-operability by providing resources with a holistic and comprehensive approach touching all aspects of healthcare integrating The Payor, The Patient and The Provider.</p>
                            <div class="mt-5">
                                <a href="./services.php" class="btn btn-dark btn-circle btn-translate--hover btn-icon mr-sm-4 scroll-me">
                                    <span class="btn-inner--text">Mirra's Services</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                                <a href="./insights.php" class="btn btn-outline-white btn-circle btn-translate--hover btn-icon d-none d-xl-inline-block scroll-me">
                                    <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                                    <span class="btn-inner--text">Explore Insights</span>
                                </a>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-6 text-center pt-5" style="vertical-align: middle;">
						<a href="https://www.youtube.com/watch?v=mqpwDJpI3Rc" data-fancybox><img class="mt-4 rounded" src="assets/img/mirra/psingh-video.jpg" width="100%" style="vertical-align: middle"></a>
						<small><p class="text-white text-left mt-2">Dr. Pariksith Singh, CEO, Mirra<sup>®</sup> Healthcare introducing Mirra</p></small>
						
					</div>
                </div>
            </div>
        </section>

        <section id="sct_page_examples" class="slice">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card bg-gradient-primary shadow-primary border-primary animate-this">
                                <div class="py-5 text-center">
                                    <img alt="Image placeholder" src="./assets/img/mirra/medical-credentialing-services.png" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="./credentialing.php" class="btn btn-sm btn-white btn-circle">Credentialing & Contracting</a>
                                    <p class="text-white mt-4">Maximize reimbursement and decrease credentialing turnaround time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card shadow animate-this">
                                <div class="py-5 text-center">
                                    <img alt="" src="./assets/img/mirra/provider-enrollment-services.png" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="./utilization-management.php" class="btn btn-sm btn-dark btn-circle">Utilization Management</a>
                                    <p class="mt-4">Efficiently designed for Prior Authorization & Referral Management</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card shadow animate-this">
                                <div class="py-5 text-center">
                                    <img alt="" src="./assets/img/mirra/quality.png" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="#" class="btn btn-sm btn-dark btn-circle">Quality</a>
                                    <p class="mt-4">Set standards of quality performance and ensure benefits</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card shadow animate-this">
                                <div class="py-5 text-center">
                        
                                    <img alt="" src="./assets/img/mirra/compliance-and-audits.png" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="https://thehealthcareprimer.com/compliance-quotient.php" target="_blank" class="btn btn-sm btn-dark btn-circle">Compliance & Auditing</a>
                                    <p class="mt-4">Set standards of compliance at par with regulatory standards</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fluid-paragraph text-center mt-5">
                    <p><strong class="text-primary">*Good to know!</strong> Mirra's Products and Services have been designed to provide support and resources in a truly unified and global model of healthcare. Mirra increases the return on investments of IPAs, HMOs, ACOs and Solo Providers.</p>
					<a href="./services.php" class="btn btn-warning btn-circle btn-translate--hover btn-icon mr-sm-4 scroll-me">
						<span class="btn-inner--text">Explore all Services</span>
						<span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
					</a>
                </div>
            </div>
        </section>

        <section class="slice bg-gradient-secondary overflow-hidden">
            <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                <figure class="w-100">

                    <svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1506.3 578.7" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-fill-purple" d="M 147.269 295.566 C 147.914 293.9 149.399 292.705 151.164 292.431 L 167.694 289.863 C 169.459 289.588 171.236 290.277 172.356 291.668 L 182.845 304.699 C 183.965 306.091 184.258 307.974 183.613 309.64 L 177.572 325.239 C 176.927 326.905 175.442 328.1 173.677 328.375 L 157.147 330.943 C 155.382 331.217 153.605 330.529 152.485 329.137 L 141.996 316.106 C 140.876 314.714 140.583 312.831 141.228 311.165 L 147.269 295.566 Z"
                        />
                        <path class="shape-fill-green" d="M 92.927 474.881 C 93.309 473.896 94.187 473.19 95.23 473.028 L 105.002 471.51 C 106.045 471.347 107.096 471.754 107.758 472.577 L 113.959 480.28 C 114.621 481.103 114.794 482.216 114.413 483.201 L 110.841 492.423 C 110.46 493.408 109.582 494.114 108.539 494.277 L 98.767 495.795 C 97.723 495.957 96.673 495.55 96.011 494.727 L 89.81 487.024 C 89.148 486.201 88.975 485.088 89.356 484.103 L 92.927 474.881 Z"
                        />
                        <path class="shape-fill-teal" d="M 34.176 36.897 C 34.821 35.231 36.306 34.036 38.071 33.762 L 54.601 31.194 C 56.366 30.919 58.143 31.608 59.263 32.999 L 69.752 46.03 C 70.872 47.422 71.165 49.305 70.52 50.971 L 64.479 66.57 C 63.834 68.236 62.349 69.431 60.584 69.706 L 44.054 72.274 C 42.289 72.548 40.512 71.86 39.392 70.468 L 28.903 57.437 C 27.783 56.045 27.49 54.162 28.135 52.496 L 34.176 36.897 Z"
                        />
                        <path class="shape-fill-blue" d="M 975.636 9.762 C 976.101 8.561 977.171 7.7 978.443 7.502 L 990.354 5.652 C 991.626 5.454 992.907 5.95 993.714 6.953 L 1001.272 16.343 C 1002.079 17.346 1002.29 18.703 1001.826 19.903 L 997.472 31.144 C 997.008 32.344 995.938 33.205 994.666 33.403 L 982.754 35.254 C 981.483 35.451 980.202 34.956 979.395 33.953 L 971.837 24.563 C 971.03 23.559 970.818 22.203 971.283 21.002 L 975.636 9.762 Z"
                        />
                        <path class="shape-fill-gray-dark" d="M 1417.759 409.863 C 1418.404 408.197 1419.889 407.002 1421.654 406.728 L 1438.184 404.16 C 1439.949 403.885 1441.726 404.574 1442.846 405.965 L 1453.335 418.996 C 1454.455 420.388 1454.748 422.271 1454.103 423.937 L 1448.062 439.536 C 1447.417 441.202 1445.932 442.397 1444.167 442.672 L 1427.637 445.24 C 1425.872 445.514 1424.095 444.826 1422.975 443.434 L 1412.486 430.403 C 1411.366 429.011 1411.073 427.128 1411.718 425.462 L 1417.759 409.863 Z"
                        />
                        <path class="shape-fill-orange" d="M 1313.903 202.809 C 1314.266 201.873 1315.1 201.201 1316.092 201.047 L 1325.381 199.604 C 1326.373 199.449 1327.372 199.837 1328.001 200.618 L 1333.895 207.941 C 1334.525 208.723 1334.689 209.782 1334.327 210.718 L 1330.932 219.484 C 1330.57 220.42 1329.735 221.092 1328.743 221.246 L 1319.454 222.689 C 1318.462 222.843 1317.464 222.457 1316.834 221.674 L 1310.94 214.351 C 1310.31 213.569 1310.146 212.511 1310.508 211.575 L 1313.903 202.809 Z"
                        />
                        <path class="shape-fill-red" d="M 1084.395 506.137 C 1084.908 504.812 1086.09 503.861 1087.494 503.643 L 1100.645 501.6 C 1102.049 501.381 1103.463 501.929 1104.354 503.036 L 1112.699 513.403 C 1113.59 514.51 1113.823 516.009 1113.31 517.334 L 1108.504 529.744 C 1107.99 531.07 1106.809 532.02 1105.405 532.239 L 1092.254 534.282 C 1090.85 534.5 1089.436 533.953 1088.545 532.845 L 1080.2 522.478 C 1079.309 521.371 1079.076 519.873 1079.589 518.547 L 1084.395 506.137 Z"
                        />
                    </svg>


                </figure>
            </div>
            <div class="container position-relative zindex-100">
                <div class="mb-md text-center">
                    <span class="badge badge-lg badge-success badge-pill">About Mirra</span>
                    <h3 class="mt-4">Built for <strong class="font-weight-700">YOU</strong></h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">Our products and services utilise the latest technologies and tools in order to support you focus on patient care while we take care of the rest.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-green rounded-circle">
                                        <i class="fab fa-html5"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Created with the latest technologies</h5>
                                    </div>
                                </div>
                                <p class="mt-4">Backed by technology, Mirra establishes a cutting edge innovative, secured and a patient safety organization</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body pt-5 pb-2">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-orange rounded-circle">
                                        <i class="fab fa-node-js"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Designed by physicians for healthcare professionals</h5>
                                    </div>
                                </div>
                                <p class="mt-4">Designed to make the doctor-patient relationship stronger by improving the efficiency of doctors, create inter-operability, improving the health and wellbeing of the patient and increase return on investment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-teal rounded-circle">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Made for increasing Return on Investment</h5>
                                    </div>
                                </div>
                                <p class="mt-4">Increasing return on investment of group practices, IPAs, HMOs and ACOs and Solo Providers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-xl bg-gradient-primary has-floating-items" id="sct_call_to_action">
            <a href="#sct_call_to_action" class="tongue tongue-up tongue-secondary scroll-me"><i class="fas fa-angle-up"></i></a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white strong-600">How can Mirra<sup>®</sup> help you?</h1>
                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-8">
                                <p class="lead text-white">
                                    We'd love to talk about how we can help you.
                                </p>
                                <div class="btn-container mt-5">
                                    <a href="./contact.php"  class="btn btn-white btn-circle btn-translate--hover px-4 mr-lg-4">Contact us</a>
                                    <a href="./services.php" class="btn btn-warning btn-circle btn-translate--hover px-4">Explore our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container floating-items">
                <div class="floating-icon"><span></span>
                    <img alt="" src="./assets/img/mirra/billing-management.png" class="img-saturate" style="width: 50px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="./assets/img/mirra/care-management.png" class="img-saturate" style="width: 76px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="./assets/img/mirra/quality.png" class="img-saturate" style="width: 36px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="./assets/img/mirra/claims-management.png" class="img-saturate" style="width: 76px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="./assets/img/mirra/provider-enrollment-services.png" class="img-saturate" style="width: 46px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="./assets/img/mirra/medical-credentialing-services.png" class="img-saturate" style="width: 36px;">
                </div>
            </div>
        </section>

        <section class="slice slice-lg pt-md-xl bg-secondary">
            <div class="container">
                <div class="mb-md text-center">
                    <h3 class="h3">Learn how to deliver better patient care</h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180"></p>
                    </div>
                </div>
				<div class="row">
					<div class="col-lg-12 swiper-js-container">
						<div class="swiper-container" data-swiper-effect="coverflow" data-swiper-centered-slides="true" data-swiper-initial-slide="1" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="3" data-swiper-sm-space-between="0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="text-white">
                                            <img alt="Image placeholder" class="img-fluid rounded" src="assets/img/mirra/2018healthcareprimer.jpg">
                                            <div class="card-img-overlay d-flex align-items-end">
                                                <div class="col text-center">
                                                    <a href="https://www.amazon.in/2018-HEALTH-PRIMER-Pariksith-Singh/dp/069216801X/ref=sr_1_3?ie=UTF8&qid=1544941627&sr=8-3&keywords=Pariksith+Singh" target="_blank" class="btn btn-warning btn-circle btn-translate--hover px-4">Get it now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="text-white">
                                            <img alt="Image placeholder" class="img-fluid rounded" src="assets/img/mirra/growyourmedicalpractice.jpg">
                                            <div class="card-img-overlay d-flex align-items-end">
                                                <div class="col text-center">
                                                    <a href="https://www.amazon.in/Grow-Your-Medical-Practice-Life-ebook/dp/B07BDJ7XDD/ref=sr_1_1?ie=UTF8&qid=1544941627&sr=8-1&keywords=Pariksith+Singh" target="_blank" class="btn btn-warning btn-circle btn-translate--hover px-4">Get it now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="text-white">
                                            <img alt="Image placeholder" class="img-fluid rounded" src="assets/img/mirra/healthcarecompliance.jpg">
                                            <div class="card-img-overlay d-flex align-items-end">
                                                <div class="col text-center">
                                                    <a href="https://www.amazon.in/Grow-Your-Medical-Practice-Life-ebook/dp/B07BDJ7XDD/ref=sr_1_1?ie=UTF8&qid=1544941627&sr=8-1&keywords=Pariksith+Singh" target="_blank" class="btn btn-warning btn-circle btn-translate--hover px-4">Get it now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
					</div>	
				</div>
                
            </div>
        </section>

        <section class="slice slice-lg" id="sct_features">
            <a href="#sct_features" class="tongue tongue-up tongue-secondary scroll-me"><i class="fas fa-angle-up"></i></a>
            <div class="container pb-4" >
                <div class="mb-md text-center">
                    <h3 class="h3">Latest from the blog</h3>
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
                        <a href="./blog-article.php?blogId=<?php echo $row['id'] ?>" class="h5 lh-150 d-block mt-3"><?php echo $row['title'] ?></a>                
                        </div>
                        </div>
                    </div>
                <?php } } ?>                                                   
                </div>
            </div>
        </section>

        <section class="slice slice-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="card bg-gradient-dark shadow shadow-lg--hover border-0 position-relative zindex-100">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="text-white h4">Explore all insights</h3>
                                        <p class="text-white mb-0">Our insights are designed to keep you on top of the industry news and developments and help you deliver best-in-class patient care</p>
										<a href="./insights.php"  class="text-warning lh-150">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="card bg-gradient-secondary shadow shadow-lg--hover border-0 position-relative zindex-100">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon text-primary">
                                        <i class="fas fa-question-circle"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h4">Find out how Mirra<sup>®</sup> can help</h3>
                                        <p class="mb-0">Use our dedicated support email to send your issues or suggestions. We are here to help anytime: <strong class="text-dark">info@mirrahealthcare.com</strong>
                                        </p>
										<a href="./contact.php" class="lh-150">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <footer class="footer footer-dark bg-gradient-primary footer-rotate">
    <?php require './include/footer.php';?>       
    </footer>
    <!-- Core -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/in-view/dist/in-view.min.js"></script>

    <!-- Page plugins -->
    <script src="./assets/vendor/highlight.js/lib/highlight.js"></script> 
    <script src="assets/vendor/swiper/dist/js/swiper.min.js"></script>
	<script src="assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>

    <!-- Theme JS -->

    <script src="./assets/js/theme.min.js"></script>  

        <script type="text/javascript">

        $('#suggestInpute').on('keyup keypress blur change', function(e) {
        // e.type is the type of event fired
            var searchstring = $('#suggestInpute').val();

            if (searchstring != '' && searchstring.length > 2) {

            $.ajax({
                type: 'POST',
                url: './process/suggestion.php', 
                data: {searchstring:searchstring},       
                success:function(resp){
                    $('#suggestionList').html(resp);
                    console.log(resp);     

                }
            });

            }

        });

    </script>              

</body>

</html>
