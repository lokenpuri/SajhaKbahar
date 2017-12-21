<?php
if(isset($_GET['delete']) && $_GET['delete']!=""){
    $id=$_GET['delete'];
    $obj->table_name = 'profile';
    $obj->cond = array("profile_id"=>$id);
    $obj->delete();
    $url = "index.php?fol=pages&page=profile";
    $obj->redirect($url);
}
