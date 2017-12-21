 <?php
                                                            
   $arr_site = 'http://jhapatimes.com/feed';
$xml = simplexml_load_file($arr_site);

$i=0;
foreach ($xml->channel->item as $val) {
  
    
       
   $link = $val->link;
   $title = $val->title;
   $description =$val->description;
   echo $title;
}

