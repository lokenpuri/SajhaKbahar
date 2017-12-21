<?php  include 'inc/headersec.php'; ?>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
	<?php include 'inc/header.php'; ?>
	<!--header sec end---->
	<div class="section-wrapper">
		<div class="container">
			<div class="container-wrapper">
				<?php include 'inc/flash.php';?>
				<!---flash news sec end---->
				<div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="slide-entertain margin">
                                            <?php include 'inc/slider.php'; ?>
                                        </div>
                                    </div>
					<!---slider-sec end--->
                                    <div class="col-md-5 col-sm-6">
                                            <?php include 'inc/tajakhabar.php';?>
                                    </div>
					<!---news tab sec end--->
				</div>
				<div class="banner-ad margin center">
					<?php 
                                            $ad = $obj->select('advertisement', '*', array('type'=>3), array('ad_id'=>'desc'), array(0,1));
                                            while($row_ad=$obj->fetch($ad)){
                                        ?> 
                                            <figure>
                                                <a href="<?php echo $row_ad['link']; ?>"target="_blank"><img src="<?php echo SITE_URL; ?>uploads/advertisement/<?php echo $row_ad['image']; ?>" height="100px" width="800px" alt=""></a>
                                            </figure>
                                        <?php } ?>
				</div>
                                <!--banner-sec end---->
                                
                                
                                <?php $obj->getDivNews(0,1);?>
                               
                                
