<?php get_header(); ?>

<div class="site-container">
    <div class="site-pusher">

        <?php include_once("sections/navbar.php"); ?>

        <div class="site-content">
            <?php include_once("sections/highlights.php"); ?>
            
            <div class="container">    

                <?php include_once("sections/section-conheca.php"); ?>
                
                <?php include_once("sections/section-projetos.php"); ?>

            </div>
        </div>

        <div class="site-cache" id="site-cache"></div>
    </div>
</div>

<?php get_footer(); ?>