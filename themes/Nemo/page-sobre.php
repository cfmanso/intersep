<?php
//Template Name: Equipe
get_header();
?>



<?php

$prof = getAtivosByVinculo('professor');
$phd = getAtivosByVinculo('doutorado');
$grad = getAtivosByVinculo('graduacao');
$msc = getAtivosByVinculo('mestrado');
$egressos = getInativos();

?>

<div class="site-container">
    <div class="site-pusher">

        <?php include_once("sections/navbar.php"); ?>

        <div class="site-content">
            <?php include_once("sections/section-breadcrumb.php"); ?>
            <div class="container text-sobre">
                <div class="body-sobre">
                    <div class="col-12 img-default">
                        <img class="img-nemo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nemo-sobre.svg">
                    </div>
                    
                    <p>
                        The Ontology & Conceptual Modeling Research Group NEMO (Núcleo de Estudos em Modelagem Conceitual e Ontologias)  investigates the application of domain and foundational ontologies as well as ontology-based techniques in various aspects of conceptual modeling such as information modeling, enterprise modeling, agent-based systems and the Semantic Web.
                    </p>
                </div>

                <div class="body-sobre">
                    <div class="row canva-default" style="margin:0px;">
                        <!-- <div class="col-1"></div> -->
                        <div class="col-5 canva-inf-archive">
                            <p class="text-principal">
                                OUR HISTORY
                            </p>
                            <hr class="hr-default">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-6"></div>
                    </div>

                    <p>
                        NEMO was created in 2006, integrating then the former LabES (Software Engineering Research Laboratory). LabES was founded in 1999 with the prominent purpose of investigating the application of ontology-based techniques in Software Engineering. In this area, one the key projects conducted in this laboratory was the ODE (Ontology-Based Software Development Environment) Project. This project investigated the use of domain ontologies for domain engineering and for the systematic development of semantically-aware object-oriented frameworks, resulting in a number of formal ontologies for several software engineering sub-domains (e.g., software requirements, software process, software quality, risk analysis, etc.). Since 2003, the group has also been involved in the development of projects regarding the use of ontologies (both as a reference framework as a knowledge representation artifact) for providing intelligent support in software engineering knowledge management. Since 2013, there has also been increasing focus in the areas of Web Engineering and the Semantic Web.
                    </p>
                </div>

                <div class="body-sobre">
                    <div class="row canva-default" style="margin:0px;">
                        <!-- <div class="col-1"></div> -->
                        <div class="col-5 canva-inf-archive">
                            <p class="text-principal">
                                OUR WORK
                            </p>
                            <hr class="hr-default">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-6"></div>
                    </div>

                    <p>
                        Two scientific contributions that are at the core of NEMO’s research program are the foundational theory UFO (Unified Foundational Ontology) and the ontologically and cognitively well-founded conceptual modeling language OntoUML. These developments have influenced international standards (e.g., ISO SC7 Ontology Standards in Software Engineering, The Open Group’s ArchiMate) as well as international responses to standardization RFPs (e.g., OMG’s SIMF). The NEMO group is responsible for implementing a number of important computational tools for supporting Well-Founded Conceptual Modeling in OntoUML. Recently, the group has been exploring foundations for Multi-Level Conceptual Modelling with MLT and related technologies.
                    </p>

                    <p>
                        Ever since NEMO was founded, its members have been actively participating in the consolidation of the Brazilian Ontology Community by carrying out activities such as the organization of some the first scientific events devoted to ontologies in Brazil. Further, we have been establishing a productive partnership with industry regarding the application of ontologies in areas such as:
                    </p>

                    <ul class="sobre-list">
                        <li>Domain engineering</li>
                        <li>Software engineering</li>
                        <li>Petroleum and gas</li>
                        <li>Network management</li>
                        <li>Media and organizational modeling</li>
                    </ul>
                </div>

                <div class="body-sobre">
                    <div class="row canva-default" style="margin:0px;">
                        <!-- <div class="col-1"></div> -->
                        <div class="col-5 canva-inf-archive">
                            <p class="text-principal">
                                SUPPORT
                            </p>
                            <hr class="hr-default">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-6"></div>
                    </div>

                    <p>
                    NEMO has been supported by different funding agencies (FAPES, CAPES, CNPq) in different projects, from which we highlight the PRONEX program (FAPES/CNPq) for recognized centers of excellence in Brazil.
                    </p>

                    <div class="col-12 img-default">
                        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logosParceiros.svg">
                    </div>

                </div>

            </div>

            
                        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>