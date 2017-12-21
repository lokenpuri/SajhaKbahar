
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
    
        include 'inc/header.php'; 
        ?>
	<!--header sec end---->
	<div class="section-wrapper">
		<div class="container">
			<div class="container-wrapper">
				<div class="row">
					<div class="col-md-8">
						<article class="module margin">
							<header>
								<h3><a href="#">सम्पर्क</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section>
								<div class="contact-form">
                                                                    <form role="form" method="post" action="">
                                                                        <div class="form-group">
                                                                          <label>Your Name</label>
                                                                          <input type="text" name="name" class="form-control" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label>Your Email</label>
                                                                                <input type="email" name="email" class="form-control" placeholder=" ">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label>Address</label>
                                                                                <input type= "text" name="address" class="form-control" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label>Message</label>
                                                                                <textarea name="message" class="form-control" placeholder=""></textarea>
                                                                        </div>
                                                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                                                    </form>
								</div>
							</section>
						</article>
					</div>
					<!---slider-sec end--->
					<div class="col-md-4">
						<article class="module margin">
							<header>
								<h3><a href="">सम्पर्क ठेगाना</a></h3>
								<h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
							</header>
							<section class="margin">
								<div class="contact-info">
									<p>
									Sajha Khabar
									<br>
									<?php 
                                                                            $res_contact = $obj->select("contact_us","*");
                                                                            $row_contact = $obj->fetch($res_contact); 
                                                                            echo $row_contact['address'];
                                                                        ?>
                                                                        <br>   
                                                                        Post Box No.<?php echo $row_contact['po_box']; ?><br>
									<span class="fa fa-phone"></span><?php echo $row_contact['phone']; ?><br>
									<span class="fa fa-envelope"></span>Sajha Khabar</p>
								</div>
							</section>
						</article>
						<?php 
                                                        include 'inc/fbpost.php';
                                                ?>
					</div>
					<!---news tab sec end--->
				</div>
			</div>
			<?php include 'inc/footer.php';?>
		</div>
	</div>
<?php include 'inc/footersec.php';?>