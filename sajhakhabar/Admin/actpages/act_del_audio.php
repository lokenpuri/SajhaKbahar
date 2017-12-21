<?php 
$id = $_GET['id'];
$typee = $_GET['type'];
$table = 'audio_gallery';
$row = $obj->getDelAudio($table,$id);
if($row['audio']!=""){
		$url = "uploads/audio_gallery/";
		$file1 = $url.$row['audio'];
		unlink($file1);
		
} 
    $obj->table_name = 'audio_gallery';
    $obj->cond = array("audio_id"=>$id);
    $obj->delete();
    $url = "index.php?fol=pages&page=audio_display&type=$typee";
    $obj->redirect($url);

