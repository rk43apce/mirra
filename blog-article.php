<?php
    require_once './autoload.php';
     require_once './functions/sanitize.php';

    if(!Input::exists('get')) {

        Redirect::to(baseUrl);
    }

    $blogId = Input::get('blogId');

    $blog = new Blog();
    $blogData = $blog->getBlogById($blogId);     

    $title = $blogData['title'];
    $summary = $blogData['summary'];
    $category = $blogData['category'];
    $content =  $blogData['content'];
    $image = $blogData['image'];
    
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

<body>

    <header class="header-transparent" id="header-main">
        <!-- Search -->       
         <?php include './include/search.php' ?>  
        <!-- Main navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-light bg-white" id="navbar-main">
            <?php include './include/header.php' ?>
        </nav>

    </header>

    <main>
        <section class="slice slice-lg">
            <div class="container pt-lg">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                      
                        <h1 class="lh-150 mb-3"><?php echo $title; ?></h1>                      
                        <div class="media align-items-center mt-5">
                            <img alt="Image placeholder" src="./assets/img/mirra/pariksith-singh.jpg" class="avatar avatar-sm mr-3">
                            <div class="media-body">
                                <span class="h6 mb-0">Pariksith Singh, MD</span>
                                <span class="text-small text-muted">25th October 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <!-- Article body -->
                        <article>
                            <?php echo $content; ?>
                        </article>
                        <hr>

                        </div> 

                    </div>
                </div>
            </div>
        </section>

        <section class="slice py-5 bg-secondary delimiter-top">
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
                                <div class="input-group input-group-transparent input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white border-right-0"><i class="fas fa-envelope-open"></i></span>
                                    </div>
                                    <input type="text" class="form-control border-left-0" placeholder="Enter your email ..">
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
