<?php

include("db_config.php");

if(isset($_POST['categoria']) && isset($_FILES['imagem'])) {
    $categoria = $_POST['categoria'];

    $nome_arquivo = $_FILES['imagem']['name'];
    $tipo_arquivo = $_FILES['imagem']['type'];
    $tamanho_arquivo = $_FILES['imagem']['size'];

    if($tipo_arquivo != 'image/png' && $tipo_arquivo != 'image/jpeg') {
        echo "Tipo de arquivo inválido. Somente arquivos PNG e JPEG são permitidos.";
        exit; 
    }
    
  
    $tamanho_maximo = 5 * 1024 * 1024; 

    if($tamanho_arquivo > $tamanho_maximo) {
        echo "O tamanho do arquivo excede o limite máximo permitido (5 MB).";
        exit; 
    }
   
    $caminho_destino = "imgs/" . $nome_arquivo;

    if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_destino)) {
      
        $uploadImg_sql = "INSERT INTO `posts_galeria`  (`categoria_post`, `path_post`) VALUES ('$categoria', '$caminho_destino')";
        $upload_result = mysqli_query($con,  $uploadImg_sql);

        // echo $caminho_destino . " " . $categoria;
      
        echo "Arquivo enviado com sucesso.";
       
    } else {
        
        echo "Falha ao enviar";
    }
   
   
}else {
    
    echo "Categoria ou imagem não enviada.";
}















?>