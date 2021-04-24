<?php
    function Paridad($num){  
        $res = '';
        if($num%2==0){
            $res = $num . ' es un número Par';
        }else{
            $res = $num . ' es un número Impar';
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
        $data['operation'] = Paridad($_POST['number']);
    }

    echo json_encode($data);
?>