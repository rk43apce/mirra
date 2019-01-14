// JavaScript Document
function loadBlogs(limit,category) {
	$.ajax({
		type: 'POST',
		url: './process/blog.php',	
		data: {category:category, limit:limit, action:'geBlogs'},		
		success:function(html){
			$('#blogs').html(html);

			if(category) {
				$( "#title" ) . html( "Latest from the " + ' ' + category );
				
			}
			
		}
	});
}

function loadIntroBlog(limit,category) {

	$.ajax({
		type: 'POST',
		url: './process/blog.php',	
		data: {category:category, limit:limit, action:'getIntroBlog'},		
		success:function(html){
			$('#blogIntroSection').html(html);

		
		}
	});
}


