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

            <div class="row canva-default" >
                <!-- <div class="col-1"></div> -->
                <div class="col canva-inf-archive">
                    <p class="text-principal">
                        <?php echo the_field('nome_completo'); ?>
                    </p>
                    <hr class="hr-default">
                </div>
            </div>

            <div class="img-default-center">
                <img src="<?php echo the_field('imagem'); ?>"/>
            </div>

            <div class="text-single-equipe link-cor-nemo">

                <?php echo apply_filters('the_content', $post->post_content); ?>
            
            </div>

            <div class="text-single-equipe" style="display: block">
                <p class="name-single-equipe">
                    Resources:
                </p>
                <p>
                    <?php
                        $recursos = $post->recursos;
                    ?>
                    <?php
                        // check if the repeater field has rows of data
                        if( have_rows('recursos') ):
                            // loop through the rows of data
                            while ( have_rows('recursos') ) : the_row();
                                // display a sub field value
                                the_sub_field('descricao');
                                echo "<br>";
                            endwhile;
                        else :
                            echo 'nothing found';
                        endif;
                    ?>

                </p>
            </div>
            <div style="text-align:center">
                <button class="btn btn-site-projeto" type="button">
                    Acesse o site oficial do projeto
                    <span>
                        <img class="img-link-lattes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/link.svg" style="width: 18px;">
                    </span>
                </button>
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

                </div> 
            </div>
        </div>

        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>


<?php get_footer(); ?>