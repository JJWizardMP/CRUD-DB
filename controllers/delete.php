<?php
    chdir('../');
    require("controller.php");
    $control = new Controller();
    $response['success'] = true;
    $response['error'] = null;
    try {
        $id = $_POST["id"];
        $response['success'] = true;
        $response['message'] = 'Record deleted successfully!';
        $response['table'] = $control->delete_record($id);   
    }
    catch (\Error $e) {
        $response['success'] = false;
        $response['error'] = $e->getMessage();
    }
    $control->Close_Connection();
    echo json_encode($response);
?>