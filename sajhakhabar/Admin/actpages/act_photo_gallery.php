<?php  
// $data=  $_GET['action'];
// var_dump($data);
// die();

if($_FILES['image']['error']==0){
        $config['directory'] = '../uploads/photo_gallery/';
        $config['thumb_width'] = 160;
        $config['thumb_height'] = 110;
        $image_obj  =  ImageManipulation::generateClass($config);
        $imageResult = $image_obj->upload_image($_FILES['image']);        
}else{
        $imageResult = "";
}

 if($_POST['action']=="edit")
{
    //echo "this is edit";
    $obj->table_name = 'photo_gallery';
    
    $obj->val = array("title"=>$_POST['title'],
                    "description"=>$_POST['description'],
                    "posted_on"=>$_POST['date']);
    if($imageResult!=""){
       $obj->val['image'] = $imageResult;
    }
    
    $obj->cond = array("photo_id"=>$_POST['id']);
    $obj->update();           
    $url = "index.php?fol=pages&page=photo_gallery";
    $obj->redirect($url);
}
elseif($_POST['action']=="add")    
{
    $obj->table_name = 'photo_gallery';
    $obj->val = array("title"=>$_POST['title'],
                      "description"=>$_POST['description'],
                      "image"=>$imageResult, 
                      "posted_on"=>$_POST['date']);   
    $obj->insert();
    $url = "index.php?fol=pages&page=photo_gallery";
    $obj->redirect($url);    
}

