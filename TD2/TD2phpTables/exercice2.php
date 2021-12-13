<?php
    for($i=11; $i<=36; $i++)
    {
        $table[$i]=chr(54+$i);
    }
    echo "Indices et codes ASCII\n";
    foreach($table as $key => $x)
    {
        echo $key." : ".$x."\n";
    }
?>