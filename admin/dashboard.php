
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Mirra Healthcare | Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.css">


</head>

<body>


    <header class="header-transparent" id="header-main">   
        <?php include './admin-header.php'; ?>
    </header>

    <main>
        <header class="header-account-page bg-gradient-primary d-flex align-items-end">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5 mb-4 mb-md-0">
                                <span class="h2 mb-0 text-white d-block">Morning Heather</span>
                                <span class="text-light">Have a nice day!</span>
                            </div>                           
                        </div>                        
                    </div>
                </div>
            </div>
        </header>

        <section class="slice bg-secondary">
            <div class="container">  
                <div class="card-deck flex-column flex-lg-row">                   
                    <div class="card shadow--hover mb-4 mb-lg-0">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Latest tasks</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                        <div class="dropdown action-item" data-toggle="dropdown">
                                            <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a href="#" class="dropdown-item">Refresh</a>
                                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                                <a href="#" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                                <div class="timeline-block my-0 mb-4">
                                    <span class="timeline-step timeline-step-sm bg-info border-info text-white">1</span>
                                    <div class="timeline-content">
                                        <span class="text-muted text-sm">Task added</span>
                                        <h6 class="text-sm mb-0">Meet with Jane for discussing the presentation</h6>
                                        <small><i class="fas fa-clock mr-1"></i>45 min ago</small>
                                    </div>
                                </div>
                                <div class="timeline-block my-0 mb-4">
                                    <span class="timeline-step timeline-step-sm bg-warning border-warning text-white">2</span>
                                    <div class="timeline-content">
                                        <span class="text-muted text-sm">Big event today</span>
                                        <h6 class="text-sm mb-0">Meet with Jane for discussing the presentation</h6>
                                        <small><i class="fas fa-clock mr-1"></i>1 hr ago</small>
                                    </div>
                                </div>
                                <div class="timeline-block my-0 mb-0">
                                    <span class="timeline-step timeline-step-sm border-success bg-success text-white">3</span>
                                    <div class="timeline-content">
                                        <span class="text-muted text-sm">Canceled meeting</span>
                                        <h6 class="text-sm mb-0">Meet with Jane for discussing the presentation</h6>
                                        <small><i class="fas fa-clock mr-1"></i>2 hrs ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </section>
    </main>  

    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/in-view/dist/in-view.min.js"></script>
    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

</body>

</html>
