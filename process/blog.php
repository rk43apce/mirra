<?php
require_once '../autoload/init.php';

if(!Input::exists('post')) {
    
    Redirect::to(baseUrl);
    exit();
}

$limit =  Input::get('limit');
$category = Input::get('category');

$action = Input::get('action');

$blog = new Blog();


if($action== 'geBlogs') {

    
$blogData = $blog->getBlogs($limit, $category);	

if(!empty($blogData)) {

foreach ($blogData as $key => $row) {
    
    $cnt= 0;

    if($cnt % 2 == 1) { 
        echo '<div class="col-md-12">';
    }

    ?>		

    <div class="col-lg-4 py-2">
        <div class="card shadow-sm shadow--hover ">
            <img alt="Image placeholder" src="assets/img/mirra/hmo-hosp-2.jpg" class="card-img-top">
            <div class="card-body py-5 text-center" style='min-height:275px;'>
                <span class="badge badge-pill badge-warning d-inline mt-2"><?php echo $row['category'] ?></span>
                <a href="#" class="h5 lh-150 d-block mt-3"><?php echo $row['title'] ?></a>                
            </div>
        </div>
    </div>

<?php 

if($cnt % 2 == 0) { 
    echo '</div>';
}

}} else {
    ?>
    <div class="col-lg-12">
        
        <div class="mb-md text-center">
            <h3 class="h3">Sorry!. Currently nothing to show.</h3>
            <div class="fluid-paragraph text-center mt-4">
            <p class="lead lh-180"></p>
            </div>
        </div>
    </div>
    <?php
} ; 

// 
}


if($action == 'getIntroBlog') {
    


    ?>		
    
<section class="spotlight bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/img/backgrounds/img-1-1920x800.jpg');">
                <div class="spotlight-holder py-lg py-lg-0">
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container py-md d-flex align-items-center">
                        <div class="col">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-7 text-center">
                                    <h1 class="text-white lh-150 mb-4">The Employee Review Process: How Can We Make it More Dynamic?</h1>
                                    <ul class="list-inline">
                                        <li class="list-inline-item text-white">Written by Pariksith Singh</li>
                                    </ul>
                                    <span class="clearfix"></span>
                                    <a href="#" class="btn btn-white btn-circle btn-icon mt-4">
                                        <span class="btn-inner--text">Continue reading</span>
                                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php 



}



?>
        



