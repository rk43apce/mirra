<?php
require_once '../autoload/init.php';
if(!Input::exists('post')) {
    
    Redirect::to(baseUrl);
    exit();
}



$suggestion = new Suggestion();

$searchstring =  Input::get('searchstring');

$result =   $suggestion->search($searchstring);

if (empty($result)) { ?>


<li>
	<a class="list-link" href="">
	<i class="fas fa-search"></i>
	<span><?php echo $searchstring; ?>: </span> No result found...
	</a>
</li>


<?php exit(); }

foreach ($result as $key => $row) { ?>

<li>
	<a class="list-link" href="blog-article.php?blogId=<?php echo $row['id'];?>">
	<i class="fas fa-search"></i>
	<span><?php echo $searchstring; ?>: </span> <?php echo $row['title'];?>
	</a>
</li>

<?php } ?>




