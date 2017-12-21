 <?php
 if(isset($_GET['id']) && $_GET['id']!=""){
   $id =$_GET['id'];
    $obj->table_name = 'program_schedule';	
    $obj->cond = array("program_id"=>$_GET['id']);
    $obj->delete();
    $url = "?fol=pages&page=program_schedule";
    $obj->redirect($url);
    }

    
if($_POST['action']=="edit")
{
    $obj->table_name = 'program_schedule';	
//$days = array("01"=>"Sunday","02"=>"Monday","03"=>"Tuesday","04"=>"Wednesday","05"=>"Thursday","06"=>"Friday","07"=>"Saturday");
    //$day = $_POST['daySele'];
    //$pgmday = $days[$day];
    $start_time = $_POST['start_hour'].":".$_POST['start_min'].":"."00";
    $end_time = $_POST['end_hour'].":".$_POST['end_min'].":"."00";
    $obj->val = array("title"=>$_POST['title'],"start_time"=>$start_time,"end_time"=>$end_time);
    $obj->cond = array("program_id"=>$_POST['id']);
    $obj->update();
    $url = "?fol=pages&page=program_schedule";
    $obj->redirect($url); 
}elseif($_POST['action']=="add")    
{
$days = array("01"=>"Sunday","02"=>"Monday","03"=>"Tuesday","04"=>"Wednesday","05"=>"Thursday","06"=>"Friday","07"=>"Saturday");
	foreach($_POST['dayselect'] as $key=>$value)
	{
            $day = $value;
            $pgmday = $days[$day];
            $obj->table_name = 'program_schedule';
            $start_time = $_POST['start_hour'].":".$_POST['start_min'].":"."00";
            $end_time = $_POST['end_hour'].":".$_POST['end_min'].":"."00";
            $obj->val = array("day"=>$pgmday,
                "title"=>$_POST['title'],
                "start_time"=>$start_time,
                "end_time"=>$end_time
                );
            $obj->insert();
            }
//            $msg = "Program Successfully Added";
//            $obj->alert1($msg);	
            $url = "?fol=pages&page=program_schedule";
            $obj->redirect($url);
}




   
 

