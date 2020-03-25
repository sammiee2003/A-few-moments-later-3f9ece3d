<?php
$input = readline("");
$a = explode(" ", $input);
$b = 0;

foreach ($a as $value){
    $i = substr($value,-1);

    switch($i){
        case "d":
            $b=$b+((int)$value * 86400);
        break;
        
        case "h":
            $b=$b+((int)$value * 3600);
        break;

        case 'm':
            $b=$b+((int)$value * 60);
        break;
    
        case 's':
            $b=$b+(int)$value;
        break;
    default:
        echo "geen tijd";
    }

}
echo "${b} seconden";