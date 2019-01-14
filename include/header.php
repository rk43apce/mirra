<div class="container">
    <a class="navbar-brand mr-lg-5" href="./index.php">
        <?php $logoname = (Input::get('blogId'))? "mirra-logo.png" : "mirra-logo-white.png";?>
        <img alt="Image placeholder" src="./assets/img/mirra/<?php echo $logoname; ?>" style="height: 70px;">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-main-collapse">
        <ul class="navbar-nav align-items-lg-center">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./services.php">Services</a>
            </li>
        </ul>

        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
                <a class="nav-link" href="./insights.php">Insights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./contact.php">Contact</a>
            </li>
            <li class="nav-item mr-0">
                <a href="register.php" target="_blank" class="nav-link d-lg-none">Register Now</a>
                <a href="register.php" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">                    
                    <span class="btn-inner--text">Register Now</span>
                </a>
            </li>
        </ul>

    </div>
</div>