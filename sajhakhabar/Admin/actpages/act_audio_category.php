 <?php
 //$data=  $_GET['action'];
 //var_dump($data);
 
 if(isset($_GET['id']) && $_GET['id']!=""){
   $id =$_GET['id'];
//    var_dump($id);
//    die();
    $obj->table_name = 'audio_category';
    $obj->cond = array("audio_cat_id"=>$id);
    $obj->delete();
    $url = "index.php?page=audio_gallery";
    $obj->redirect($url);
}
 
 elseif($_POST['action']=="edit")
{
    $obj->table_name = 'audio_category';
    $obj->val = array("category"=>$_POST['category']);
    $obj->cond = array("audio_cat_id"=>$_POST['id']);
    $obj->update();           
    $url = "index.php?page=audio_gallery";
    $obj->redirect($url);
}
elseif($_POST['action']=="add")    
{
   $obj->table_name = 'audio_category';
   $obj->val = array("category"=>$_POST['category']);   
   $obj->insert();    
   $url = "index.php?page=audio_gallery";
   $obj->redirect($url);    
}




   
 

