<?php 
  function verificationPWD($pare){
      if (strlen($pare)<8)
      return "false \n" ;
      else 
      return " true \n" ;
  }
  $pass1 = "jeampoutre " ;
  $pass2 = "winw" ;
  echo "". verificationPWD($pass1);
  echo "". verificationPWD($pass2)


?>