<?php 
 function plusGrand($para){
$max = 0 ;
 if(empty($para))
  return "Null \n" ;
 else {
  for ($i=0;$i<count($para) ;$i++){
      if ($i==0)
       $max = $para[$i] ;
      elseif($max < $para[$i])
       $max = $para[$i]; 
  } 
  return "le plus grand element est : $max " ;
 }
 }
 $tab = array(1,5,76,7,8);
 $oh = array();
 echo "".plusGrand($tab); 
 echo "\n".plusGrand($oh)
?>