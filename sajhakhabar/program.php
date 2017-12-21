<?php include'inc/headersec.php';
$day = array('Sunday' => 'आइतबार', 'Monday' => 'सोमबार', 'Tuesday' => 'मंगलबार', 'Wednesday' => 'बुधबार', 'Thursday' => 'बिहिबार', 'Friday' => 'शुक्रबार', 'Saturday' => 'शनिबार');
$today = date('l');
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
	<?php include('inc/header.php');?>
	<!--header sec end---->
	<div class="section-wrapper">
		<div class="container">
			<div class="container-wrapper">
                            <div class="row">
                                    <div class="col-md-8">
                                            <article class="module margin">
                                                    <header>
                                                            <h3><a href="#">कार्यक्रम तालिका</a></h3>
                                                            <h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
                                                    </header>
                                                    <section>
                                                            <div class="pro-schedule margin">
                                                                    <!-- Nav tabs -->
                                                                    <ul class="nav nav-tabs">
                                                                        <?php
                                                                          $i = 0;
                                                                          foreach ($day as $key => $val):
                                                                        ?>
                                                                      <li class="<?php if ($today == $key) echo 'active'; ?>"><a href="#<?php echo $key ?>" data-toggle="tab"><?php echo $val; ?></a></li>
                                                                         <?php
                                                                              $i++;
                                                                              endforeach;
                                                                          ?>
                                                                    </ul>
                                                                                                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">
                                                                        <?php foreach ($day as $key => $val): ?>
                                                                            <div role="tabpanel" class="tab-pane <?php if ($today == $key) echo 'active'; ?>" id="<?php echo $key; ?>">
                                                                                <div class="table-responsive">
                                                                                  <table class="table table-hover">
                                                                                        <tbody>
                                                                                            <?php
                                                                                                $result_program = $obj->Programdetails($key);

                                                                                                if (mysqli_num_rows($result_program) != "") {
                                                                                                while ($row_program = $obj->fetch($result_program)) {
                                                                                            ?>
                                                                                            <tr>
                                                                                                    <th class="active"><?php echo stripslashes($row_program['title']); ?></th>
                                                                                                    <td><?php echo $obj->changetime($row_program['start_time']);?> - <?php echo $obj->changetime($row_program['end_time']); ?></td>
                                                                                            </tr>
                                                                                            <?php
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </tbody>
                                                                                  </table>
                                                                                </div>
                                                                            </div>
                                                                        <?php endforeach; ?>
                                                                    </div>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
<?php include 'inc/footersec.php'; ?>	
  </body>
</html>