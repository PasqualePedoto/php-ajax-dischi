<?php

include '../includes/data.php';

$results = $discs;
$search = $_GET['search'] ?? '';

if($search !== ''){
    foreach($discs as $disc){
        $results = [];
        $title = strtolower($disc['title']);
        $searched_term = strtolower($search);
        if(str_pos($title,$searched_term) !== false) $results[] = $disc;
    }
}

header('Content-Type: application/json');
echo json_encode($results);

?>