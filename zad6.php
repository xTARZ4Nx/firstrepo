<?php

$uczniowie = array ("1"=>"Alex ", "3"=>"Tomek ", "2"=>"Kuba ", "4"=>"Szymon ", "6"=>"Filip ", "8"=>"Max ", "5"=>"Łukasz ", "7"=>"Kacper ", "9"=>"Emil ", "10"=>"Bartek ");
krsort($uczniowie);
reset ($uczniowie); 
while(list($klucz,$wartosc) = each ($uczniowie)){

echo "$klucz=$wartosc";    
}
?>

