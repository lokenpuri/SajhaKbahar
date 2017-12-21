<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?>
<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="<?php echo SITE_URL;?>index.php">गृह पृष्ठ <span class="sr-only"></span></a></li>
<?php 
    $menu = $obj->select('news_category', '*', array('menu'=>1), array('select_order'=>'asc'));
    while($row_menu = $obj->fetch($menu)){
        $thepage = $row_menu['eng_title'];
//        var_dump($thepage);
//        die();
?>

<li class="<?php if ($thepage==$page) echo 'active'; ?>"><a href="<?php echo SITE_URL;?>news-articles/<?php echo $row_menu['id']; ?>/<?php echo $row_menu['eng_title'];?>"><?php echo $row_menu['name']; ?></a></li>
<?php } ?>                                                                       