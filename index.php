<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heróverso</title>
    <link rel="icon" href="imagens/Heróverso-sem-fundo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap');

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

    @font-face {
        font-family: 'marvel';
        src: url('../fonts/AVENGEANCE\ HEROIC\ AVENGER.ttf') format('ttf');
    }

    #card {
        transition: transform 0.5s, box-shadow 0.5s !important;
    }

    #card:hover {
        transform: scale(1.1) !important;
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2) !important;
    }

    .quadrinhos-cinema {
        background: linear-gradient(90deg, #ED1D24, #005BAC) !important;
    }

    body {
        background: linear-gradient(180deg, #0f172a, #0c1c43, #003ac1);
        color: white;

    }

    #inicio {
        margin-top: 6.5vh;
    }

    body,
    html {
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    @font-face {
        font-family: 'quadrinho';
        src: url(fonts/KOMIKAX_.ttf);
    }

    .table-marvel thead th {
        background: linear-gradient(to right, #e62429, #ff0000);
        text-align: center;
        vertical-align: middle;
        color: #ffffff;
        text-shadow: 0px 4px 3px black;
    }

    .table-marvel tbody th {
        font-family: 'Tinos';
    }



    .marvel-table-title {
        font-family: 'quadrinho';
        text-shadow: 0px 4px 6px black;
        transition: transform 0.3s ease;
    }

    .marvel-table-title:hover {
        transform: scale(1.1);
    }

    .table-dc thead th {
        background: linear-gradient(to right, #1a279f, #172c82);
        text-align: center;
        vertical-align: middle;
        color: #ffffff;
        text-shadow: 0px 4px 3px black;
    }

    .table-dc tbody th {
        font-family: 'Tinos';
    }



    .dc-table-title {
        font-family: 'quadrinho';
        text-shadow: 0px 4px 6px black;
        transition: transform 0.3s ease;
    }

    .dc-table-title:hover {
        transform: scale(1.1);
    }

    footer {
        background-color: #0b0f19;
        padding: 20px;
        text-align: center;
    }
</style>

<body style="background-color: 0f172a;">
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="imagens/Heróverso-sem-fundo.png" alt="Logo" class="logo-navbar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-conthols="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.html">Início</a>
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
    <main>
        <section>
            <div class="card mt-4 mb-4 shadow rounded mx-auto" style="width: 80%;">
                <div class="row g-0 align-items-stretch">
                    <div class="col-md-4">
                        <img src="imagens/marvel-dc.jpg" class="img-fluid rounded-start"
                            alt="Super-heróis" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title fw-bold">A origem dos super-heróis e o nascimento da Marvel e da DC</h5>
                            <p class="card-text text-justify">
                                Antes de existirem Superman, Batman ou Homem-Aranha, os quadrinhos eram vistos apenas como
                                <strong>entretenimento simples</strong>, inspirados em tiras de jornais, revistas pulp e histórias de aventura.
                                <br><br>
                                No início do século XX, os Estados Unidos viviam:
                            </p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item p-2">A Grande Depressão</li>
                                <li class="list-group-item p-2">Crises econômicas e sociais</li>
                                <li class="list-group-item p-2">Guerras iminentes</li>
                            </ul>
                            <p class="card-text text-justify">
                                Esse cenário criou a necessidade de figuras heroicas, símbolos de esperança, justiça e força moral. É nesse
                                contexto que surgem os super-heróis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="inicio-editoras">
            <div class="row-cols" id="inicio">
            <div class="row justify-content-center g-3">
                <div class="col-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/index/marvel.jpg" alt="Marvel Comics" class="card-img-top w-100"
                            style="height: 15rem;">
                        <div class="card-body justify-content-center text-center aling-items-center">
                            <h3>O Início de Tudo</h3>
                            <p>Heróis falhos, humanos e próximos da realidade, criados para uma nova geração.</p>
                            <a href="paginas/historia-editoras.php?id=1" class="btn btn-primary">Ler história <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/index/dc.jpg" alt="Marvel Comics" class="card-img-top w-100"
                            style="height: 15rem;">
                        <div class="card-body justify-content-center text-center aling-items-center">
                            <h3>O Início de Tudo</h3>
                            <p>Heróis falhos, humanos e próximos da realidade, criados para uma nova geração.</p>
                            <a href="paginas/historia-editoras.php?id=2" class="btn btn-danger">Ler história <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        <section class="tipos-herois">
            <div class="card" style="width: 80%;">
                <h3 class="text-center">Tipos de Super-Heróis</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h6>Os super-heróis podem ser classificados de acordo com o pepel que exercem nas histórias, seus valores morais e a forma como atuam diante dos conflitos. Cada tipo representa uma maniera distinta de enfrentar o mal e proteger a sociedade.</h6>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">

                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/superman.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Heróis Clássicos</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Representa a justiça, a esperança e os valores morais elevados, atuando sempre para proteger a humanidade e inspirar as pessoas a fazerem o bem.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/deadpool.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Anti-Heróis</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Possui atitudes controversas e métodos extremos, nem sempre seguindo regras morais, mas ainda assim enfrentando ameaças maiores.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/batman.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Heróis Vigilantes</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Combate o crime por conta própria, agindo fora do sistema legal, utilizando estratégia, disciplina e recursos pessoais.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/capitao.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Heróis Patrióticos</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Simboliza os ideias e valores de sua nação, lutando para defendê-los mesmo quando o próprio sistema falha.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/surfista.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Heróis Cósmicos</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Atua em uma escala universal, enfrentando ameaças que colocam planetas e civilizações inteiras em riscos.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/strange.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Heróis Místicos</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Enfrentam forças sobrenaturais por meio de magia, do conhecimento oculto e de dimensões além da realidade comum.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/ciclope.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Heróis de Equipe</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Trabalha em conjunto com outros heróis, valorizando a cooperação, a liderança e o planejamento estratégico.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="">
                                    <div class="card" style="width: 14rem;">
                                        <img src="imagens/index/tipos-herois/aranha.jpg" class="card-img-top" alt="">
                                        <div class="card-header">
                                            <h5>Heróis Trágico</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Carrega perdas pessoais profundas que influenciam suas escolhas, transformando a dor em responsabilidade e coragem.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row-cols">
                <h3 class="mt-4 mb-4 text-center" style="font-family: 'marvel-dc';">PERSNAGENS ICÔNICOS DA DC</h3>
                <div class="row justify-content-center g-5">
                    <div class="col-auto">
                        <div class="card" id="card" style="width: 18rem; height: 20rem;">
                            <img src="imagens/index/personagens-iconicos/superman.jpg" alt="Superman" class="card-img-top img-fluid">
                            <div class="card-header">
                                <h4 class="card-title">Superman</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Heróis kryptoniano com força imensa, voo e símbolo de esperança.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" id="card" style="width: 18rem; height: 20rem;">
                            <img src="imagens/index/personagens-iconicos/batman.jpg" alt="Batman" class="card-img-top img-fluid">
                            <div class="card-header">
                                <h4 class="card-title">Batman</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Vigilante humano que combate o crime com inteligência e tecnologia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" id="card" style="width: 18rem; height: 20rem;">
                            <img src="imagens/index/personagens-iconicos/mulher-maravilha.jpg" alt="Mulher-Maravilha" class="card-img-top img-fluid">
                            <div class="card-header">
                                <h4 class="card-title">Mulher-Maravilha</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Amazona poderosa que luta pela justiça e pela paz.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-4 mb-4 text-center" style="font-family: 'marvel-dc';">PERSONAGENS ICÔNICOS DA MARVEL</h3>
                <div class="row justify-content-center g-5">
                    <div class="col-auto">
                        <div class="card" id="card" style="width: 18rem; height: 20rem;">
                            <img src="imagens/index/personagens-iconicos/homem-aranha.jpg" alt="Homem-Aranha" class="card-img-top img-fluid">
                            <div class="card-header">
                                <h4 class="card-title">Homem-Aranha</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Jovem heróis ágil com poderes de uma aranha e grande senso de responsabilidade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" id="card" style="width: 18rem; height: 20rem;">
                            <img src="imagens/index/personagens-iconicos/homem-de-ferro.jpg" alt="Homem de Ferro" class="card-img-top img-fluid">
                            <div class="card-header">
                                <h4 class="card-title">Homem de Ferro</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Gênio da tecnologia que usa uma armadura de alta potência.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" id="card" style="width: 18rem; height: 20rem;">
                            <img src="imagens/index/personagens-iconicos/thor.jpg" alt="Thor" class="card-img-top img-fluid">
                            <div class="card-header">
                                <h4 class="card-title">Thor</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Deus do trovão com força divina e controle dos trovões.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="card" style="width: 50%;">
                    <img src="imagens/index/quadrinhos-cinema.jpg" alt="Imagem das equipes de heróis mais conhecidas" class="card-img-top img-fluid">
                    <div class="card-header">
                        <h2>DOS QUADRINHOS PARA O CINEMA</h2>
                    </div>
                    <div class="card-body">
                        <p>
                            Como os quadrinhos evoluíram das páginas para as telas, transformando super-heróis em ícones globais:
                        <ul>
                            <li>Primeiras adaptações: curtas e séries antigas</li>
                            <li>MCU (Marvel Cinematic Universe): Homem de Ferro, Vingadores, Guerra Infinita</li>
                            <li>DCEU (DC Extanded Universe): Superman, Batman, Liga da Justiça, Multiverso</li>
                            <li>Séries de TV: Agentes da S.H.I.E.L.D., Arrowverse, Loki, Titans</li>
                            <li>Diferenças HQ <i class="bi bi-arrows"></i> Filme: mudanças de histórias, tons e personagens</li>
                            <li>Curiosidades: easter eggs, participações de criadores</li>
                        </ul>
                        </p>
                        <a href="#" class="btn btn-primary d-flex justify-content-center aling-items-center">Ler história completa <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <footer>
        <p class="text-center">
            &copy; 2026 Heróverso
            <br>
            Feito por: João Rafael Jerônimo Barrionuevo
        </p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>