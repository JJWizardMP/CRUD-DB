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
            ':id' => $_POST['id'],
        ];
        $response['success'] = true;
        $response['message'] = 'Record updated successfully!';
        $response['table'] = $control->update_record($form);   
    }
    catch (\Error $e) {
        $response['success'] = false;
        $response['error'] = $e->getMessage();
    }
    $control->Close_Connection();
    echo json_encode($response);
?>