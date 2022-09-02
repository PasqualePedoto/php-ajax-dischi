<?php

include '../includes/data.php';

$results = $discs;
$search = $_GET['search'] ?? '';

if($search){
    $results = [];
    foreach($discs as $disc){
        $title = strtolower($disc['title']);
        $searched_term = strtolower($search);
        if(strpos($title,$searched_term) !== false) $results[] = $disc;
    }
}

header('Content-Type: application/json');
echo json_encode($results);

?>