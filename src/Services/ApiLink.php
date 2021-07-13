<?php

namespace App\Services;

class ApiLink
{

    public static function askApiPairs($pair)
    {
        $urlApi = 'https://api.binance.com/api/v3/avgPrice?symbol=' . $pair;
        $raw = file_get_contents($urlApi);
        $tab = json_decode($raw, true);
        return $tab['price'];
    }

    public static function threshold($thresholdUp, $thresholdDown)
    {

        $value = intval(ApiLink::askApiPairs('BTCEUR'));

        if ($thresholdUp > $value) {
            return 'up';
        } else if ($thresholdDown < $value) {
            return 'down';
        }
    }

    public static function calculPourcentageThresholdDown()
    {

        $pourcentDown = filter_input(INPUT_POST, 'thresholdDown');
        var_dump($pourcentDown);
        return $thresholdValueDown = ApiLink::askApiPairs('BTCEUR') - (ApiLink::askApiPairs('BTCEUR') * 10 / 100);
    }


    public function calculPourcentageThresholdUp()
    {
        $pourcentUp = filter_input(INPUT_POST, 'thresholdUp');
        return $thresholdValueUp = ApiLink::askApiPairs('BTCEUR') + (ApiLink::askApiPairs('BTCEUR') * $pourcentUp / 100);
    }
}
