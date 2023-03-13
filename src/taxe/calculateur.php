<?php
namespace App\taxe;

class calculateur
{

function prixtva($prix){
    $mtva=$prix*0.2;
    return $mtva;
}
function prixttc($prix){
    $mtttc=$prix*1.2;
    return $mtttc;
}

}