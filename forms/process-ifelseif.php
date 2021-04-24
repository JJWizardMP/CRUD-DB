<?php
    function Comparison($num1, $num2){  
        $res = '';
        if ($num1 > $num2) {
            $res = $num1 . " es mayor que " . $num2;
        } elseif ($num1 == $num2) {
            $res = $num1 . " es igual que " . $num2;
        } else {
            $res = $num1 . " es menor que " . $num2;
        }
        return $res;
    }  
    $errors = [];
    $data = [];

    if (empty($_POST['number1'])) {
        $errors['number'] = 'No ingreso el primer número';
    }
    if (empty($_POST['number2'])) {
        $errors['number'] = 'No ingreso el segundo número';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
        $data['operation'] = Comparison($_POST['number1'], $_POST['number2']);
    }

    echo json_encode($data);
?>