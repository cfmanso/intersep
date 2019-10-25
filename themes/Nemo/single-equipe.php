<?php 
//Template Name: Single Equipe
get_header();
?>

<div class="site-container">
    <div class="site-pusher">

        <?php include_once("sections/navbar.php"); ?>

        <div class="site-content">

            <?php include_once("sections/section-breadcrumb.php"); ?>
            <div class="container">

                <div class="canva-sigle-equipe">
                    <div class="img-sigle-equipe">
                        <img class="img-default" src="<?php echo the_field('foto'); ?>" />
                        <hr class="hr-img">
                    </div>

                    <div class="text-single-equipe">
                        <p class="name-single-equipe">
                            <?php echo $post->nome_para_exibicao ?>
                        </p>
                        
                        <p class="default-single-equipe">
                            <?php 
                                $individuais = get_field('informacoes_individuais');
                                echo $individuais['endereco'];
                            ?>
                        </p>

                        <p class="default-single-equipe">
                            Contact:<br>
                            <?php 
                                $individuais = get_field('informacoes_individuais');
                                echo $individuais['email'];?>
                            <br>
                            <?php
                                echo $individuais['telefone'];
                            ?>
                            <br>
                            <?php
                                echo $individuais['skype'];
                            ?>
                            <br>
                            <?php
                                echo $individuais['site_pessoal'];
                            ?>
                        </p>
                        
                        <a href="<?php echo $post->lattes ?>">  
                            
                            <span class="lattes"><?php _e('Curriculum Vitae (CNPq Lattes)','nemo') ?></span>
                            <span>
                                <img class="img-link-lattes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/link.svg">
                            </span>
                        </a>
                    </div>
                    
                </div>
                
                <div class="text-single-equipe">

                    <?php echo apply_filters('the_content', $post->post_content); ?>
                
                </div>

                <div class="text-single-equipe" style="display: block">
                    <p class="name-single-equipe">
                    <?php _e('Research interests','nemo') ?>:
                    </p>
                    <p>
                        <?php
                        $interesses = $post->pesquisas_de_interesse;
                        if($interesses != NULL){ 
                            $iter = count($interesses);
                            foreach($interesses as $p){
                                $last_iteration = !(--$iter);
                                if($last_iteration){
                                    echo get_term($p)->name;
                                }else{
                                    echo get_term($p)->name . ", ";
                                }
                                //echo get_term($p)->name . ", ";
                                // print_r($p);
                                // echo "<br> !!! <br>";
                                // print_r(get_fields($p));
                                // echo "<br> <br>";
                            }
                        }else{
                            echo "Nothing.";
                        }
                        ?>

                    </p>
                </div>
                
            </div>

            <div class="extra-area">
                <div class="container">
                    <div class="text-single-equipe">
                        <span class="name-single-equipe">Publications</span>
                        <span>
                            <img class="img-link-lattes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seta-single-equipe.svg">
                        </span>
                        <br>

                        <span class="name-single-equipe">Teaching</span>
                        <span>
                            <img class="img-link-lattes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seta-single-equipe.svg">
                        </span>
                        <br>

                        <span class="name-single-equipe">Awards</span>
                        <span>
                            <img class="img-link-lattes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seta-single-equipe.svg">
                        </span>
                        <br>

                        <span class="name-single-equipe">Other Activities</span>
                        <span>
                            <img class="img-link-lattes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seta-single-equipe.svg">
                        </span>
                        <br>
                    </div> 
                </div>
            </div>
            
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>


<?php get_footer(); ?>