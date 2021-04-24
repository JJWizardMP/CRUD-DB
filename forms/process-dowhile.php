<?php
    function Dividenum($num){  
        $res = '';
        do {
           $res = $res . '* ' . $num%10 . ' * ';
            $num = intval($num/10);
        } while ($num != 0);
        return strrev($res);
    }  

    $errors = [];
    $data = [];

    if (empty($_POST['number'])) {
        $errors['number'] = 'No ingreso ningún número';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
        $data['operation'] = Dividenum($_POST['number']);
    }

    echo json_encode($data);
?>