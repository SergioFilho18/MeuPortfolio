<?php
session_start();

include("upload/arquivos/conexao.php");

if(isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error'])
        die("Falha ao enviar arquivo");

    $pasta = "upload/arquivos/Certificados/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . $novoNomeDoArquivo . "." .$extensao;

    if($extensao != "jpg" && $extensao != 'png')
        die("Tipo de arquivo não aceito");

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if($deu_certo){
        $mysqli->query("INSERT INTO arquivos (nome, path) VALUES('$nomeDoArquivo', '$path')") or die($mysqli->error);
        
        header("Location: certificados.php");
        exit();
    } else {
        $_SESSION['mensagem'] = "Falha ao enviar arquivo";
        header("Location: certificados.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css">
    <title>Envio dos Certificados</title>
</head>
<body>
    <div class="m">
    <h1>Envio de Certificados</h1>
    <br>

    <?php if(isset($_SESSION['mensagem'])): ?>
        <p><?php echo $_SESSION['mensagem']; ?></p>
        <?php unset($_SESSION['mensagem']); ?>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data" action="">
        <p><label for="">Selecione o Arquivo</label>
        <br>
        <input name="arquivo" type="file"></p>
        <br>
        <button type="submit">Enviar Arquivo</button>
    </form>
    </div>
</body>
</html>
