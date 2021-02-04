<?php


function encrypt($data){

    echo 'encrypted data for <b>'.$data .'</b> is '. md5($data);
    echo '<br>';

}


function decrypt($data){

    echo 'encrypted data for <b>'.$data .'</b> is shadi';

}



encrypt("shadi");
decrypt("ee8b0309fc6079df2bc93c4398e7f77a");






?>