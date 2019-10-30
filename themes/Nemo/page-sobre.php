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
                            <h1 style="margin-top: 350px;color: #5DC1D3;font-size: 72px;">O Projeto</h1>
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
                    <div style="text-align: center;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/imgProjeto.png">
                    </div>
                    <br>
                    <p>
                        Diversas ações têm sido conduzidas para enfrentar a realidade da violência no Espírito Santo, em particular para levar à redução de homicídios por meio de estratégias específicas a cada organização policial e pela articulação de iniciativas para melhoria dos indicadores sociais. Neste contexto, há a necessidade e oportunidade de aprimorar os sistemas de informação que apoiam atividades de acompanhamento e controle das organizações governamentais envolvidas com esta realidade, sobretudo lidando com informações sobre mortes violentas. 
                    </p>
                    <p>
                        A constituição de uma base de informações integrando dados das várias organizações que produzem tais informações sobre mortes violentas (no poder executivo, por exemplo, SESP, SEJUS e SESA) é peça fundamental para amparar diagnósticos de políticas e ações mais efetivas, bem como possibilitar a análise sobre o resultado dessas intervenções. 
                    </p>
                    <p>
                        O projeto INTERSEP visa atacar esta questão por meio de uma abordagem de governança de informações de Segurança Pública com base em Modelos de Informação de Referência. Tais modelos, também tecnicamente chamados de Ontologias, são gabaritos que guiam o processo de mapeamento de entidades e eventos de um silo de informação (base de dados ou sistemas de informação) em outros silos, possibilitando assim uma visão integrada da informação, que de outra forma estaria dispersa em vários silos. 
                    </p>
                </div>

            </div>
        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>