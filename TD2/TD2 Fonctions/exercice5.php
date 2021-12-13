<?php 
 function pluspetit($i,$a,$b){
      if (($a<$i) &&($a<$b))
      return $a ;
      else 
      if($i>$b)
      return $b ;
      else 
      if($b>$i)
      return $i ;
      
     
 }
 echo "le plus petit est = " .pluspetit(0,10,1)
?>