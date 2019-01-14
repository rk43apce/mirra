// JavaScript Document
function loadSuggestion() {
	$.ajax({
		type: 'POST',
		url: './process/suggestion.php',	
		// data: {category:category, limit:limit, action:'geBlogs'},		
		success:function(html){
			$('#blogs').html(html);

			if(category) {
				$( "#title" ) . html( "Latest from the " + ' ' + category );
				
			}
			
		}
	});
}