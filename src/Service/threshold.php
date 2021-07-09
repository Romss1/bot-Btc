<?php
include '../src/Service/askApiPairs.php';

function threshold($thresholdUp, $thresholdDown){
$value = intval(askApiPairs('BTCEUR'));

if($thresholdUp > $value){
    return 'up';
} else if ($thresholdDown < $value){
    return 'down';
}

}