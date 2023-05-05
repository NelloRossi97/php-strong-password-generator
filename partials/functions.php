<?php 
function generatePassword($length){
    if($length == 0){
        $password = null;
    }else{
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#!"$%&/()=?^';
        $password = substr(str_shuffle($chars), 0, $length);
    }
    
    return $password;
}
?>