(function($){

	$(document).ready(function(){
	
		var template = _.template($("#post-template").html()),
			itemsPerPage = 5,
			currentLinkNumber = 1;
		
		$(".previousLink").on("click", function(){
		
			var pageLinks = $(".page-links li");
			currentLinkNumber--;
			
			if(currentLinkNumber == 0)
			{
				currentLinkNumber = pageLinks.length;	
			}
			
			var previousLink = pageLinks.filter(".activeLink").prev();
			if(previousLink.length == 0)
			{
				previousLink = pageLinks.last();	
			}
			
			previousLink.trigger("click");
		
		});
		
		$(".nextLink").on("click", function(){
		
			var pageLinks = $(".page-links li");
			currentLinkNumber++;
			
			if(currentLinkNumber > pageLinks.length)
			{
				currentLinkNumber = 1;	
			}
			
			var nextLink = pageLinks.filter(".activeLink").next();
			if(nextLink.length == 0)
			{
				nextLink = pageLinks.first();	
			}
			
			nextLink.trigger("click");
		
		});
		
		function loadPosts(url)
		{
			if(typeof url == 'undefined')
			{
				url = 'ajax.php?page=1&items_per_page='+ itemsPerPage;	
			}
			
			$.getJSON(url, function(data){
			
				$(".loading").hide();
				
				var resultingString = template({ posts: data.posts }),
					pageLinks = $(".page-links ul");
				
				pageLinks.html('');
				
				$(".posts").html(resultingString);
				
				for(var index = 1, length = Math.ceil(data.total_posts / itemsPerPage); index <= length; index++)
				{
					var link = $('<li>', { dataUrl: 'ajax.php?page='+index+'&items_per_page='+itemsPerPage }).on('click', function(){
					
						var dataUrl = $(this).attr('dataUrl');
					
						$(".loading").show();
						
						currentLinkNumber = $(this).text();
						
						loadPosts(dataUrl);
					
					}).text(index).appendTo(pageLinks);
					
					if(index == currentLinkNumber)
					{
						link.addClass("activeLink");
						link.siblings().removeClass("activeLink");
					}
				}
			
			});
		}
		
		loadPosts();
		
	});
	
})(jQuery);