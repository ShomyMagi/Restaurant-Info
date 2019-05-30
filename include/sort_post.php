<div class="col-12 col-md-6 col-lg-4">
	<div class="single-post wow fadeInUp" data-wow-delay="0.1s">
		<!-- Post Thumb -->
		<div class="post-thumb">
			<img src="<?php echo $niz1['slika'];?>" alt="img">
		</div>
		<!-- Post Content -->
		<div class="post-content">
			<div class="post-meta d-flex">
				<div class="post-author-date-area d-flex">
					<!-- Post Author -->
					<div class="post-author">
						<a href="#">By <?php echo $niz1['autor'];?></a>
					</div>
					<!-- Post Date -->
					<div class="post-date">
						<a href="#"><?php echo date("F d, Y", strtotime($niz1['datum']));?></a>
					</div>
				</div>
				<!-- Post Comment & Share Area -->
				<div class="post-comment-share-area d-flex">
					<!-- Post Favourite -->
					<div class="post-favourite">
						<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
					</div>
					<!-- Post Comments -->
					<div class="post-comments">
						<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
					</div>
					<!-- Post Share -->
					<div class="post-share">
						<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<a href="#">
				<h4 class="post-headline"><?php echo $niz1['naslov'];?></h4>
			</a>
		</div>
	</div>
</div>