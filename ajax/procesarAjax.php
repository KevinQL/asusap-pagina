<?php

    session_start();

    $conAjax = true;

    require_once("../controllers/adminController.php");

    if(!is_null($_POST['data'])){
        //convirtiendo los datos enviados desde la vista, ha un objeto stdClass
        $data = json_decode($_POST['data']);
        //Instancia del objeto controller
        $obj = new adminController();

        //Regitro usuario para la administración del sistema 
        if ($data->id === "REGISTRO-USER") {
            # code...
            $result_operation = $obj->insert_user_Controller($data);
            echo json_encode($result_operation);
        }
        elseif ($data->id === "SESSION-USER") {
            # code...
            $result_operation = $obj->session_user_Controller($data);
            echo json_encode($result_operation);
        }
        


        else {
            echo json_encode("ERROR!!");
        }

    }else{
        echo json_encode("ERROR!!");
    }
    

?>