<?php

$id = $_POST['id'];
//var_dump($id);
    
    $obj->table_name = 'about_us';
    $obj->val = array("about"=>$_POST['about']);  
    $obj->cond = array("about_id"=>$_POST['id']);
    $obj->update();  

    $url = "index.php?fol=forms&page=about_us&id=$id";
    $obj->redirect($url);


