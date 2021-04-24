<?php
    function Binary($num1, $num2, $sel){  
        $res = '';
        switch ($sel) {
            case "And":
                $r = $num1 & $num2;
                $res =  'AND(' . $num1 . ', ' . $num2 .  ") = " . $r;
                break;
            case "Or":
                $r = $num1 | $num2;
                $res =  'OR(' . $num1 . ', ' . $num2 .  ") = " . $r;
                break;
            case "Xor":
                $r =  ( ($num1!=$num2) && ($num1||$num2) ) ? 1 : 0 ;
                $res =  'XOR(' . $num1 . ', ' . $num2 .  ") = " . $r;
                break;
        }
        return $res;
    }  
    $errors = [];
    $data = [];

    if (!isset($_POST['number1'])) {
        $errors['number'] = 'No ingreso el primer número';
    }
    if (!isset($_POST['number2'])) {
        $errors['number'] = 'No ingreso el segundo número';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
        $data['operation'] = Binary($_POST['number1'], $_POST['number2'], $_POST['selector']);
    }

    echo json_encode($data);
?>