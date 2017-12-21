<?php  
// $data =  $_GET['action'];
// var_dump($data);
// die();
$typee = $_POST['type'];

if($_FILES['image']['error']==0){
        $config['directory'] = '../uploads/advertisement/';
        $config['thumb_width'] = 160;
        $config['thumb_height'] = 110;
        $image_obj  =  ImageManipulation::generateClass($config);
        $imageResult = $image_obj->upload_image($_FILES['image']);        
}else{
        $imageResult = "";
}

if($_POST['action']=="edit")
 {
    $obj->table_name = 'advertisement';
    $obj->val = array("title"=>$_POST['title'],
                    
                    "link"=>$_POST['link']);
    if($imageResult!=""){
       $obj->val['image'] = $imageResult;
    }
   
    $obj->cond = array("ad_id"=>$_POST['id']);
    $obj->update();           
    $url = "index.php?fol=pages&page=advertisement&type=$typee";
    $obj->redirect($url);
    }
   
elseif($_POST['action']=="add")    
{
    $obj->table_name = 'advertisement';
    $obj->val = array("title"=>$_POST['title'],
                      "type"=>$_POST['type'],
                      "image"=>$imageResult, 
                      "link"=>$_POST['link']);   
    $obj->insert();
    $url = "index.php?fol=pages&page=advertisement&type=$typee";
    $obj->redirect($url);    
}
