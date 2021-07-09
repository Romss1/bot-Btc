<?php

function askApiPairs($pair){
    $urlApi = 'https://api.binance.com/api/v3/avgPrice?symbol='.$pair;
    $raw = file_get_contents($urlApi);
    $tab = json_decode($raw, true);
    return $tab['price'];
}