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
                            <h1 style="margin-top: 350px;color: #5DC1D3;font-size: 72px;">Protótipo</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container text-sobre">
                <div class="body-sobre">
                <p>
                Implementação de um protótipo demonstrando uma integração e visão unificada sobre os dados distribuídos em vários silos, que permite a um gestor do Governo do ES obter respostas a questões que são possíveis apenas a partir da integração bem fundamentada dos dados dos diversos sistemas de informação do PCDV. 
                </p>
                <p>
                O protótipo, disponível em <a href="http://dev.nemo.inf.ufes.br:8180/intersep/">http://dev.nemo.inf.ufes.br:8180/intersep/</a>(usuário: admin, senha: admin), utiliza dados fictícios, porém é baseado na estrutura real dos bancos de dados do DEON e do SIEP.
                </p>
                
                
                </div>
            </div>
        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>