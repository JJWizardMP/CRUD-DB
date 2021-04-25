<?php
    chdir('../');
    require("controller.php");
    $control = new Controller();
    $response['success'] = true;
    $response['error'] = null;
    try {
        $form = [
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':address' => $_POST['address'],
            ':phone' => $_POST['phone'],
        ];
        $response['success'] = true;
        $response['message'] = 'Success!';
        $response['table'] = $control->add_new($form);    
    }
    catch (\Error $e) {
        $response['success'] = false;
        $response['error'] = $e->getMessage();
    }
    echo json_encode($response);
?>