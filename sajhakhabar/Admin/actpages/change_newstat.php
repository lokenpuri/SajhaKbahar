<?php  
include ("../../classes/constants.php");
$con = mysqli_connect(SERVERNAME,USER,PASSWORD,DATABASE) or die (mysqli_error());
//$db = mysqli_select_db(DATABASE);
if(isset($_POST['id'])){
$id = (int)$_POST['id'];
$status = (int)$_POST['value'];
$field = $_POST['field'];
$table =$_POST['table'];
 
  //echo "update tbl_news set status = '$status' where id = '$id'";
mysqli_query($con,"update $table set $field = '$status' where news_id = '$id'");
echo json_encode(array("status"=>1));

}
elseif(isset($_POST['cid'])){
$id = (int)$_POST['cid'];
$status = (int)$_POST['value'];
$field = $_POST['field'];
$table =$_POST['table'];
 
  //echo "update tbl_news set status = '$status' where id = '$id'"


mysqli_query($con,"update $table set $field = '$status' where id = '$id'");
echo json_encode(array("status"=>1));
}else
{
    echo "error";
}
/*elseif(isset($_POST['parent_id'])){
$id = (int)$_POST['parent_id'];
$status = (int)$_POST['value'];
$table = $_POST['table'];
  
  //echo "update nw01tbl_news $table = '$status' where nw01id = '$id'";
mysql_query("update nw01tbl_news set $table = '$status' where nw01id = '$id'");
echo json_encode(array("status"=>1));	
}

elseif(isset($_POST['cat_id'])){
$id = (int)$_POST['cat_id'];
$status = (int)$_POST['value'];

  
  //echo "update tbl_staff_cat set status = '$status' where cat01id = '$id'";
mysql_query("update tbl_staff_cat set status = '$status' where cat01id = '$id'");
echo json_encode(array("status"=>1));	
}
elseif(isset($_POST['parent_id'])){
    $id=(int)$_POST['parent_id'];
    $status=(int)$_POST['value'];
    $table=$_POST['table'];
   // echo "update nw01tbl_news_type set $table = '$status' where cat01id = '$id'";
    mysql_query("update nw01tbl_news_type set $table = '$status' where cat01id = '$id'");
echo json_encode(array("status"=>1));
}
 * 
 */
?>