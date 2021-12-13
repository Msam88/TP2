<?php
  

  function dernierelement($para){
    if (empty($para))
    return"null";
    else 
    return end($para); 
  }
  $test = array("Iam", "down ", "bad","sam");
   $ok = array ();
  echo "" .dernierelement($ok) ,"\n";
  echo "Le dernier element est " .dernierelement($test);
?>