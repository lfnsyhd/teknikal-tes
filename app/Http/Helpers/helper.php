<?php

function randomNumber($limit){
    $tmp = "";
    for ($i=0; $i < $limit; $i++) { 
        $tmp .= rand(0,9);
    }
    return $tmp;
}

?>