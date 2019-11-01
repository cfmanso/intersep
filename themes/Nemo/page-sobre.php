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
                            <h1 class="titulo-header">O Projeto</h1>
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
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/imgProjeto.png" width="100%">
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

                    <div class="row canva-default" style="margin:0px;">
                        <!-- <div class="col-1"></div> -->
                        <div class="col canva-inf-archive">
                            <p class="text-principal">
                            Resultados já alcançados
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <ol>
                            <li>Análise do domínio da segurança pública, com foco no processo do crime doloso contra a vida – PCDV (incluindo as etapas de ocorrência policial, investigação, indiciamento, denúncia, julgamento, execução penal e cumprimento da pena), por meio de visitas às agências de segurança pública (SESP, SEJUS, TJ-ES e MP-ES) e análise de documentação e de sistemas de informação; </li>
                            <li>Modelagem da arquitetura corporativa associada ao PCDV, por meio da análise da infraestrutura dos Sistemas de Informação que apoiam o processo (ex.: DEON, SIEP, INFOPEN) e os dados que fluem através dos processos (ex.: Boletim de Ocorrência, Inquérito Policial, Ficha de Execução Penal), de modo a prover um diagnóstico dos problemas de interoperabilidade (integração de dados) no PCDV; </li>
                            <li>Modelagem de uma Rede de Modelos de Informação de Referência do PCDV, chamada PCDV-ON, contendo modelos que descrevem os conceitos relativos à ocorrência, investigação, denúncia, julgamento e cumprimento de pena, todos eles centrados em um modelo sobre descrição do crime doloso contra a vida. A partir da PCDV-ON é possível representar de forma precisa os dados relativos ao PCDV espalhados nos diversos sistemas de informação das agências de segurança pública;</li>
                            <li>Mapeamento dos dados dos Sistemas de Informação para a PCDV-ON, associando elementos dos bancos de dados dos sistemas das agências de segurança pública (em particular, o DEON na SESP e o SIEP no TJ-ES) com os conceitos da PCDV-ON. Assim, o modelo de referência funciona como uma “interlíngua” entre os sistemas, que passam a poder interoperar de forma bem fundamentada; </li>
                            <li>Implementação de um protótipo demonstrando uma integração e visão unificada sobre os dados distribuídos em vários silos, que permite a um gestor do Governo do ES obter respostas a questões que são possíveis apenas a partir da integração bem fundamentada dos dados dos diversos sistemas de informação do PCDV. O protótipo, disponível em <a style="color: #278090;" target="_blank" href="http://dev.nemo.inf.ufes.br:8180/intersep/">http://dev.nemo.inf.ufes.br:8180/intersep/</a> (usuário: admin, senha: admin), utiliza dados fictícios, porém é baseado na estrutura real dos bancos de dados do DEON e do SIEP; </li>
                            <li>Publicações científicas com os resultados do projeto. </li>
                        </ol>
                        <a target="_blank" href="https://nemo.inf.ufes.br/publications/">
                        <button type="button" class="btn btn-outline-primary">DOWNLOAD</button>
                        </a>
                    </div>

                </div>

            </div>
        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>