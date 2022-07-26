<?php
    require __DIR__ . '/database.php';

    $filtredArray = [];

    header('Content-Type: application/json');
    
    if($_GET['value'] !== 'All'){
       foreach ($database as $data) {
            if ($data['genre'] === $_GET['value']) {
                $filtredArray[] = $data;
            }
        }
        
        echo json_encode($filtredArray);
    
    } else {
        echo json_encode($database)
    }
    
        
    
?>