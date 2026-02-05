<?php
include __DIR__ . '/../php/conexao.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Editora inválida";
    exit;
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM editoras WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

$editora = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$editora) {
    echo "Editora não encontrada";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $editora['nome'] ?> | Heróverso</title>

    <link rel="icon" href="../imagens/Heróverso-sem-fundo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        @font-face {
            font-family: 'marvel';
            src: url('../fonts/AVENGEANCE HEROIC AVENGER.ttf');
        }

        .logo-navbar {
            height: 56px;
            width: auto;
        }

        nav {
            background-color: #0b0f19;
        }

        .navbar-toggler {
            color: white;
        }

        body {
            background: linear-gradient(180deg, #0f172a, #0c1c43, #003ac1);
            color: white;
            font-family: 'Inter', system-ui, sans-serif;
            overflow-x: hidden;
        }

        @font-face {
            font-family: 'quadrinho';
            src: url(../fonts/KOMIKAX_.ttf);
        }

        h3 {
            font-family: 'quadrinho';
        }

        .nome {
            font-family: 'marvel';
        }

        .filmes {
            width: 22rem;
            border-radius: 15px;
        }

        #historia p {
            justify-content: center;
            text-align: justify;
        }
        @media(max-width: 768px){
            
            .filmes{
                width: 100px;
            }
            .card-filmes{
                width: 70%;
            }
            .card-filmes h3{
                font-size: medium;
            }
            .autores{
                width: 15rem;
                justify-content: center;
            }
            .secao-autores .col{
                display: flex;
                justify-content: center;
            }
            .card-autores{
                width: 70%;
            }
        }
        @media(max-width: 1024px){
            .card-filmes{
                width: 70%;
            }
            #introducao p{
                font-size: larger;
            }
            #historia p{
                font-size: larger;
            }
            .frase{
               font-size: larger; 
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="../imagens/Heróverso-sem-fundo.png" alt="Logo" class="logo-navbar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-conthols="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
                    <a class="nav-link active" href="#">Marvel</a>
                    <a class="nav-link active" href="#">DC</a>
                    <a class="nav-link active" href="#">Linha do Tempo</a>
                    <a class="nav-link active" href="#">Personagens</a>
                    <a class="nav-link active" href="#">Filmes e Séries</a>
                    <a class="nav-link active" href="#">Sobre</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="my-5 text-center">
        <div class="container d-flex justify-content-center">
            <div class="card glass p-4" style="width: 26rem;">
                <img src="<?= $editora['logo'] ?>" class="img-fluid mb-3">
                <h1 class="nome"><?= $editora['nome'] ?></h1>
                <p class="frase"><?= $editora['frase'] ?></p>
            </div>
        </div>
    </header>

    <main>

        <section id="introducao" class="d-flex justify-content-center my-4">
            <div class="card glass container-custom w-75">
                <div class="card-header text-center">
                    <h3>Introdução</h3>
                </div>
                <div class="card-body">
                    <p><?= $editora['introducao'] ?></p>
                </div>
            </div>
        </section>

        <section id="historia" class="d-flex justify-content-center my-4">
            <div class="card glass container-custom" style="width: 80%;">
                <div class="card-header text-center">
                    <h3>História</h3>
                </div>
                <div class="card-body">
                    <p><?= $editora['historia'] ?></p>
                </div>
            </div>
        </section>

        <section class="secao-autores d-flex justify-content-center my-4">
            <div class="card card-autores glass container-custom">

                <div class="card-header text-center">
                    <h3>Autores Marcantes</h3>
                </div>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                        <div class="col">
                            <div class="card autores">
                                <img src="<?= $editora['imagens_autor1'] ?>" class="card-img-top">
                                <div class="card-body text-center">
                                    <h4><?= $editora['autor_1'] ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card autores">
                                <img src="<?= $editora['imagens_autor2'] ?>" class="card-img-top">
                                <div class="card-body text-center">
                                    <h4><?= $editora['autor_2'] ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card autores">
                                <img src="<?= $editora['imagens_autor3'] ?>" class="card-img-top">
                                <div class="card-body text-center">
                                    <h4><?= $editora['autor_3'] ?></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="d-flex justify-content-center my-5">
            <div class="card card-filmes glass w-80 container-custom">
                <div class="card-header text-center">
                    <h3>Filmes Marcantes</h3>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center filme text-center g-3">
                        <div class="col-auto">
                            <img class="filmes" src="<?= $editora['filme_1'] ?>" alt="">
                        </div>
                        <div class="col-auto">
                            <img class="filmes" src="<?= $editora['filme_2'] ?>" alt="">
                        </div>
                        <div class="col-auto">
                            <img class="filmes" src="<?= $editora['filme_3'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="text-center py-4">
        <p class="mb-0">
            &copy; 2026 Heróverso<br>
            Feito por João Rafael Jerônimo Barrionuevo
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>