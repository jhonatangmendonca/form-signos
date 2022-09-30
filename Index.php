<!DOCTYPE html>
<html>

<head>
    <title>Qual o seu Signo?</title><!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./favicon.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="Signos.php" method="POST">
        <div class="container">
            <div class="body d-md-flex align-items-center justify-content-between">
                <div class="box-1 mt-md-0 mt-5">
                    <img src="https://conteudo.imguol.com.br/c/noticias/d8/2020/07/17/signos-horoscopo-zodiaco-1595008408355_v2_900x506.jpg.webp" class="" alt="">
                </div>
                <div class="box-2 d-flex flex-column h-100">
                    <div class="mt-5">
                        <p class="mb-1 h-1 text-center">Verifique seu Signo</p>
                        <div class="d-flex flex-column">
                            <small class="text-muted text-center mb-2">Descubra as informações de seu Signo. <br> Digite seu nome e sua data se nascimento abaixo e clique em consultar...</small>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" required id="Nome" name="Nome" placeholder="name@example.com">
                                        <label for="floatingInput">Nome</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control data" required id="DataNascimento" name="DataNascimento" placeholder="name@example.com">
                                        <label for="DataNascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-info">Consultar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>