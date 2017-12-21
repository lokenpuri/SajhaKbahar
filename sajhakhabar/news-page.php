<?php include 'inc/headersec.php';
//$id = $_GET['catId'];
//$title = $obj->getResource($id);
//$categoryName = $title['name'];
$class = ""; // for designers
$p = !empty($_GET['p']) ? (int) $_GET['p'] : 1;
$perpage = !empty($_GET['per']) ? (int) $_GET['per'] :6;
if (isset($_GET['catId']) && (int) $_GET['catId'] != "") {
    $category = (int) $_GET['catId'];
    $categoryName = $obj->getResource($category);
    $title_page = $categoryName['name'];
     $title = $categoryName['eng_title'];
     $page = $categoryName['eng_title'];
//     var_dump($page);
//     die();
    $sql = "SELECT * FROM news where type = " . $category;
    $order = " order by  news_id desc";
} else {
    $title_page = 'समाचार';
    $sql = "select * from news";
    $order = "order by  news_id desc";
}
$url = SITE_URL."news-page.php?catId=".$category;
$res_news = $obj->PageMe1($url, $order, $perpage, $sql, $class, $p);
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
                                                    <h3><a href="<?php echo SITE_URL;?>news-articles/<?php echo $category; ?>/<?php echo $title;?>"><?php echo $title_page; ?></a></h3>
                                                    <h4 class="all"><a href="<?php echo SITE_URL;?>news-articles/<?php echo $category; ?>/<?php echo $title;?>">सबै</a><span class="fa fa-ellipsis-v"></span></h4>
                                                </header>
                                                <section>
                                                   
                                                <div class="row">
                                                    
                                                     <?php 
                                                        while ($row_news = $obj->fetch($res_news[0])):
                                                         //  $id = (int) $news['nw01id'];
                                                           //    $date = $news['posted_on'];
                                                        $shortdesc = substr(strip_tags(stripslashes($row_news['description'])), 0, 350);
                                                        $stringCut = substr($shortdesc, 0, strrpos($shortdesc, ' '));
                                                        $day_sec = $obj->getNepaliDate($row_news['posted_on']);
                                                        $pdate = $obj->convertNepaliUnicode($day_sec['year']) . " " . $day_sec['nmonth'] . " " . $obj->prepare_Eng_to_Nep($day_sec['date']); 
                                                        //$date =  implode(" ", $pdate);
                                                    
//                                                        var_dump($pdate);
//                                                        die();
                                                            //  $i=1;
                                                            //  $type = $_GET['catId'];
                                                            //  $news = $obj->select('news', '*', array('type'=>$type),array("news_id"=>"desc") );
                                                            //  while($row_news = $obj->fetch($news)){
                                                            //  $div=($i>3)?"margin":"";
                                                            //  $image = $row_news['image'];
                                                        ?> 
                                                    
                                                    <div class="col-md-4 col-sm-6 ">
                                                        <div class="md-newsbox clearfix">
                                                             <figure>
                                                                    <a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><img src="<?php echo SITE_URL;?>uploads/news/thumbs/<?php echo $row_news['image'];?>" class="lazy" height="" width="" alt=""></a>
                                                            </figure>
                                                           
                                                            <h3><a href="<?php echo SITE_URL; ?>news-details/<?php echo $row_news['news_id']; ?>/<?php echo $row_news['posted_on'];?>"><?php echo $row_news['title']; ?></a></h3>                                                            
                                                            <p><?php echo $pdate; ?></p>
                                                            <?php //echo 'posted on '.$row_news['posted_on']; ?>
                                                            <p><?php echo $stringCut; ?>...</p>
                                                            <br>
                                                        
                                                        </div>
                                                    </div>
                                                    
                                                    <?php endwhile ?>
                                                    
                                                </div>
                                                        
                                              <div class="pagi_wrapper margin">
                                                   <nav aria-label="Page navigation">
                                             <?php if (count($res_news[1]) >= 1) { ?> 
						<ul class="pagination">
							 <?php echo "" . implode("", $res_news[1]) . ""; ?>
						</ul>
                                            <?php } ?>
                                           </nav>
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
<?php include 'inc/footersec.php';?>