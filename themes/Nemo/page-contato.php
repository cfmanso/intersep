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
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 contato">
                        <div class="titulo-nemo">Núcleo de Estudos em Modelagem Conceitual e Ontologias</div>
                        
                        <div class="info-nemo">
                            Av. Fernando Ferrari, 514.
                            <br>
                            UFES, CT-7 Depto. Informática
                            <br>
                            Goiabeiras – Vitória, ES – 29075-910
                        </div>

                        <div class="info-nemo">
                            <div>
                                <span>
                                    <img class="img_icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/phone-call.png">
                                </span>
                                <span>
                                    +55 27 4009-2137
                                </span>
                            </div>
                            <div>
                                <span>
                                    <img class="img_icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/mail.png"  >
                                </span>
                                <span>
                                    nemo.adm@inf.ufes.br
                                </span>
                            </div>
                                            
                        </div>
                        <div class="info-nemo">BRAZIL</div>
                    </div>

                    <div class="col-lg-5 col-sm-12 contato">

                        <form class="form-nemo">
                            <label class="box-first" for="name">Nome</label>
                            <input class="box-input-text" type="text" id="name" name="" placeholder="">
                            <!-- <br> -->
                            <label class="box" for="email">Email</label>
                            <input class="box-input-text" type="email" id="email" email="" placeholder="">
                            <!-- <br> -->
                            <label class="box" for="mensagem">Mensagem</label>
                            <textarea class="box-input-sms" type="text" id="mensagem" mensagem="" placeholder=""></textarea>
                            <div style="text-align: right">
                                <button class="box-button">Enviar</button>
                            </div>
                            

                        </form>
                    </div>

                    <div class="contato" style="width: 100%">
                        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-40.307300984859474%2C-20.274521117487936%2C-40.30455976724625%2C-20.272216418978775&amp;layer=mapnik&amp;marker=-20.27336877251384%2C-40.305930376052856" style="border: 0px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=-20.27337&amp;mlon=-40.30593#map=19/-20.27337/-40.30593"></a></small>
                    </div>
                
                </div>

            </div>
                  
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>