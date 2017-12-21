 <?php
 //$data=  $_GET['action'];
 //var_dump($data);
 
 if(isset($_GET['delete']) && $_GET['delete']!=""){
    $id=$_GET['delete'];
    $obj->table_name = 'ad_category';
    $obj->cond = array("ad_cat_id"=>$id);
    $obj->delete();
    $url = "index.php?fol=pages&page=ad_category";
    $obj->redirect($url);
}
 
 elseif($_POST['action']=="edit")
{
    $obj->table_name = 'ad_category';
    $obj->val = array("category"=>$_POST['category']);
    $obj->cond = array("ad_cat_id"=>$_POST['id']);
    $obj->update();           
    $url = "index.php?fol=pages&page=ad_category";
    $obj->redirect($url);
}
elseif($_POST['action']=="add")    
{
   $obj->table_name = 'ad_category';
   $obj->val = array("category"=>$_POST['category']);   
   $obj->insert();    
   $url = "index.php?fol=pages&page=ad_category";
   $obj->redirect($url);    
}




   
 

