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
                            <h1 class="titulo-header"><?php echo get_the_title()?></h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container text-sobre">
                <div class="body-sobre">
                                       
                <?php echo apply_filters('the_content', $post->post_content); ?>
                
                </div>
            </div>
        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>