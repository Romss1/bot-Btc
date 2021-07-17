<?php
include '../templates/my_head.html.php';
?>

<main>

    <h1>ça marche</h1>

    <form method="post" action=''>
        <select name='base' class="form-select" aria-label="Default select example">
            <option selected>Choix de la base</option>
            <option value="BTC">BTC</option>
            <option value="ETH">ETH</option>
            <option value="VET">VET</option>
        </select>
        
        <select name='reference' class="form-select" aria-label="Default select example">
            <option selected>Choix de la référence</option>
            <option value="USDT">USDT</option>
            <option value="USDC">USDC</option>
            <option value="BUSD">BUSD</option>
        </select>


        <input name='thresholdUp' class="form-control" type='number' id='thresholdUp' placeholder="Seuil Haut en %" value="<?=filter_var($pourcentUp,FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]])?>">

        <input name='thresholdDown' class="form-control" type='number' id='thresholdDown' placeholder="Seuil Bas en %" value="<?=filter_var($pourcentDown,FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]])?>">

        <input name='price' class="form-control" type='number' id='thresholdDown' placeholder="Pour combien en %">

        <button class="btn btn-primary" type="submit" name="submit" value="true">Valider</button>

</form>

</main>