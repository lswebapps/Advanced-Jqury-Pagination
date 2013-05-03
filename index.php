<html>
    <head>
	    <title>Ajax Pagination</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="posts">
			
		</div>
		
		<p class="loading">Loading.....</p>
		
		<div class="page-links">
			<a class="previousLink" href="#">Previous</a>
			<ul>
				
			</ul>
			<a class="nextLink" href="#">Next</a>
		</div>
		
		<script type="text/template" id="post-template">
			<% _.each(posts, function(post){ %>
				<div>
					<h2><%= post.post_title %></h2>
					<p><%= post.post_content %></p>
				</div>
			<% }); %>
		</script>
		
		<script src="js/jquery.js"></script>
		<script src="js/underscore.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>