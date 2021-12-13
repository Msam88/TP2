<?php
$tb= array();
$ab = array();
$b = array();
$passable = array();
$ajourne = array();
do{
    $nom = readline(" Quel est le nom de l'etudiant: ");
    if($nom == "fin")
        break;
    else
    {
        $note = intval(readline("Quelle est la note obtenue par l'etudiant: "));
        $tab[$nom] = $note;
    }
}
while($nom!="fin");
$min = $note;
$max = $note;
$somme = 0;
foreach($tab as $key => $x)
{
    $somme+=$x;
    if($x<$min)
    {
        $min = $x;
    }     
    elseif($x>$max)
    {
        $max = $x;
    }
    if($x < 10)
        $ajourne[$key] = $x;
    elseif($x >= 10 && $x<12)
        $passable[$key] = $x;
    elseif($x >= 12 && $x<14)
        $ab[$key] = $x;
    elseif($x >= 14 && $x<16)
        $b[$key] = $x;
    elseif($x>=16)
        $tb[$key] = $x;
}
$diviser = count($tab);
$moyenne = $somme /$diviser;

echo "\nLe Nom et La Note Des Differents ETUDIANTS:\n";
ksort($tab);
print_r($tab);

echo "\nLa Note la plus forte De La Classe est:  => $max.\n";
echo "LA NOTE la plus faible De La Classe est: => $min.\n";
echo "LA MOYENNE DE LA CLASSE => $somme/$diviser = $moyenne\n\n";

echo "Ajournée\n\n";
if(empty($ajourne))
    echo "Aucune\n";
else
    print_r($ajourne);
echo "\n\nMention Bien\n\n";
if(empty($b))
    echo "Aucune";
else
    print_r($b);
echo "\n\nMention Bien\n\n";
if(empty($b))
    echo "Aucune";
else
    print_r($b);
echo "\n\nMention Très Bien\n\n";
if(empty($tb))
    echo "Aucune";
else
    print_r($tb);

echo "\n\nMention Assez Bien\n\n";
if(empty($ab))
    echo "Aucune";
else
    print_r($ab);
echo "\n\nPassable\n\n";
if(empty($passable))
    echo "Aucune";
else
    print_r($passable);

?>