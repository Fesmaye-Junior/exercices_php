<?php
//$note=array($note_maths=15 , $note_francais=12 , $note_histoire_geo=9 );

function moyenne ($Mynote)
{
    $moy=0;
    for ($i=0 ; $i<count($Mynote); $i++){
        $moy+= $Mynote[$i];
    }
    return $moy/3;
}

function mediane ($myTab){
    sort ($myTab);
    $n =count($myTab);
    if (count($myTab)%2==1){

        return ($myTab[1]+$myTab[2])/2;

    }
    else {
        return $myTab[$n/2];
    }
}

?>
