<?php 
  function verificationPWD($pare){
      if((strlen($pare)>=8)&&
        preg_match("#[0-9].*#",$pare) &&
        preg_match("#[a-z].*#",$pare) &&
        preg_match("#[A-Z].*#",$pare)
        ) 
        return "True" ; 
        else
        return "Remplissez les conditions" ;
  }
  #$pass1 = "J1eampoutre " ;
  $pass2 = "W9mmllkinw" ;
  echo "". verificationPWD($pass2);
  #echo "". verificationPWD($pass2)

?>