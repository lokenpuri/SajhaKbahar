<?php  include 'inc/headersec.php'; 
$id=$_GET['_catId'];
//$news = $obj->select('news', '*',array("news_id"=>$id));
$row_news = $obj->getNews($id);
$newstype = $row_news['type'];

//var_dump($type);
//die();
$image = $row_news['image'];
$day_sec = $obj->getNepaliDate($row_news['posted_on']);
$pdate = $obj->convertNepaliUnicode($day_sec['year']) . " " . $day_sec['nmonth'] . " " . $obj->prepare_Eng_to_Nep($day_sec['date']) . " " . $day_sec['day']; 
                                                                                                
?>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php include 'inc/header.php'; ?>
	<!--header sec end---->
	<div class="section-wrapper">
		<div class="container">
			<div class="container-wrapper">
				<div class="row">
					<div class="col-md-8">
                                           
						<article class="module-detail">
                                                    
							<header>
								<h2><?php echo $row_news['title'];?></h2>
							</header>
							<div class="ad-wrap">
								<div class="share-this">
								   <!-- Go to www.addthis.com/dashboard to customize your tools -->
								<div class="addthis_inline_share_toolbox_sl7i"></div>
								</div>
							</div>
							<section class="margin detail-wrap">
								
							
								<figure>
									<img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_news['image']; ?>" height="" width="" alt="">
									<figcaption><?php echo $row_news['title']; ?></figcaption>
								</figure>
								<p class="padding-top"><?php echo $row_news['description']; ?></p>
								<br>
                                                                <p><?php echo 'प्रकाशित: '.$pdate; ?></p>
                                                                <div class="ad-wrap margin">
									<div class="share-this">
									   <!-- Go to www.addthis.com/dashboard to customize your tools -->
									<div class="addthis_inline_share_toolbox_sl7i"></div>
									</div>
								</div>
								<div class="fb_comment margin">
									<h5>प्रतिकृया दिनुहोस</h5>
									<div class="fb-comments" data-href="<?php echo SITE_URL;?>news-detail/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>/docs/plugins/comments#configurator" data-width="100%" data-numposts="1"></div>
								</div>
                                                    
								<!---fb-comment sec end---->
								<div class="row">
                                                                    <?php 
                                                                    $news = $obj->select('news','*',array('type'=>$newstype),array('news_id'=>'desc'), array(0,3));
                                                                    while($row_news=$obj->fetch($news)){
                                                                    $shortdesc = substr(strip_tags(stripslashes($row_news['description'])), 0, 500);
                                                                    $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                                    
                                                                    ?>
                                                                    
									<div class="col-md-4">
										<div class="large-box margin">
											<figure>
												<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/thumbs/<?php echo $row_news['image']; ?>" class="lazy" height="" width="" alt=""></a>
										</figure>
											<h3 class="padding-bottom"><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><?php echo $row_news['title'];?></a></h3>
										<p><?php echo $stringCut; ?></p>
                                                                                
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
			<?php include('inc/footer.php');?>
		</div>
	</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5837e7e3ff6f85da"></script>
<!---tooltip---->   

<?php include 'inc/footersec.php'; ?>