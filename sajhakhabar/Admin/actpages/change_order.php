<?php  
include ("../../classes/constants.php");
$con = mysqli_connect(SERVERNAME,USER,PASSWORD,DATABASE) or die (mysqli_error());
if(isset($_POST['s_order'])){
$id = $_POST['id'];
//$field = $_POST['field'];
//$table =$_POST['table'];
//var_dump($id);

$s_order = $_POST['s_order'];
//var_dump($s_order);
  //echo "    update news_category set select_order = '$s_order' where id = '$id'";
mysqli_query($con,"update news_category set select_order = '$s_order' where id = '$id'");
echo json_encode(array("status"=>1));

}
?>
