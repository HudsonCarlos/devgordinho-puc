


<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<ul class="list-inline text-center">
					<li>
						<a href="https://twitter.com/DuduTisuvax">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/profile.php?id=100002971155963">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/hudson-carlos-11b9a282">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
				</ul>
					<p class="copyright text-muted">Copyright &copy; - Hudson S. Carlos - 2016</p>
			</div>
		</div>
	</div>
</footer>
<!-- /.container -->

	<script type="text/javascript">
		var imageCount = 0;
		var currentImage = 0;
		var images = new Array();
		 
		images[0] = '';
		images[1] = '';
		images[2] = '';
		images[3] = '';
		images[4] = '';
		images[5] = '';
		
		 
		var preLoadImages = new Array();
		for (var i = 0; i < images.length; i++){
		   if (images[i] == "")
			  break;
		   preLoadImages[i] = new Image();
		   preLoadImages[i].src = images[i];
		   imageCount++;
		}
		 
		function startSlideShow(){
		   if (document.body && imageCount > 0){
			  document.body.style.backgroundImage = "url("+images[currentImage]+")";    
			  //document.body.style.backgroundAttachment = "fixed";
			  //document.body.style.backgroundRepeat = "no_repeat";
			  //document.body.style.backgroundPosition = "left top";
		 
			  currentImage = currentImage + 1;
			  if (currentImage > (imageCount-1)){ 
				 currentImage = 0;
			  }
			  setTimeout('startSlideShow()', 20000);
		   }
		}
		startSlideShow();
	</script>

	<script src= "public/js/jquery-3.0.0.min.js"></script>
	<script src= "public/js/bootstrap.min.js"></script>
	<script src= "public/js/index.js"></script>
</body>
</html>