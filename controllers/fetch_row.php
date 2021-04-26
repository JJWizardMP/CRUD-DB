<?php
    chdir('../');
    require("controller.php");
    $control = new Controller();
    $response['success'] = true;
    $response['error'] = null;
    try {
        $id = $_POST["id"];
        $response['success'] = true;
        $response['message'] = 'Record found successfully!';
        $response['data'] = $control->search_row($id);   
    }
    catch (\Error $e) {
        $response['success'] = false;
        $response['error'] = $e->getMessage();
    }
    $control->Close_Connection();
    echo json_encode($response);
?>