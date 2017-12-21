 <?php
 //$data=  $_GET['action'];
 //var_dump($data);
 
 if(isset($_GET['delete']) && $_GET['delete']!=""){
    $id=$_GET['delete'];
    $obj->table_name = 'news_category';
    $obj->cond = array("id"=>$id);
    $obj->delete();
    $url = "index.php?fol=pages&page=news_cat_display";
    $obj->redirect($url);
}
 
 elseif($_POST['action']=="edit")
{
    $obj->table_name = 'news_category';
    $obj->val = array("name"=>$_POST['category']);
    $obj->cond = array("id"=>$_POST['id']);
    $obj->update();           
    $url = "index.php?fol=pages&page=news_cat_display";
    $obj->redirect($url);
}
elseif($_POST['action']=="add")    
{
   $obj->table_name = 'news_category';
   $obj->val = array("name"=>$_POST['category']);   
   $obj->insert();    
   $url = "index.php?fol=pages&page=news_cat_display";
   $obj->redirect($url);    
}




   
 

