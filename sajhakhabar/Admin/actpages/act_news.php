<?php  
// $data=  $_GET['action'];
// var_dump($data);
// die();
$data = $_POST['type'];
//var_dump($data);
//die();
//var_dump($data);
//die();

if($_FILES['image']['error']==0){
        $config['directory'] = '../uploads/news/';
        $config['thumb_width'] = 160;
        $config['thumb_height'] = 110;
        $image_obj  =  ImageManipulation::generateClass($config);
        $imageResult = $image_obj->upload_image($_FILES['image']);        
}else{
        $imageResult = "";
}
 if($_POST['action']=="edit")
 {
    $obj->table_name = 'news';
    $obj->val = array("title"=>$_POST['title'],
                    "description"=>$_POST['description'],
                    "posted_on"=>$_POST['date']);
    if($imageResult!=""){
       $obj->val['image'] = $imageResult;
    }
    $obj->cond = array("news_id"=>$_POST['id']);
    $obj->update();           
    $url = "index.php?fol=pages&page=newsdisplay&type=$data";
    $obj->redirect($url);
    }
    elseif($_POST['action']=="add")    
    {
        $obj->table_name = 'news';
        $obj->val = array("title"=>$_POST['title'],
                          "type"=>$_POST['type'],
                          "description"=>$_POST['description'],
                          "image"=>$imageResult, 
                          "posted_on"=>$_POST['date']);   
        $obj->insert();
        $url = "index.php?fol=pages&page=newsdisplay&type=$data";
        $obj->redirect($url);    
    }