<!--				
				<article class="module margin">
                                    <header>
                                        <h3>
                                            <?php 
                                              //  $id = $_GET['type'];
                                                //$sql = $obj->select('news_category','*', array('id'=>$id));
                                                //$row_res = $obj->fetch($sql);
                                            ?>
                                            <a href="<?php echo SITE_URL; ?><?php echo $row_res['id'];?>/<?php $row_res['eng_title']; ?>">राजनीति</a>
                                        </h3>
                                            <h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
                                    </header>
					<section>
						<div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        <ul class="news-lists">
                                                        <?php 
                                                        $news = $obj->select('news', '*',array('type'=>18), array('news_id'=>'desc'), array(0,5));
                                                        while($row_news = $obj->fetch($news)){
                                                            if($row_news['headline']==1){
                                                        ?>
                                                            <li>
                                                                <figure>
                                                                        <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/thumbs/<?php echo $row_news['image']; ?>" class="lazy" height="" width="" alt=""></a>
                                                                </figure>
                                                                <h3 class="padding-bottom"><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><?php echo $row_news['title']; ?></a></h3>
                                                                <span class="fa fa-calendar"><?php echo $row_news['posted_on']; ?></span>
                                                            </li>
                                                        <?php }} ?>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <?php 
                                                        $news = $obj->select('news', '*', array('type'=>18), array('news_id'=>'desc'), array(0,1));
                                                        while($row_news = $obj->fetch($news)){
                                                            $shortdesc = substr(strip_tags(stripslashes($row_news['description'])), 0, 1200);
                                                            $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                        ?>
                                                        <div class="md-newsbox">
									
									<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><?php echo $row_news['title'];?></a></h3>
									<figure>
										<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><img src="<?php echo SITE_URL;?>uploads/news/<?php echo $row_news['image']; ?>" class="lazy" height="" width="" alt=""></a>
									</figure>
                                                                        <span class="fa fa-calendar"><?php echo $row_news['posted_on']; ?></span>
									<p><?php echo $stringCut;?></p>
								</div>
                                                        <?php } ?>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <?php 
                                                        $news = $obj->select('news', '*',array('type'=>18), array('news_id'=>'desc'), array(0,6));
                                                        while($row_news = $obj->fetch($news)){
                                                        ?>
                                                        <ul class="news-lists1">
                                                            <li>
                                                                    <h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><?php echo $row_news['title']; ?></a></h3>
                                                                    <hr/>
                                                            </li>
                                                           
                                                        </ul>
                                                        <?php } ?>
                                                    </div>
						</div>
					</section>
				</article>-->
				<!---rajniti sec end-->
				<div class="banner-ad margin center">
                                    <?php 
                                        $ad = $obj->select('advertisement', '*', array('ad_id'=>30));
                                        while($row_ad=$obj->fetch($ad)){
                                    ?> 
                                    <figure>
                                        <a href="<?php echo $row_ad['link']; ?>"target="_blank"><img src="<?php echo SITE_URL; ?>uploads/advertisement/<?php echo $row_ad['image']; ?>" height="100px" width="800px" alt=""></a>
                                    </figure>
                                    <?php } ?>
                                </div>
				<!--banner-sec end---->
				<div class="row">
					<div class="col-md-8">
						<article class="module margin">
							<header>
								<h3><a href="#">समाज</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<div class="row">
									<div class="col-md-6 col-sm-6">
                                                                            <?php 
                                                                            $samaj = $obj->select('news', '*',array('type'=>19), array('news_id'=>'desc'), array(0,1));
                                                                            while($row_samaj = $obj->fetch($samaj)){
                                                                            $shortdesc = substr(strip_tags(stripslashes($row_samaj['description'])), 0, 1200);
                                                                            $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));    
                                                                           
                                                                            ?>
										<div class="md-newsbox">
											<figure>
												<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_samaj['news_id']; ?>/<?php echo $row_samaj['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_samaj['image']; ?>" class="lazy" height="" width="" alt=""></a>
											</figure>
											<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_samaj['news_id']; ?>/<?php echo $row_samaj['posted_on'];?>"><?php echo $row_samaj['title']; ?></a></h3>
											<span class="fa fa-calendar"><?php echo $row_samaj['posted_on']; ?></span>
											<p><?php echo $stringCut; ?></p>
										</div>
                                                                            <?php } ?>
									</div>
									<div class="col-md-6 col-sm-6">
                                                                            <?php
                                                                                $samaj = $obj->select('news', '*',array('type'=>19), array('news_id'=>'desc'), array(0,2));
                                                                                while($row_samaj = $obj->fetch($samaj)){
                                                                                
                                                                            ?>
										<div class="md-newsbox">
											<figure>
												<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_samaj['news_id']; ?>/<?php echo $row_samaj['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_samaj['image']; ?>" class="lazy" height="" width="" alt=""></a>
											</figure>
											<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_samaj['news_id']; ?>/<?php echo $row_samaj['posted_on'];?>"><?php echo $row_samaj['title']; ?></a></h3>
										</div>
                                                                                <?php } ?>
									</div>
								</div>
							</section>
						</article>
					</div>
					<!---samaj sec end--->
                                        
					<div class="col-md-4 col-sm-6">
						<article class="module margin">
							<header>
								<h3><a href="#">विचार/अनुभूति</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<ul class="news-lists">
                                                                    <?php
                                                                        $bichar = $obj->select('news', '*',array('type'=>26), array('news_id'=>'desc'), array(0,4));
                                                                        while($row_bichar = $obj->fetch($bichar)){
                                                                    ?>
									<li>
										<figure>
											<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/thumbs/<?php echo $row_bichar['image']; ?>" class="lazy" height="" width="" alt=""></a>
										</figure>
										<h3 class="padding-bottom"><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><?php echo $row_bichar['title'];?></a></h3>
										<span class="fa fa-calendar"><?php echo $row_bichar['posted_on'];?></span>
									</li>
                                                                        <?php } ?>
									
								</ul>
							</section>
						</article>
					</div>
					<!---bichar sec end--->
				</div>
				<!---samaj and bichar sec end--->
				<div class="banner-ad margin center">
                                    <?php 
                                        $ad = $obj->select('advertisement', '*', array('ad_id'=>33));
                                        while($row_ad=$obj->fetch($ad)){
                                    ?> 
                                    <figure>
                                        <a href="<?php echo $row_ad['link']; ?>"target="_blank"><img src="<?php echo SITE_URL; ?>uploads/advertisement/<?php echo $row_ad['image']; ?>" height="100px" width="800px" alt=""></a>
                                    </figure>
                                    <?php } ?>
				</div>
				<!--banner-sec end---->
                                 <?php $obj->getKhelkudNews(5,1);?>
<!--				<article class="module margin">
					<header>
						<h3><a href="#">खेलकुद</a></h3>
						<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
					</header>
					<section>
						<div class="row">
							<div class="col-md-4 col-sm-6">
                                                            <?php 
                                                            $khel = $obj->select('news', '*', array('type'=>23), array('news_id'=> 'desc'),array(0,1));
                                                            while($row_khel = $obj->fetch($khel)){
                                                            $shortdesc = substr(strip_tags(stripslashes($row_khel['description'])), 0, 700);
                                                            $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                            if($row_khel['headline']=1){
                                                            ?>
								<div class="md-newsbox">
									<figure>
										<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_khel['news_id']; ?>/<?php echo $row_khel['posted_on'];?>"><img src="<?php echo SITE_URL;?>uploads/news/thumbs/<?php echo $row_khel['image']; ?>" class="lazy" height="" width="" alt=""></a>
									</figure>
									<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_khel['news_id']; ?>/<?php echo $row_khel['posted_on'];?>"><?php echo $row_khel['title'];?></a></h3>
									<span class="fa fa-calendar"><?php echo $row_khel['posted_on']; ?></span>
									<p><?php echo $stringCut;?></p>
								</div>
                                                            <?php }} ?>
							</div>
							<div class="col-md-4 col-sm-6">
                                                            <?php 
                                                            $khel = $obj->select('news', '*', array('type'=>23), array('news_id'=> 'desc'),array(0,3));
                                                            while($row_khel = $obj->fetch($khel)){
                                                            $shortdesc = substr(strip_tags(stripslashes($row_khel['description'])), 0, 700);
                                                            $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                            ?>
                                                            <ul class="news-lists">
                                                                <li>
                                                                    <figure>
                                                                            <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_khel['news_id']; ?>/<?php echo $row_khel['posted_on'];?>"><img src="<?php echo SITE_URL;?>uploads/news/thumbs/<?php echo $row_khel['image']; ?>" class="lazy" height="" width="" alt=""></a>
								    </figure>
                                                                    <h3 class="padding-bottom"><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_khel['news_id']; ?>/<?php echo $row_khel['posted_on'];?>"><?php echo $row_khel['title'];?></a></h3>
									
                                                                    <span class="fa fa-calendar"><?php echo $row_khel['posted_on']; ?></span>
                                                                   <hr/>                                                                </li>
                                                            </ul>
                                                            <?php } ?>
							</div>
							<div class="col-md-4">
							<?php 
                                                            $news = $obj->select('news', '*',array('type'=>23), array('news_id'=>'desc'), array(0,5));
                                                            while($row_news = $obj->fetch($news)){
                                                        ?>
                                                        <ul class="news-lists1">
                                                            <li>
                                                                    <h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><?php echo $row_news['title']; ?></a></h3>
                                                                    <hr/>
                                                            </li>
                                                           
                                                        </ul>
                                                        <?php } ?>
							</div>
						</div>
					</section>
				</article>-->
				<!---khel sec end-->
				<div class="banner-ad margin center">
					<?php 
                                        $ad = $obj->select('advertisement', '*', array('ad_id'=>34));
                                        while($row_ad=$obj->fetch($ad)){
                                    ?> 
                                    <figure>
                                        <a href="<?php echo $row_ad['link']; ?>"target="_blank"><img src="<?php echo SITE_URL; ?>uploads/advertisement/<?php echo $row_ad['image']; ?>" height="100px" width="800px" alt=""></a>
                                    </figure>
                                    <?php } ?>
				</div>
				<!--banner-sec end---->
                                <?php $obj->getManoranjanNews(2,1);?>
<!--				<article class="module margin slider-wrap">
					<header>
						<h3><a href="#">मनोरञ्जन</a></h3>
						<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
					</header>
					<section>
						<div class="row">
							<div class="col-md-4 ">
								<ul class="news-lists">
                                                                    <?php 
                                                                    $mano = $obj->select('news', '*', array('type'=>20), array('news_id'=> 'desc'),array(0,3));
                                                                    while($row_mano = $obj->fetch($mano)){
                                                                    $shortdesc = substr(strip_tags(stripslashes($row_mano['description'])), 0, 700);
                                                                    $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                                    ?>
									<li>
                                                                            <figure>
                                                                                    <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_mano['news_id']; ?>/<?php echo $row_mano['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/thumbs/<?php echo $row_mano['image'];?>" class="lazy" height="" width="" alt=""></a>
                                                                            </figure>
                                                                            <h3 class="padding-bottom"><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_mano['news_id']; ?>/<?php echo $row_mano['posted_on'];?>"><?php echo $row_mano['title']; ?></a></h3>
                                                                            <span class="fa fa-calendar"><?php echo $row_mano['posted_on'];?></span>
									</li>
                                                            <?php } ?>
									
								</ul>
							</div>
                                                    <div class="col-md-4">
							<?php 
                                                            $news = $obj->select('news', '*',array('type'=>20), array('news_id'=>'desc'), array(0,5));
                                                            while($row_news = $obj->fetch($news)){
                                                        ?>
                                                        <ul class="news-lists1">
                                                            <li>
                                                                    <h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><?php echo $row_news['title']; ?></a></h3>
                                                                    <hr/>
                                                            </li>
                                                           
                                                        </ul>
                                                        <?php } ?>
							</div>
							
							<div class="col-md-4">
								<div class="manoslider-wrap">
									<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
									   Wrapper for slides 
									  <div class="carousel-inner" role="listbox">
                                                                    <?php 
                                                                        $i=0;
                                                                        $slider = $obj->select('news', '*',array('type'=>20),array('news_id'=> 'desc'), array(0,3));
                                                                        While($row_slider = $obj->fetch($slider)){
                                                                        ?>
                                                                    <div class="item <?php if($i==0) echo 'active';?>">
                                                                      <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_slider['news_id']; ?>/<?php echo $row_slider['posted_on'];?>"><img src="<?php echo SITE_URL;?>uploads/news/<?php echo $row_slider['image'];?>" alt="..."></a>
                                                                      <div class="carousel-caption">
                                                                            <h3><a href="#"><?php echo $row_slider['title']; ?></a></h3>
                                                                            
                                                                      </div>
                                                                    </div>
                                                                        <?php 
                                                                        $i++;

                                                                        } ?>
                                                                          </div>
									   Controls 
									  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									  </a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</article>-->
				<!---manoranjan sec end-->
				<div class="banner-ad margin center">
					<?php 
                                        $ad = $obj->select('advertisement', '*', array('ad_id'=>31));
                                        while($row_ad=$obj->fetch($ad)){
                                    ?> 
                                    <figure>
                                        <a href="<?php echo $row_ad['link']; ?>"target="_blank"><img src="<?php echo SITE_URL; ?>uploads/advertisement/<?php echo $row_ad['image']; ?>" height="100px" width="800px" alt=""></a>
                                    </figure>
                                    <?php } ?>
				</div>
				<!--banner-sec end---->
				<div class="row">
					<div class="col-md-8">
						<article class="module margin">
							<header>
								<h3><a href="#">अर्थ/बजार</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
                                                            <?php
                                                                $bigyan = $obj->select('news', '*',array('type'=>22), array('news_id'=>'desc'), array(0,1));
                                                                while($row_bigyan = $obj->fetch($bigyan)){
                                                                $shortdesc = substr(strip_tags(stripslashes($row_bigyan['description'])), 0, 700);
                                                                $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                        ?>
                                                            <div class="md-newsbox float-sec">

                                                                    <figure>
                                                                            <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_bigyan['image'];  ?>" class="lazy" height="" width="" alt=""></a>
                                                                    </figure>
                                                                    <h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><?php echo $row_bigyan['title'];?></a></h3>
                                                                    <span class="fa fa-calendar"><?php echo $row_bigyan['posted_on'];?></span>
                                                                    <p><?php echo $stringCut;?></p>
                                                            </div>
                                                                        <?php } ?>
								<div class="row">
                                                                     <?php
                                                                                    $bigyan = $obj->select('news', '*',array('type'=>22), array('news_id'=>'desc'), array(0,4));
                                                                                    while($row_bigyan = $obj->fetch($bigyan)){
                                                                                   ?> 
									<div class="col-md-6 col-sm-6">
										<ul class="news-lists margin-top">
                                                                                  
										<li>
                                                                                    <figure>
                                                                                        <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/thumbs/<?php echo $row_bigyan['image'];  ?>" class="lazy" height="" width="" alt=""></a>
                                                                                    </figure>
                                                                                    <h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><?php echo $row_bigyan['title']; ?></a></h3>
                                                                                    <span class="fa fa-calendar"><?php echo $row_bigyan['posted_on'];?></span>
										<hr/>
                                                                                </li>
                                                                                
										</ul>
									</div>
									<?php } ?>
											
								</div>
							</section>
						</article>
					</div>
					<!---samaj sec end--->
					<div class="col-md-4 col-sm-6">
						<article class="module margin">
							<header>
								<h3><a href="#">अन्तरास्ट्रिय</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
                                                             <?php
                                                                $bigyan = $obj->select('news', '*',array('type'=>25), array('news_id'=>'desc'), array(0,1));
                                                                while($row_bigyan = $obj->fetch($bigyan)){
                                                               ?> 
								<div class="md-newsbox">
									<figure>
                                                                            <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_bigyan['image'];  ?>" class="lazy" height="" width="" alt=""></a>
                                                                        </figure>
                                                                        <h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><?php echo $row_bigyan['title']; ?></a></h3>
                                                                        <span class="fa fa-calendar"><?php echo $row_bigyan['posted_on'];?></span>
								</div>
                                                                <?php } ?>
								<ul class="news-lists1">
                                                                    <?php
                                                                        $bigyan = $obj->select('news', '*',array('type'=>25), array('news_id'=>'desc'), array(0,4));
                                                                        while($row_bigyan = $obj->fetch($bigyan)){
                                                                    ?> 
									<li>
										<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><?php echo $row_bigyan['title']; ?></a></h3>
                                                                        </li>
                                                                        <?php } ?>	
								</ul>
							</section>
						</article>
					</div>
					<!---bichar sec end--->
				</div>
				<!---samaj and bichar sec end--->
				<div class="banner-ad margin center">
					<?php 
                                        $ad = $obj->select('advertisement', '*', array('ad_id'=>35));
                                        while($row_ad=$obj->fetch($ad)){
                                    ?> 
                                    <figure>
                                        <a href="<?php echo $row_ad['link']; ?>"target="_blank"><img src="<?php echo SITE_URL; ?>uploads/advertisement/<?php echo $row_ad['image']; ?>" height="100px" width="800px" alt=""></a>
                                    </figure>
                                    <?php } ?>
				</div>
				<!--banner-sec end---->
				<div class="row">
                                    <?php //$obj->getBigyanNews(3,1); ?>
					<div class="col-md-8">
						<article class="module margin">
							<header>
								<h3><a href="#">बिज्ञान/प्रबिधि</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<div class="md-newsbox float-sec">
                                                                     <?php
                                                                            $bigyan = $obj->select('news', '*',array('type'=>21), array('news_id'=>'desc'), array(0,1));
                                                                            while($row_bigyan = $obj->fetch($bigyan)){
                                                                            $shortdesc = substr(strip_tags(stripslashes($row_bigyan['description'])), 0, 840);
                                                                            $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                                    ?>
									<figure>
										<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_bigyan['image'];  ?>" class="lazy" height="" width="" alt=""></a>
									</figure>
                                                                   
									<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><?php echo $row_bigyan['title']; ?></a></h3>
									<span class="fa fa-calendar"><?php echo $row_bigyan['posted_on'];?></span>
									<p><?php echo $stringCut;?></p>
                                                                            <?php } ?>
								</div>
								<div class="row">
                                                                    
                                                                    <?php
                                                                    $bigyan = $obj->select('news', '*',array('type'=>21), array('news_id'=>'desc'), array(0,3));
                                                                            while($row_bigyan = $obj->fetch($bigyan)){
                                                                      ?>     
									<div class="col-md-4 col-sm-6">
                                                                            
										<div class="md-newsbox padding-top">
									<figure>
										<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_bigyan['image'];  ?>" class="lazy" height="" width="" alt=""></a>
									</figure> <div class="clearfix"></div>
									<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bigyan['news_id']; ?>/<?php echo $row_bigyan['posted_on'];?>"><?php echo $row_bigyan['title']; ?></a></h3>
									<span class="fa fa-calendar"><?php echo $row_bigyan['posted_on'];?></span>
									
										</div>
                                                                            </div>
                                                                            <?php } ?>
                                                                   
								</div>
							</section>
						</article>
					</div>
                                    <?php $obj->getBatabaranNews(6,1);?>
<!--					<div class="col-md-4 col-sm-6">
						<article class="module margin">
							<header>
								<h3><a href="#">वातावरण/कृषि</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<ul class="news-lists">
									<?php
                                                                        $bichar = $obj->select('news', '*',array('type'=>24), array('news_id'=>'desc'), array(0,4));
                                                                        while($row_bichar = $obj->fetch($bichar)){
                                                                    ?>
									<li>
										<figure>
											<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/thumbs/<?php echo $row_bichar['image']; ?>" class="lazy" height="" width="" alt=""></a>
										</figure>
										<h3 class="padding-bottom"><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><?php echo $row_bichar['title'];?></a></h3>
										<span class="fa fa-calendar"><?php echo $row_bichar['posted_on'];?></span>
									</li>
                                                                        <?php } ?>
									
									
								</ul>
							</section>
						</article>
					</div>-->
					<!---bichar sec end--->
				</div>
				<!---khel sec end-->
				<div class="banner-ad margin center">
					<?php 
                                        $ad = $obj->select('advertisement', '*', array('ad_id'=>36));
                                        while($row_ad=$obj->fetch($ad)){
                                    ?> 
                                    <figure>
                                        <a href="<?php echo $row_ad['link']; ?>"target="_blank"><img src="<?php echo SITE_URL; ?>uploads/advertisement/<?php echo $row_ad['image']; ?>" height="100px" width="800px" alt=""></a>
                                    </figure>
                                    <?php } ?>
				</div>
				<!--banner-sec end---->
                                
                                
                                
				<div class="row">
                                   
					<div class="col-md-8">
                                             <?php $obj->getSahityaNews(9,1);?>
<!--						<article class="module margin">
							<header>
								<h3><a href="#">साहित्य/कला</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<div class="row">
									<div class="col-md-6 col-sm-6">
                                                                            <?php
                                                                                $bichar = $obj->select('news', '*',array('type'=>27), array('news_id'=>'desc'), array(0,1));
                                                                                while($row_bichar = $obj->fetch($bichar)){
                                                                            ?>
										<div class="md-newsbox">
											<figure>
												<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/<?php echo $row_bichar['image']; ?>" class="lazy" height="" width="" alt=""></a>
											</figure>
											<h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><?php echo $row_bichar['title'];?></a></h3>
										</div>
                                                                                <?php } ?>
									</div>
									<div class="col-md-6 col-sm-6">
										<ul class="news-lists">
									<?php
                                                                            $bichar = $obj->select('news', '*',array('type'=>27), array('news_id'=>'desc'), array(0,2));
                                                                            while($row_bichar = $obj->fetch($bichar)){
                                                                        ?>
									<li>
										<figure>
											<a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><img src="<?php echo SITE_URL; ?>uploads/news/thumbs/<?php echo $row_bichar['image']; ?>" class="lazy" height="" width="" alt=""></a>
										</figure>
										<h3 class="padding-bottom"><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_bichar['news_id']; ?>/<?php echo $row_bichar['posted_on'];?>"><?php echo $row_bichar['title'];?></a></h3>
										<span class="fa fa-calendar"><?php echo $row_bichar['posted_on'];?></span>
									</li>
                                                                        <?php } ?>
									
											
										</ul>
									</div>
								</div>
							</section>
						</article>-->
					</div>
					<div class="col-md-4 col-sm-6">
						<?php 
                                                include 'inc/fbpost.php';
                                                ?>
					</div>
					<!---bichar sec end--->
				</div>
                                <div class="row">
                                   
					<div class="col-md-8">
                                           <?php 
                                                include 'inc/photo_gallery.php';
                                            ?>
					</div>
					<div class="col-md-4 col-sm-6">
						<?php 
                                                include 'inc/vid_gallery.php';
                                                ?>
					</div>
					<!---bichar sec end--->
				</div>
				<!---content sec end--->
			</div>
			<?php include 'inc/footer.php';?>
		</div>
	</div>
    <?php include 'inc/footersec.php';?>