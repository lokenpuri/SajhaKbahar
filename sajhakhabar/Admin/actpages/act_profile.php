<?php  
// $data=  $_GET['action'];
// var_dump($data);
// die();

if($_FILES['image']['error']==0){
        $config['directory'] = 'uploads/';
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
    $obj->table_name = 'profile';
    
    $obj->val = array("name"=>$_POST['name'],
                    "email"=>$_POST['email'],
                    "address"=>$_POST['address'],
                    "post"=>$_POST['post']);
    if($imageResult!=""){
       $obj->val['image'] = $imageResult;
    }
    
    $obj->cond = array("profile_id"=>$_POST['id']);
    
$obj->update();           
$url = "index.php?fol=pages&page=profile";
$obj->redirect($url);
}
elseif($_POST['action']=="add")    
{
    $obj->table_name = 'profile';
    $obj->val = array("name"=>$_POST['name'],
                    "email"=>$_POST['email'],
                    "address"=>$_POST['address'],
                    "post"=>$_POST['post'],
                      "image"=>$imageResult);   
    $obj->insert();
    $url = "index.php?fol=pages&page=profile";
    $obj->redirect($url);    
}

