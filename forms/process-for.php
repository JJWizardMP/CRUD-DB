<?php
    function Multables($num){  
        $res = "";
        $max = 10;
        for ($i = 1; $i <= $max; $i++) {
            $res = $res . $i . ' x ' . $num . ' = ' . $i*$num . '<br>';
        }
        return $res;
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
        $data['operation'] = Multables($_POST['number']);
    }

    echo json_encode($data);
?>