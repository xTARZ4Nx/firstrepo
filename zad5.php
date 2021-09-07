<?php  
$xaxa = 15;  
function series($xaxa){  
    if($xaxa == 0){  
    return 0;  
    }else if( $xaxa == 1){  
return 1;  
}  else {  
return (series($xaxa-1) + series($xaxa-2));  
}   
}   
for ($i = 0; $i < $xaxa; $i++){  
echo series($i);  
echo "\n";  
} 