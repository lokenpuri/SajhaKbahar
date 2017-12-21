<?php  
$typee = $_POST['type'];
//var_dump($typee);
//die();
//$action = $_POST['action'];
//var_dump($action);
//die();

if($_POST['action']=="edit")
{
    //echo "this is edit";
    $obj->table_name = "audio_gallery";
    $obj->val = array("title"=>$_POST['title'],"type"=>$_POST['type'],"description"=>$_POST['description'],"posted_on"=>$_POST['date']);
    $obj->cond = array("audio_id"=>$_POST['id']);
    $obj->update();
    if(isset($_FILES['file']) && $_FILES['file']!='')
    {
      
       $type = $_FILES['file']['type'];
         $extention="audio/mpeg";
         if($extention!=""){
        $uploadPath = "../uploads/audio_gallery/";
        //for uploading file
        $temp_name = $_FILES['file']['tmp_name'];
         $file =$_FILES['file']['name'];
        $obj->UploadImage($temp_name, $extention, $file, $uploadPath);
        $obj->val = array("audio"=>$file);
        $obj->cond = array("audio_id"=>$_POST['id']);
        $obj->update();        
        $obj->redirect("index.php?fol=pages&page=audio_display&type=$typee");     
    }
    }
}elseif($_POST['action']=="add"){
    $type = $_FILES['file']['type'];
    if($type=="audio/mp3"){
        $temp_name = $_FILES['file']['tmp_name'];
        $file = $_FILES['file']['name'];
        //var_dump($file);
        $dest = "../uploads/audio_gallery/".$file;
        //$obj->UploadImage($temp_name, $type, $file, $dest);
        move_uploaded_file($temp_name,$dest);
        $obj->table_name = "audio_gallery";
        $obj->val = array("title"=>$_POST['title'],
                          "type"=>$_POST['type'],
                          "description"=>$_POST['description'],
                          "audio"=>$file,
                          "posted_on"=>$_POST['date']);
        $obj->cond = array("audio_id"=>$_POST['id']);
        $id = $obj->insert();
        $obj->redirect("index.php?fol=pages&page=audio_display&type=$typee");
    }else{
        echo "error";
    }    
}
?>