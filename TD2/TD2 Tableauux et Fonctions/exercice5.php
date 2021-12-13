<?php
    function capital($cap)
    {
        $cap = readline("Entrer le nom d'un pays: ");
        switch($cap)
        {
            case "France": return "$cap ==> Paris\n";
            case "Allemagne": return "$cap ==> Berlin\n";
            case "Mali": return "$cap ==> Bamako\n";
            case "Maroc": return "$cap ==> Rabat\n";
            case "Espagne": return "$cap ==> Madrid\n";
            case "Portugal": return "$cap ==> Lisbonne\n";
            case "Angleterre": return "$cap ==> Londres\n";
            case "Senegal": return "$cap ==> Dakar\n";
            default: return "$cap ==> Inconnu\n";
        }        
    }
    $cap1 = "";
    echo capital($cap1);
?>