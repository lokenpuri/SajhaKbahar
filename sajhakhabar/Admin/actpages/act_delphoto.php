<?php 
$id = $_GET['id'];
$table = 'photo_gallery';
$row = $obj->getDelPhoto($table,$id);
if($row['image']!=""){
		$url = "../uploads/photo_gallery/";
		$url2 = "../uploads/photo_gallery/thumbs/";
		$file1 = $url.$row['image']; 
		$file2 = $url2.$row['image'];
		unlink($file1);
		unlink($file2);
}
    $obj->table_name = 'photo_gallery';
    $obj->cond = array("photo_id"=>$id);
    $obj->delete();
    $url = "index.php?fol=pages&page=photo_gallery";
    $obj->redirect($url);

