<?php
function explod($string,$car){
    $tab=array();
    $x="";
    $str=str_split($string,1);
    
    for($i = 0 ; $i<count($str) ;$i++)
        {
            if($str[$i]===$car)
                {
                    array_push($tab,$x);
                    $x="";
                    //continue ;
                }
            else
                {
                    $x.= $str[$i] ;
                }
        
       }
    array_push($tab,$x);
    
    return $tab;
}
$str="hel|lo";
print_r(explod($str,'|'));
?>