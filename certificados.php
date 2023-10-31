<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="certificados.css">
    <title>Certificados</title>
</head>
<body>
    
<?php
  include("upload/arquivos/conexao.php");

    if(isset($_GET['deletar'])){

        $id = intval($_GET['deletar']);
        $sql_query = $mysqli->query("SELECT * FROM arquivos WHERE id = '$id'") or die($mysqil->error);
        $arquivo = $sql_query->fetch_assoc();

        if(unlink($arquivo['path'])){
            $deu_certo = $mysqli->query("DELETE FROM arquivos WHERE id = '$id'") or die($mysqil->error);
            header('Location:certificados.php');
            exit();
        }
    }
  
  $sql_query = $mysqli->query("SELECT * FROM arquivos") or die ($mysqli->error);

?>

    <table border="1"  >
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            while($arquivo = $sql_query->fetch_assoc()) {
            ?>
            <tr>
                <td class="img"> <img size ="50px" src=" <?php echo $arquivo['path']; ?>" alt=""></td>
                <td> <a class="link" target = "_blank" href=" <?php echo $arquivo['path']; ?>" ><?php echo $arquivo['nome']; ?> </a>  </td>
                <td class="data"> <?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload'])); ?></td>
                <td> <a class="delete" href="certificados.php?deletar=<?php echo $arquivo['ID']; ?>"> Deletar </a></th>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
            
    <br>
    <div class="adicionar">
        <a class="botao" href="upload.php">Adicionar Certificado</a>     
    </div>


</body>
</html>