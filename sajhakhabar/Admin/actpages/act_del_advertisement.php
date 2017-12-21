<?php 
$type=$_GET['type'];
$id = $_GET['id'];
$table = 'advertisement';
$row = $obj->getDelAd($table,$id);
if($row['image']!=""){
		$url = "../uploads/advertisement/";
		$url2 = "../uploads/advertisement/thumbs/";
		$file1 = $url.$row['image'];
                $file2 = $url2.$row['image'];  
//              var_dump($file2);
//              die();
		unlink($file1);
		unlink($file2);
            
}
    $obj->table_name = 'advertisement';
    $obj->cond = array("ad_id"=>$id);
    $obj->delete();
    
    $url = "index.php?fol=pages&page=advertisement&type=$type";
    $obj->redirect($url);
