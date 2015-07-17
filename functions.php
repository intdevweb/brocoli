<?php
//mes fonctions
//convertit une date au format MySQL, vers le format Francais
function convertDateToFrench($dateMysql)
{
$unix = strtotime($dateMysql);
$frenchDate = date("d-m-Y H:i:s", $unix);
return $frenchDate;
}
//mes fonctions
//convertit une date au format MySQL, vers le format Francais
function printair($tableau)
{
//affiche un array dans une balise <pre>
echo "<pre>";
print_r ($tableau);
echo "</pre>";
}
//forcer l'affichage d'un tableau, typer
//echo "<pre>";
//print_r (array $tableau);
//echo "</pre>";

?>