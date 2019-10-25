
<?php
//Template Name: Projetos
?>
<?php get_header(); ?>


<?php

$query = new WP_Query( array( 'post_type' => 'projetos' ) );
$posts = $query->posts;

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
            <div class="container">

            </div>

            <div class="container">
                <div class="row canva-default" >
                    <!-- <div class="col-1"></div> -->
                    <div class="col-5 canva-inf-archive">
                        <p class="text-principal">
                            POR CATEGORIA
                        </p>
                        <hr class="hr-default">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6"></div>

                </div>

                <div class="categorias">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/publi_nemo.png">
                        <p class="text-categorias">Foundations</p>
                    </span>
                </div>

                <div class="categorias">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/publi_nemo.png">
                        <p class="text-categorias">Methods and Techniques</p>
                    </span>
                </div>
                
                <div class="categorias">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/publi_nemo.png">
                        <p class="text-categorias">Tools and Languages</p>
                    </span>
                </div>
                
                <div class="categorias">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/publi_nemo.png">
                        <p class="text-categorias">Applications</p>
                    </span>
                </div>


                <div class="row canva-default" >
                    <!-- <div class="col-1"></div> -->
                    <div class="col-5 canva-inf-archive">
                        <p class="text-principal">
                            POR PROJETO
                        </p>
                        <hr class="hr-default">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6"></div>

                </div>

                <div class="row canva-default" >
                    
                <div class="row no-gutters archive-projetos">
                    <?php
                            $query = new WP_Query( array( 'post_type' => 'projetos' ) );
                            $posts = $query->posts;

                            foreach($posts as $post) {
                    ?>
                        <a href="<?php echo get_permalink($post); ?>" >
                            <div class="card canva-card-projetos" style=" background-color: transparent;">
                                <img
                                    class="card-img-top canva-img-archive" 
                                    src="<?php echo the_field('imagem',$post); ?>" 
                                    
                                >
                                <div class="card-body" style="padding-left: 0px;padding-right: 0px;">
                                    <p class="card-title text"><?php echo $post->nome_para_exibicao; ?></p>

                                    <p><?php echo $post->descricao; ?></p>
                                </div>
                            </div>                                
                        </a>

                    <?php
                            }
                    ?>
                    </div>

                </div>


            </div>

            

        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>


