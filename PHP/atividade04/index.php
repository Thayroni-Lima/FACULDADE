<?php
//Aqui está a inclusão do código index-O_Belo_Do_Lixo.inc
/* O código incluso recebe as informações vindas do front */
include "index-O_Belo_Do_Lixo.inc";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <p style = "margin-left: 2%;">
        Nome do projeto: <?php #aqui constam todos os 'echos'
         echo $Nomedoprojeto?> </br>
        Segmento: <?php echo $Segmento?></br> 
        Área: <?php echo $Área?></br>
        Mecanismo: <?php echo $Mecanismo?></br>
        Enquadramento: <?php echo $Enquadramento?></br>
        Município/UF: <?php echo $Município_UF?></br>
        Ano do projeto: <?php echo $Anodoprojeto?></br>
        Data término: <?php echo $Datatérmino?></br>
        Data início: <?php echo $Datainício?></br>
        Situação: <?php echo $Situação?></br>
        Valor da proposta: <?php echo $Valordaproposta?></br>
        Valor aprovado: <?php echo $Valoraprovado?></br>
        Valor captado: <?php echo $Valorcaptado?></br>
        Valor projeto: <?php echo $Valorprojeto?></br>
        Proponente: <?php echo $Proponente?></br>
    </p>
</body>
</html>