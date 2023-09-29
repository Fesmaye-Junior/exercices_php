<?php
$note=array($note_maths=15 , $note_francais=12 , $note_histoire_geo=9 );

function moyenne ($Mynote)
{
    $moy=0;
    for ($i=0 ; $i<count($Mynote); $i++){
        $moy+= $Mynote[$i];
    }
    return $moy/3;
}
echo  moyenne ($note) ;
?>