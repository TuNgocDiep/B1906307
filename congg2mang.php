<?php
    $a = array (344, 224, 223, 7737, 9922, -828);
    $b = array (-344, -324, 123, -9922, 828);
    $c = array ();
    $i=0;

    $sla = count($a);
    $slb = count($b);
    
    if ($sla == $slb){
        for ($i=0; $i<$sla; $i++){
            $c[$i] = $a[$i] + $b[$i];
        }
    }
    else{
        echo ("Hai mang khong cung do dai");
    }
    foreach ($c as $value) {
        echo "$value <br>";
    }
?>