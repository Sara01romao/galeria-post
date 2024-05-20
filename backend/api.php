<?php

include("db_config.php");

if(isset($_POST['action']) ){
   
    $action = $_POST['action'];

    if( $action == "create"){

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

                    if($upload_result){
                        $id = mysqli_insert_id($con);

                        $response = ['id' => $id, 'pathImg' => $caminho_destino, 'categoria' => $categoria ];
                        
                        echo json_encode($response );
                       
                    }
                    
                
                } else {
                    
                    echo "Falha ao enviar";
                }
            
            
        }else {
            
            echo "Categoria ou imagem não enviada.";
        }



       
    }elseif ($action == "excluir"){
        $id = $_POST['id'];
        $pathImagem = $_POST['pathImg'];

        

        if($id  && $pathImagem ){
            if (unlink($pathImagem)) {

                 $delete_sql = "DELETE FROM `posts_galeria` WHERE id_post=$id";
    
                 $result_remove = mysqli_query($con, $delete_sql);

                echo "Imagem excluída com sucesso!";
              } else {
                echo "Falha ao excluir imagem.";
              }
        

        }


    }elseif ($action == "editarBusca"){
        $id = $_POST['id'];

        
        $busca_sql= "SELECT * FROM `posts_galeria`  WHERE id_post=$id";
        $result_busca= mysqli_query($con, $busca_sql);

        $image = mysqli_fetch_assoc($result_busca);

        echo json_encode($image);


        
        
    }elseif ($action == "editar"){

        if(isset($_FILES['imagem'])){

      

            if(isset($_POST['categoria']) && isset($_FILES['imagem'])) {
                    $categoria = $_POST['categoria'];
                    $id = $_POST['id'];
                    $pathImagem = $_POST['pathImg'];
                    
                    
                 
                   

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
                    
                        
                        if (unlink($pathImagem)) {
                        

                            $editar_img = "UPDATE `posts_galeria` SET  `categoria_post`='$categoria', `path_post`='$caminho_destino' WHERE `id_post` = $id";
                            $editar_result = mysqli_query($con,  $editar_img);
                        
                        
                            $response = ['id' => $id, 'pathNovo' => $caminho_destino, 'categoria' => $categoria ];
                        
                            echo json_encode($response );
                        
                        }

                    
                    } else {
                        
                        echo "Falha ao alterar";
                    }
                
                
            }

        }else{

            $categoria = $_POST['categoria'];
            $id = $_POST['id'];
           

    

            $editar_img = "UPDATE `posts_galeria` SET  `categoria_post`='$categoria' WHERE `id_post` = $id";
            $editar_result = mysqli_query($con,  $editar_img);
            
            
            $response = ['id' => $id, 'categoria' => $categoria ];
                        
            echo json_encode($response );
           

        }
        
    }

   

}


















?>