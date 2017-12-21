<?php
$id = $_POST['id'];
//var_dump($id);
//echo "this is edit";
$obj->table_name = 'contact_us';
$obj->val = array("address"=>$_POST['address'],
                  "email"=>$_POST['email'],
                  "phone"=>$_POST['phone'],
                  "po_box"=>$_POST['po_box'],
                  "facebook"=>$_POST['facebook'],
                  "youtube"=>$_POST['youtube'],
                  "google"=>$_POST['google']
                );  
$obj->cond = array("contact_id"=>$_POST['id']);
$obj->update();  
$url = "index.php?fol=forms&page=contact_us&id=$id";
$obj->redirect($url);


