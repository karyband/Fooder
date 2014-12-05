<?php
if(count($_COOKIE>0) {
        $arr = array('check_cookie' => 'true')
        header('Content-Type: application/json');
        echo json_encode($arr);
} else {
        $arr = array('check_cookie' => 'false')
        header('Content-Type: application/json');
        echo json_encode($arr);

}


?>