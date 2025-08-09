<?php


function sanitize($input) {
    return htmlentities(trim($input));
}
function redirect($path){
      header("Location: $path");
            // die();
}




function dump($data){
    echo "<pr>";
    var_dump($data);

    echo "</pr>";
    die;
}