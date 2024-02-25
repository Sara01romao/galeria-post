<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se há um arquivo enviado
    if(isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
        $nomeArquivo = basename($_FILES["arquivo"]["name"]);
        $caminhoDestino = "../imgs/" . $nomeArquivo;
        
        // Verifica se o tamanho do arquivo é menor que 5MB (ajuste conforme necessário)
        if ($_FILES["arquivo"]["size"] > 5000000) {
            echo "Erro: o arquivo é muito grande. Por favor, selecione um arquivo menor que 5MB.";
        } else {
            // Move o arquivo do diretório temporário para o diretório de destino
            if(move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminhoDestino)) {
                echo "Arquivo enviado com sucesso.";
            } else {
                echo "Erro ao enviar o arquivo.";
            }
        }
    } else {
        echo "Erro: nenhum arquivo enviado.";
    }
}
?>
