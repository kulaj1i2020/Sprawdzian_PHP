<?php
$dane='dane.txt';
$zawartosc="empty";

file_put_contents($dane,$zawartosc);
$pierwszalitera='';
if(file_exists($dane)){
    $zawartoscdane = file_get_contents($dane);
    $pierwszalitera= substr($zawartoscdane,0,1);
}
if($pierwszalitera==='e')
{
    echo 'true';

}
else
{
    echo 'false';
}


?>