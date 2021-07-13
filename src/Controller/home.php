<?php
namespace App\Controller;

use App\Services\ApiLink;
class Home
{

    public function hom()
    {

        $value = intval(ApiLink::askApiPairs('BTCEUR'));

        $result = ApiLink::threshold(30000, 27850);

        $test = ApiLink::calculPourcentageThresholdDown();
        var_dump($test);

        
        
        include '../templates/home/home.html.php';
    }

    
}

