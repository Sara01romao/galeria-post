<?php



if(isset($_POST['dataCreateImg'])){
    $img_obj = json_decode($_POST['dataCreateImg'], true);

    $categoria = $img_obj['categoria'];
    var_dump($img_obj);
   
    echo "criar ". $categoria;
}


















?>