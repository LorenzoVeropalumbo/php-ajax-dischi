<?php
    require __DIR__ . '/database.php';

    $data = [];

    if(!empty($_GET) && $_GET['value'] !== 'All'){
       foreach ($database as $data) {
            if ($data['genre'] === $_GET['value']) {
                $filtredArray[] = $data;
            }
        }        
        $data = $filtredArray;
    } else {
        $data = $database;
    }

    header('Content-Type: application/json');
    
    echo json_encode($data);
?>