<?php



if(isset($_POST['categoria']) && isset($_FILES['imagem'])) {
    $categoria = $_POST['categoria'];
    $nome_arquivo = $_FILES['imagem']['name'];
  
   
    echo "Categoria: " . $categoria . "<br>";
    echo "Nome do arquivo: " . $nome_arquivo . "<br>";


    

   
}















?>