<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
// echo count($dico);


$count =  0;

foreach ($dico as $value):
	$lenght=strlen($value);
if($lenght === 15){
	$count++;
}
endforeach;


echo "il y a"."\n".$count."\n"."mots contenants quinze caractères";

$count = 0;
$letter ='w';
foreach ($dico as $value):
	$nbrW= strpos($value, $letter);
if($nbrW === false){
	echo null;
}
else{
	$count++;
}
endforeach;

echo " Il y a "."\n".$count."\n"."mots contenants la lettre W";


?>
