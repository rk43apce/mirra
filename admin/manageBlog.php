<?php 
require_once '../autoload/init.php';

$blog = new Blog();

$blogData =  $blog->getBlogs();

// var_dump($blogData);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>Mirra Healthcare | Manage Blog</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
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
                        
                        <center>                      
                        <?php echo (Session::exists('errorMsg'))? Session::flash('errorMsg') : ""; ?>                      
                        </center>
                     
                        <div class="card-body pt-10">
                            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>  
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <?php 
                                $cnt = 1;
                                foreach ($blogData as $key => $row) {
                                    ?>
                                    <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td>Pariksith Singh</td> 
                                     <td><a href="../blog-article.php?blogId=1" target="_blank"><i class="fa fa-eye"></i></a> &nbsp;
                                       
                                       <a href="./edit-blog.php?blogId=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a>
                                       &nbsp;
                                       <a href=""><i class="fa fa-trash" aria-hidden="true"></i>
                                       </a>
                                     </td> 
                                </tr>
                                    <?php
                                    $cnt++;
                                }

                                ?>
                                
                            </tbody>
                            </table>

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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>

</html>
