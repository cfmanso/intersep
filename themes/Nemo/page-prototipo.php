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
                O protótipo, disponível em <a style="color: #278090;" target="_blank" href="http://dev.nemo.inf.ufes.br:8180/intersep/">http://dev.nemo.inf.ufes.br:8180/intersep/</a> <tag style="color: #827B7B; ">(usuário: admin, senha: admin)</tag>, utiliza dados fictícios, porém é baseado na estrutura real dos bancos de dados do DEON e do SIEP.
                </p>

                <div class="container" style="margin-top:50px; text-align: center;">
                <!-- ------------------------------------ -->
                    <div style="margin-top: 50px;">
                    <div class="col-lg-4 col-sm-12" style="display:inline-block; text-align: left;">
                        <div class="row canva-default" style="margin:10px;">
                            <!-- <div class="col-1"></div> -->
                            <div class="col canva-inf-archive">
                                <p class="text-principal">
                                1 - Tela Inicial
                                </p>
                            </div>
                        </div>
                        <p>
                            Bem vindo ao Intersep! Para ter acesso as consultas da ferramenta, faça o login (usuário: admin, senha: admin) e escolha sua forma de consulta. 
                        </p>
                        
                        <p>
                            Você encontra o contato e endereço do projeto na barra inferior do site. 
                        </p>
                    </div>
                    <div class="col-lg-7 col-sm-12" style="display:inline-block; vertical-align: top;">
                        <div style="text-align: center;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/P01.svg" style="width: 100%; border: 1px solid #5DC1D3;">
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------ -->

                <!-- ------------------------------------ -->
                <div style="margin-top: 50px;">
                <div class="col-lg-4 col-sm-12" style="display:inline-block; text-align: left;">
                        <div class="row canva-default" style="margin:10px;">
                            <!-- <div class="col-1"></div> -->
                            <div class="col canva-inf-archive">
                                <p class="text-principal">
                                2 - Consultas Quantitativas
                                </p>
                            </div>
                        </div>
                        <p>
                            Dentro da página Consultas Quantitativas você encontra questões estatísticas respondidas com a integração dos sistemas abordados.
                        </p>
                        
                        <p>
                            Defina o ano de pesquisa e acompanhe o gráfico para informações.
                        </p>
                    </div>
                    <div class="col-lg-7 col-sm-12" style="display:inline-block; vertical-align: top;">
                        <div style="text-align: center;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/P02.svg" style="width: 100%; border: 1px solid #5DC1D3;">
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------ -->

                <!-- ------------------------------------ -->
                <div style="margin-top: 50px;">
                <div class="col-lg-4 col-sm-12" style="display:inline-block; text-align: left;">
                        <div class="row canva-default" style="margin:10px;">
                            <!-- <div class="col-1"></div> -->
                            <div class="col canva-inf-archive">
                                <p class="text-principal">
                                3 - Consultas Qualitativas
                                </p>
                            </div>
                        </div>
                        <p>
                        Para informações sobre um indivíduo ou um processo específico vá para a página Consultas Qualitativas. 
                        </p>
                        
                        <p>
                        Busque informações utilizando a <tag style="color: #278090; ">Busca por CPF</tag> ou <tag style="color: #278090; ">Busca por Processo</tag>.
                        </p>
                    </div>
                    <div class="col-lg-7 col-sm-12" style="display:inline-block; vertical-align: top;">
                        <div style="text-align: center;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/P03.svg" style="width: 100%; border: 1px solid #5DC1D3;">
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------ -->

                <!-- ------------------------------------ -->
                <div style="margin-top: 50px;">
                <div class="col-lg-4 col-sm-12" style="display:inline-block; text-align: left;">
                        <div class="row canva-default" style="margin:10px;">
                            <!-- <div class="col-1"></div> -->
                            <div class="col canva-inf-archive">
                                <p class="text-principal">
                                 4 - Consulta Personalizada
                                </p>
                            </div>
                        </div>
                        <p>
                            Já a página Consultas Personalizadas te permite criar sua própria busca através da linguagem SPARQL.
                        </p>

                    </div>
                    <div class="col-lg-7 col-sm-12" style="display:inline-block; vertical-align: top;">
                        <div style="text-align: center;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/P04.svg" style="width: 100%; border: 1px solid #5DC1D3;">
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------ -->
                
                </div>
                
                
                </div>
            </div>
        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>