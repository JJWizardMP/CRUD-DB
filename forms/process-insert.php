<?php
    require("controllers/controller.php");
    $control =  new Controller();
    $errors = [];
    $data = [];
    if (empty($_POST['name'])) {
        $errors['name'] = 'Empty Field!';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Empty Field!';
    }
    if (empty($_POST['address'])) {
        $errors['address'] = 'Empty Field!';
    }
    if (empty($_POST['phone'])) {
        $errors['phone'] = 'Empty Field!';
    }
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $form = [
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':address' => $_POST['address'],
            ':phone' => $_POST['phone'],
        ];
        $data['success'] = true;
        $data['message'] = 'Success!';
        $data['operation'] = $control->insert_new($form);
    }
    echo json_encode($data);
?>