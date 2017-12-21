 <?php
 //$data=  $_GET['action'];
 //var_dump($data);
 
 if(isset($_GET['delete']) && $_GET['delete']!=""){
    $id=$_GET['delete'];
    $obj->table_name = 'video_gallery';
    $obj->cond = array("video_id"=>$id);
    $obj->delete();
    $url = "index.php?fol=pages&page=video_gallery";
    $obj->redirect($url);
}
 
if($_POST['action']=="edit")
{
    $obj->table_name = 'video_gallery';
    $obj->val = array("title"=>$_POST['title'],
                     "link"=>$_POST['link'],
                     "posted_on"=>$_POST['date']);
    $obj->cond = array("video_id"=>$_POST['id']);
    $obj->update();           
    $url = "index.php?fol=pages&page=video_gallery";
    $obj->redirect($url);
}
elseif($_POST['action']=="add")    
{
   $obj->table_name = 'video_gallery';
   $obj->val = array("title"=>$_POST['title'],
                     "link"=>$_POST['link'],
                     "posted_on"=>$_POST['date']);   
   $obj->insert();    
   $url = "index.php?fol=pages&page=video_gallery";
   $obj->redirect($url);    
}




   
 

