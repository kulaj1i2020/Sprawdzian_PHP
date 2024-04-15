<?php
function bialystring($dane){
    $dane2= trim($dane);
    if(strlen($dane2)>128) {
        return false;
    }


    return $dane2;
}
$dane='  Ala ma kota     ';
echo bialystring($dane);
echo bialystring($dane);
?>
