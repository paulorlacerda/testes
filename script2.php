<?php

    $apikeys = [
        'teste',
    ];
    
    if (!isset($_SERVER['HTTP_X_API_KEY']) || !in_array($_SERVER['HTTP_X_API_KEY'], $apikeys)) {
        echo 'Você não está autorizado';
        die();
    }

    $variavelget = $_GET['input1']; 

    if($variavelget == "oi"){
        echo "eae";
    }elseif($variavelget == "eae") {
        echo "oi";
    }

