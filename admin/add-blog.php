<?php 
require_once '../autoload/init.php';
require_once '../functions/sanitize.php';

$blog = new Blog();

if (Input::exists('post')) {
    //Get post values
    $title =  Input::get('title');
    $category =  Input::get('category');
    $content =  Input::get('content');
    $blogData = array(
        "title"=>$title, 
        "category"=>$category, 
        "content"=>$content
    );
     
    if ($blog->addBlog($blogData)) { 
        Session::put('errorMsg', 'Blog Successfully Added!');
        Redirect::to('manageBlog.php');
        exit();
    } else {
        Session::put('errorMsg', 'Fail to add. Please try again!');
    }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

  
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
        <!-- Main navbar -->
        <?php include './admin-header.php'; ?>
    </header>

    <main>
        <header class="header-account-page bg-gradient-primary d-flex align-items-end">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-12">
                        <!-- Salute + Small stats -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5 mb-4 mb-md-0">
                                <span class="h2 mb-0 text-white d-block">Blog</span>
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
                        <div class="card-body pt-10">                            
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <!-- General -->
                                <div class="page-inner-header mb-4">
                                    <h5 class="mb-1">Add blog</h5>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Title</label>
                                            <input name="title" class="form-control"  placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Category</label>
                                           <input name="category" class="form-control"  placeholder="Category">
                                        </div>
                                    </div>
                                </div>                        
                                <!-- Description -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-control-label">Content</label>
                                                <textarea name="content" class="form-control"rows="3"  placeholder="Content">
                                                </textarea>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="pt-5 mt-5 delimiter-top">
                                    <input type="hidden" name="blogId" value="<?php echo $blogId; ?>">
                                    <button type="submit" class="btn btn-sm btn-primary">Add  Blog</button>
                                    <a href="./dashboard.php" class="btn btn-link">Cancel</a>                        
                                </div>
                            </form>
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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>



</body>

</html>
