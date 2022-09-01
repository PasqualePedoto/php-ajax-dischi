<?php

include '../includes/data.php';

$results = $discs;
$search = $_GET['search'] ?? '';
echo $search;

if($search){
    foreach($discs as $disc){
        $results = [];
        $title = strtolower($disc['title']);
        $searched_term = strtolower($search);
        if(strpos($title,$searched_term) !== false) $results[] = $disc;
    }
}

header('Content-Type: application/json');
echo json_encode($results);

?>