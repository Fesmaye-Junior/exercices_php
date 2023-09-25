<?php
function moyenne ($note_maths, $note_francais , $note_histoire_geo )
{
    return ($note_maths +  $note_francais + $note_histoire_geo)/3;
}
echo  moyenne (15 , 12, 9) ;
