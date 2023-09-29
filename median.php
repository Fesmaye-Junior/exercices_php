<?php
$tab=[6,8,10,16,20];
$tab2=[6,8,10,16];
$mediane= mediane($tab2);
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
echo $mediane;
