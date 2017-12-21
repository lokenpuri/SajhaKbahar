<?php  include 'inc/headersec.php'; ?>
  <?php 
    $type = $_GET['catId'];
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
								<h3><a href="#">अभिलेखालय</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<ul class="audio-lists">
                                                                    <?php 
                                                                        $res_audio = $obj->select('audio_gallery','*',array('type'=>$type));
                                                                        while($row_audio=$obj->fetch($res_audio)){
                                                                    ?>
                                                                        <li>
                                                                            <h4><?php echo $row_audio['title']; ?></h4>
                                                                            <div class="audio-play">
                                                                                <audio controls>
                                                                                    <source src="<?php echo SITE_URL;?>/uploads/audio_gallery/<?php echo $row_audio['audio']; ?>">
                                                                                    <p>Your browser does not support the audio element.</p>
                                                                                </audio>
                                                                            </div>
                                                                        </li>
                                                                    <?php } ?>
								</ul>
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
			<?php include 'inc/footer.php' ;?>
		</div>
	</div>
    <?php include 'inc/footersec.php' ;?>