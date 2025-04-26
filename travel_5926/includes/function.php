<?php
function test_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    $data=addslashes($data);
    return $data;
}

