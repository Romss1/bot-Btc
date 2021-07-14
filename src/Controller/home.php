<?php
namespace App\Controller;

use App\Services\ApiLink;
use App\Services\Form;
class Home
{

    public function hom()
    {

        $value = intval(ApiLink::askApiPairs('BTCEUR'));

        $result = ApiLink::threshold(30000, 27850);

    
        $pourcentD =new Form();
        $tab=$pourcentD->getForm();
        // var_dump($tab);
        $test = new ApiLink($tab['thresholdUp']['value'],$tab['thresholdDown']['value']);
        $testt=$test->calculPourcentageThresholdUp();
        var_dump($testt);

        
        include '../templates/home/home.html.php';
    }

    
}

