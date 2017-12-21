<?php  include 'inc/headersec.php'; ?>

  <body>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php 
        include 'inc/header.php'; ?>
	<!--header sec end---->
	<div class="section-wrapper">
		<div class="container">
			<div class="container-wrapper">
				<div class="row">
					<div class="col-md-8">
						<article class="module margin">
							<header>
								<h3><a href="#">भिडियो ग्यालरी</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<div class="row">
								<?php 
                                                                $sql="select * from video_gallery order by video_id desc";
                                                                $res_video=$obj->exec($sql);
                                                               // $res_video=$obj->select("video_gallery","*","",array("video_id"=>"desc"));
                                                                //var_dump($res_video);
                                                                while($row_video=$obj->fetch($res_video)){
                                                                ?>	
                                                                    
                                                                    <div class="col-md-4">
										<div class="large-box">
											<div class="embed-responsive embed-responsive-4by3">
												<iframe width="300" height="200" src="https://www.youtube.com/embed/<?php echo $row_video['link']; ?>" frameborder="0" allowfullscreen></iframe>
											</div>
											<h3 class="padding-top"><a href="#"><?php echo$row_video['title'];?></a></h3>
										</div>
									</div>
                                                                    
                                                                <?php } ?>    
									
								</div>
								
							</section>
						</article>
					</div>
					<!---slider-sec end--->
					<div class="col-md-4">
						<?php  
                                                 include 'inc/tajakhabar.php';
                                                ?>
						<?php 
                                                 include 'inc/fbpost.php';
                                                ?>
					</div>
					<!---news tab sec end--->
				</div>
			</div>
			<?php include 'inc/footer.php'; ?>
		</div>
	</div>
    <?php include 'inc/footersec.php';?>