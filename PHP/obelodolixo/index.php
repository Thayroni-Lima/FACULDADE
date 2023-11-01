<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

function o_belo($Nomedoprojeto,$Segmento,$Área,$Mecanismo,$Enquadramento,$Município_UF,$Anodoprojeto,$Datatérmino,$Datainício,$Situação,$Valordaproposta,$Valoraprovado,$Valorcaptado,$Valorprojeto,$Proponente,
){
}

$Nomedoprojeto = "204502";
$Segmento = "Exposição de artes visuais";
$Área = "Artes visuais";
$Mecanismo = "Mecenato";
$Enquadramento = "Artigo 18";
$Município_UF = "João Pessoa, PB";
$Anodoprojeto = "2020";
$Datatérmino = "31/12/2023";
$Datainício = "03/02/2021";
$Situação = "Autorizado a captação residual dos recursos";
$Valordaproposta = "R$ 207.299,84";
$Valoraprovado = "R$ 207.299,84";
$Valorcaptado = "R$ 250,00";
$Valorprojeto = "R$ 207.299,84";
$Proponente = "PARAHYBOLICA AGENCIA E PRODUCAO CULTURAL EIRELI - ME";
?>

<p style = "margin-left: 2%;">
    Nome do projeto: <?php echo $Nomedoprojeto?> </br>
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