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
                                                            <h3><a href="#">अभिलेखालय</a></h3>
                                                            <h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
                                                    
                                                    </header>        
                                                    <section>
                                                        <table id="example2" class="table table-bordered table-hover">                                                               
                                                            <?php 
                                                            $res_arch = $obj->select('audio_category','*');
                                                            while($row_arch =$obj->fetch($res_arch)){
                                                            ?>

                                                            <tr>
                                                                <td><a href="<?php echo SITE_URL;?>audiogallery/<?php echo $row_arch['audio_cat_id'];?>/<?php echo $row_arch['category'];?>"><?php echo $row_arch['category']; ?></a></td>
                                                            </tr>
                                                            <?php } ?>
                                                        </table>
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
<?php include 'inc/footersec.php'; ?>	