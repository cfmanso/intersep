<div id="projetos" class="">


<div class="header-quadro">
    <div class="info-quadro">
        <p class="pre-title-header-quadro">
            Our Projects
        </p>
        
        <span class="title-header-quadro">
            Projetos
        </span>

        <span class="link-title-header-quadro" >
            <a href="<?php echo get_post_type_archive_link('projetos'); ?>">Veja todos os projetos</a>
        </span>
    </div>
    
    <!-- <div style="display: block;"></div> -->

    <div class="row no-gutters hr-default" >
        <hr class="col-2 my-1 hr-principal"><hr class="col-10 my-1 hr-secundario">
    </div>
</div>

<div class="row no-gutters section-projetos">
<?php
        $query = new WP_Query( array( 'post_type' => 'projetos' ) );
        $posts = $query->posts;

        foreach($posts as $post) {
?>
            <div class="">
                <a href="<?php echo get_permalink($post); ?>">
                    <div class="canva" style="background-image: url('<?php echo the_field('imagem'); ?>')"></div>
                </a>
            </div>
<?php
        }
?>
</div>

</div>