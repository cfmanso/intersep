<?php
//Template Name: Equipe
get_header();
?>


<div class="site-container">
    <div class="site-pusher">

        <?php include_once("sections/navbar.php"); ?>

        <div class="site-content">
        
            <div id="headerPag" class="">

                <div class="jumbotron jumbotron-fluid headerPag-img">
                    <div class="container">
                        <div class="col">
                            <h1 style="margin-top: 350px;color: #5DC1D3;font-size: 72px;">Sobre</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container text-sobre">
                <div class="body-sobre">
                                       
                    <p>
                    A partir de demanda da Secretaria de Ações Estratégicas da gestão 2011-2014 do governador Renato Casagrande, a FAPES lançou o edital no 013/2014 - Pesquisa Aplicada a Políticas Públicas Estaduais, visando a geração de conhecimento técnico-científico para subsidiar a formulação de políticas públicas no estado do Espírito Santo, no tema “Políticas e Práticas para Prevenção, Proteção e Defesa Social”. 
                    </p>
                    <p>
                    O projeto INTERSEP foi contemplado com recursos do referido edital no total de R$ 644.250,00, tendo início em novembro/2015 e com previsão de conclusão em outubro/2019. O projeto envolve 6 professores do NEMO/UFES, 2 professores do IFES, 1 pesquisadora da PUC-RIO, além de diversos alunos de doutorado, mestrado e graduação da UFES, tanto bolsistas quanto voluntários. 
                    </p>
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/imgProjeto.png"></div>
                </div>

            </div>
        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>