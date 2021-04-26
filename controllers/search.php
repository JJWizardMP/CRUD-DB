<?php
    chdir('../');
    require("controller.php");
    $control = new Controller();
    $response['success'] = true;
    $response['error'] = null;
    try {
        $term = $_POST["term"];
        $response['success'] = true;
        $response['message'] = 'Records filtered successfully!';
        $response['table'] = $control->filter_by_name($term);   
    }
    catch (\Error $e) {
        $response['success'] = false;
        $response['error'] = $e->getMessage();
    }
    $control->Close_Connection();
    echo json_encode($response);
?>