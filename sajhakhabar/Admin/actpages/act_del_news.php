<?php
$type=$_GET['type'];
$id = $_GET['id'];
$table = 'news';
$row = $obj->getDelNews($table,$id);
if($row['image']!=""){
    $url = "../uploads/news/";
    $url2 = "../uploads/news/thumbs/";
    $file1 = $url.$row['image']; 
    $file2 = $url2.$row['image'];
    unlink($file1);
    unlink($file2);
}
    $obj->table_name = 'news';
    $obj->cond = array("news_id"=>$id);
    $obj->delete();
    $url = "index.php?fol=pages&page=newsdisplay&type=$type";
    $obj->redirect($url);
