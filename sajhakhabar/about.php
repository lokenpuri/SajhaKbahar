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
	<?php include 'header.php'; ?>
	<!--header sec end---->
	<div class="section-wrapper">
		<div class="container">
			<div class="container-wrapper">
				<div class="row">
					<div class="col-md-8">
						<article class="module margin">
							<header>
								<h3><a href="#">हाम्रो बारेमा</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<div class="md-newsbox float-sec">
									<figure>
										<a href="#"><img src="assets/images/bigyan-sec.jpg" class="lazy" height="" width="" alt=""></a>
									</figure>
									<h3><a href="#">फिफा वर्ष खेलाडी बनेका रोनाल्डोभन्दा तथ्यांकमा मेस्सी </a></h3>
									<span class="fa fa-calendar">२०७४ जेठ २२ सोमबार</span>
									<p>प्रमुख निर्वाचन आयुक्त डा. अयोधिप्रसाद यादवले भरतपुर महानगरपालिका वडा नम्बर १९ मा पुनः मतगणनाको निर्णय स्थानीय तह कानुनका आधारमा लिएकाे स्पष्ट पारेका छन्। </p>
								</div>
							</section>
						</article>
					</div>
					<!---slider-sec end--->
					<div class="col-md-4">
						<?php  include 'inc/tajakhabar.php'; ?>

						<?php  include 'inc/fbpost.php'; ?>

					</div>
					<!---news tab sec end--->
				</div>
			</div>
			<?php include 'inc/footer.php'; ?>
		</div>
	</div>
  