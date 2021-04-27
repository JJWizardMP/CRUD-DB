<?php
    chdir('../');
    require("controller.php");
    $control = new Controller();
    $response['success'] = true;
    $response['error'] = null;
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    if(isset($_POST["page"])){  
         $page = $_POST["page"];  
    }else{  
         $page = 1;  
    }  
    try {
        $response['success'] = true;
        $response['message'] = 'Done!';
        $output = $control->create_pagination($page);
        $response['table'] = $output["table"];
        $response['pagination'] = $output["pagination"];
    }
    catch (\Error $e) {
        $response['success'] = false;
        $response['error'] = $e->getMessage();
    }
    $control->Close_Connection();
    echo json_encode($response);
?>