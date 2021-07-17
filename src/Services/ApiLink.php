<?php

// namespace App\Services;

// class ApiLink
// {
//     private $pourcentDown;
//     private $pourcentUp;

//     public function __construct($newPourcentDown,$newPourcentUp){

//         $this->pourcentDown = $newPourcentDown;
//         $this->pourcentUp = $newPourcentUp;
//     }

//     public function getPourcentDown(){
//         return $this->pourcentDown;
//     }

//     public function getPourcentUp(){
//         return $this->pourcentUp;
//     }

   
    
//     public static function askApiPairs($pair)
//     {
//         $urlApi = 'https://api.binance.com/api/v3/avgPrice?symbol=' . $pair;
//         $raw = file_get_contents($urlApi);
//         $tab = json_decode($raw, true);
//         return $tab['price'];
//     }

//     public static function threshold($thresholdUp, $thresholdDown)
//     {

//         $value = intval(ApiLink::askApiPairs('BTCEUR'));

//         if ($thresholdUp > $value) {
//             return 'up';
//         } else if ($thresholdDown < $value) {
//             return 'down';
//         }
//     }

    // public function calculPourcentageThresholdDown()
    // {

    //     $this->pourcentDown = filter_input(INPUT_POST, 'thresholdDown');
    //     return $thresholdValueDown = ApiLink::askApiPairs('BTCEUR') - (ApiLink::askApiPairs('BTCEUR') * $this->pourcentDown / 100);
    // }


    // public function calculPourcentageThresholdUp()
    // {
    //     $this->pourcentUp = filter_input(INPUT_POST, 'thresholdUp');
    //     return $thresholdValueUp = ApiLink::askApiPairs('BTCEUR') + (ApiLink::askApiPairs('BTCEUR') * $this->pourcentUp / 100);
    // }

    
//}