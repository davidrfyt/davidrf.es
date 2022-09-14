<?php

$jsonFile = "https://cdn.davidrf.es/assets/json/pokemon.json";

$getDataFromFile = @file_get_contents($jsonFile);

$decodeData = json_decode($getDataFromFile, true);

foreach($decodeData as $dataPokemon){
    ?>
        <table border="1">
        <tr>
        <td>Nº: </td>
        <td>
            <?= $dataPokemon['num']; ?> 
        </td>
        </tr>
        <tr>
        <td>Nombre: </td>
        <td>
            <?= $dataPokemon['name']; ?>
        </td>
        </tr>
        <tr>
        <td>Foto: </td>
        <td>
            <img src="https://cdn.davidrf.es/assets/images/12_2021/pokemons/<?= $dataPokemon['variations'][0]['image']; ?>" width="200px">
        </td>
        </tr>
        <tr>
        <td>Habilidades: </td>
        <td>
            <?php
                foreach ($dataPokemon['variations'][0]['abilities'] as $dataAbilities){
                    echo " - " . $dataAbilities . "</br>";
                }
            ?>
        </td>
        </tr>
        <tr>
        <td>Evoluciones: </td>
        <td>
            <?php
                foreach ($dataPokemon['variations'][0]['evolutions'] as $dataEvolutions){
                    echo " - " . $dataEvolutions . "</br>";
                }
            ?>
        </td>
        </tr>
        </table><p>
    <?php
}

?>