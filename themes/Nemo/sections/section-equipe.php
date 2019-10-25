<div id="equipe" class="">


<div class="header-quadro">
    <div class="info-quadro">
        <p class="pre-title-header-quadro">
            Meet the team
        </p>
        
        <span class="title-header-quadro">
            Equipe
        </span>

        <span class="link-title-header-quadro" >
            <a href="<?php echo get_post_type_archive_link('equipe'); ?>">Conheça todos os membros</a>
        </span>
    </div>
    
    <!-- <div style="display: block;"></div> -->

    <div class="row no-gutters hr-default" >
        <hr class="col-2 my-1 hr-principal"><hr class="col-10 my-1 hr-secundario">
    </div>
</div>

<div class="owl-carousel owl-theme carousel-equipe">
<?php 
        // $posts = get_posts([
        //     'post_type' => 'equipe',
        //     'post_status' => 'publish',
        //     'numberposts' => -1
        //     // 'order'    => 'ASC'
        //   ]);             

        //     foreach($posts as $post){
        //         to_array($post);
        //     }

        // <?php
        //     // Do your stuff, e.g.
        //     echo $post->post_name;
        //     echo '<br />';
        //     echo $post->nome_para_exibicao;
        //     echo '<br />';
        //     echo $post->lattes;

        $query = new WP_Query( array( 'post_type' => 'equipe' ) );
        $posts = $query->posts;

        foreach($posts as $post) {
?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="row no-gutters carousel-equipe-item">
                    <div class="col-6 image-side" style="background-image: url('<?php echo the_field('foto'); ?>')">
                    
                    </div>
                    <div class="col-6 info-side" style="">
                        <p class="text-config">
                            <?php echo $post->nome_para_exibicao ?>
                            <hr class="col-1 hr-config">
                        </p>
                    </div>
                </div>
            </a>
<?php
        }
?>
</div>

</div>