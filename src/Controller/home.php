<?php
function home(){

include '../src/Service/threshold.php';

$value = intval(askApiPairs('BTCEUR'));

$result = threshold(28000, 28000);

echo 'Timestamp : ' .time().'<br>';



include '../templates/home/home.html.php';

}