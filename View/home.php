<?php include_once "View\layouts\Heder.php" ?>
<title>Home</title>
<head> <link href="public\acents\css\home.css" rel="stylesheet"> </head>
<section id="destaque" style="margin-top: 4.5rem;">
      <div class="container">
        <a>  . </a>
    <div class="container">
        <h1 class="text-center top-40">Destaque</h1>
        <div class="row">

            <div class="col-md-6 d-flex justify-content-center flex-wrap">
                <img src="public\acents\imgs\barba.jpg" alt="Corte de Cabelo 1" class="img-fluid m-4 " width="350"> 

            </div>
            <div class="col-md-6 d-flex justify-content-center flex-wrap">
                <img src="public\acents\imgs\tratamentoEx.jpg" alt="Corte de Cabelo 2" class="img-fluid m-4 " width="350">

            </div>

            <!--<div class="col-md-6 d-flex justify-content-center flex-wrap">
                <img src="public\acents\imgs\limpeza.jpg" alt="Corte de Cabelo 3" class="img-fluid m-5 " width="350">

            </div>
            <div class="col-md-6 d-flex justify-content-center flex-wrap">
                <img src="public\acents\imgs\sobrancelha.jpg" alt="Corte de Cabelo 3" class="img-fluid m-5 " width="350">

            </div> -->
        </div>
        <div class="text-center">
            <h3>Curtiu? Agende um Horario!</h3>
            <a href="<?PHP $_SERVER['HTTP_HOST'] ?>/agendar" class="btn btn-warning">Agende um horario!</a>
        </div>
    </div>
</section>
<section style="margin-top: 3rem;" id="servicos">
    <div class="container">
        <h2 class="text-center">Tabela de Preços</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Cortes de Cabelo</h3>
                <p>Valor: 20 reais</p>
            </div>
            <div class="col-md-4">
                <h3>Barba</h3>
                <p>Valor: 15 reais</p>
            </div>
            <div class="col-md-4">
                <h3>Progressiva</h3>
                <p>70 reais</p>
            </div>
            <div class="col-md-4">
                <h3>Sobrancelha</h3>
                <p>Valor: 10 reais.</p>
            </div>
            <div class="col-md-4">
                <h3>Graxa</h3>
                <p>Valor: 20 reais</p>
            </div>
            <div class="col-md-4">
                <h3>Outros Serviços</h3>
                <p> Penteados (Valor a definir)</p>
            </div>
        </div>
    </div>
</section>
<!--<section style="margin-top: 3rem;" id="produtos">
    <div class="container">
        <h2 class="text-center"> Produtos</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="public\acents\imgs\91Lf-MNHcxS.jpg" alt=" Produto 1" class="img-fluid">
                <h3>Produto 1</h3>
                <p>Descrição do produto 1</p>
            </div>
            <div class="col-md-4">
                <img src="public\acents\imgs\81ONSzIsfdL._SX425_.jpg" alt="Produto 2" class="img-fluid">
                <h3>Produto 2</h3>
                <p>Descrição do produto 2</p>
            </div>
            <div class="col-md-4">
                <img src="public\acents\imgs\U02c9115a6d5c4cc6ba32785861cb9a1ci.jpg" alt="Produto 3" class="img-fluid">
                <h3>Produto 3</h3>
                <p>Descrição do produto 3</p>
            </div>
        </div>
    </div>
</section>
<section style="margin-top: 3rem;" id="avaliacoes">
    <div class="container">
        <h2 class="text-center">Avaliações de Clientes</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote>
                    <p>Fiz o corte com o João e ficou incrível! Ele é muito atencioso e profissional.</p>
                    <footer>Cliente 1</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote>
                    <p>Adorei a experiência no salão. O atendimento foi excelente e o corte ficou perfeito.</p>
                    <footer>Cliente 2</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote>
                    <p>Recomendo o salão! O  é muito talentoso e fez um ótimo trabalho com minha barba.</p>
                    <footer>Cliente 3</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section> -->
<?php include_once "View\layouts\Footer.php" ?>
