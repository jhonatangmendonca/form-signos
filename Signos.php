<?php
$Nome = $_POST['Nome'];
$DataEspecifica = $_POST['DataNascimento'];
$Xml = simpleXml_load_file('Signos.Xml');
$DiaDataNascimento = substr($DataEspecifica, 8, 2);
$MesDataNascimento = substr($DataEspecifica, 5, 2);
$DataNascimento = "2022" . "-" . $MesDataNascimento . "-" . $DiaDataNascimento;

foreach ($Xml->signo as $registro) :
    $DataInicioSigno = $registro->dataInicio;
    $DataFimSigno = $registro->dataFim;
    $DiaDataInicial = substr($DataInicioSigno, 0, 2);
    $MesDataInicial = substr($DataInicioSigno, 3, 2);
    $DiaDataFinal = substr($DataFimSigno, 0, 2);
    $MesDataFinal = substr($DataFimSigno, 3, 2);

    if ($MesDataInicial == 12)
        $DataInicioSigno = "2021" . "-" . $MesDataInicial . "-" . $DiaDataInicial;
    else
        $DataInicioSigno = "2022" . "-" . $MesDataInicial . "-" . $DiaDataInicial;

    if ($MesDataFinal == 12)
        $DataFimSigno = "2021" . "-" . $MesDataFinal . "-" . $DiaDataFinal;
    else
        $DataFimSigno = "2022" . "-" . $MesDataFinal . "-" . $DiaDataFinal;

    if (strtotime($DataNascimento) >= strtotime($DataInicioSigno) && (strtotime($DataNascimento) <= strtotime($DataFimSigno))) {
        $SignoNome = $registro->signoNome;
        $SignoDescricao = $registro->descricao;
    }
endforeach;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Qual o seu Signo?</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./favicon.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="body d-md-flex align-items-center justify-content-between">
            <div class="box-1 mt-md-0 mt-5">
                <img src="https://conteudo.imguol.com.br/c/noticias/d8/2020/07/17/signos-horoscopo-zodiaco-1595008408355_v2_900x506.jpg.webp" class="" alt="">
            </div>
            <div class="box-2 d-flex flex-column h-100">
                <div>
                    <p class="mb-1 h-1 text-center">Olá <?php echo $Nome ?></p>
                    <div class="d-flex flex-column" style="height: 290px;">
                        <p class="text-muted text-center mb-2">Seu Signo é de
                            <?php echo $SignoNome ?>
                        </p>
                        <p class="text-muted text-center mb-2 descricao">
                            <?php echo $SignoDescricao ?>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-center">
                    <a href="Index.php"> <button type="buttom" class="btn btn-outline-info">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>