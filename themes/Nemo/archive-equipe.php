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
            <div class="container">
                <div class="row canva-default" >
                    <!-- <div class="col-1"></div> -->
                    <div class="col-lg-5 col-sm-12 canva-inf-archive">
                        <p class="text-principal">
                            SÊNIOR MEMBERS
                        </p>
                        <hr class="hr-default">
                        <p class="text">
                            To get more information about members of NEMO please visit their website by clicking on their names.
                        </p>
                    </div>
                    <div class="col-1"></div>
                    
                    <div class="col-lg-6 col-sm-12">
                        <?php
                            foreach($prof as $p){
                        ?>
                            <a href="<?php echo get_permalink($p); ?>" >

                            <div class="card canva-card-professor">
                                <img
                                    class="card-img-top canva-img-archive" 
                                    src="<?php echo the_field('foto',$p); ?>" 
                                    
                                >
                                <div class="card-body">
                                    <p class="card-title text"><?php echo $p->nome_inicial; ?></p>
                                </div>
                            </div>                                
                            </a>

                        <?php
                            }
                        ?>
                        
                    </div>

                </div>
            </div>
            
            <div class="container-graduate">
                <div class="container">
                    <div class="row canva-default" >
                        <!-- <div class="col-1"></div> -->
                        <div class="col-5 canva-inf-archive">
                            <p class="text-principal">
                                GRADUATE MEMBERS
                            </p>
                            <hr class="hr-default">
                            <p class="text">
                                <a>
                                    PhD Student
                                </a>
                                <a>
                                    Master’s Student
                                </a>
                            </p>
                        </div>
                        <div class="col-1"></div>

                        <div class="col-6">
                        
                            <?php
                                foreach($prof as $p){
                            ?>
                                <a href="<?php echo get_permalink($p); ?>" >

                                <div class="card canva-card-graduate" style="max-width:120px; background-color: transparent;">
                                    <img
                                        class="card-img-top canva-img-archive" 
                                        src="<?php echo the_field('foto',$p); ?>" 
                                        
                                    >
                                    <div class="card-body">
                                        <p class="card-title text"><?php echo $p->nome_inicial; ?></p>
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
            
            <div class="container">
                <div class="row canva-default" >
                    <!-- <div class="col-1"></div> -->
                    <div class="col-5 canva-inf-archive">
                        <p class="text-principal">
                            FORMER MEMBERS
                        </p>
                        <hr class="hr-default">
                    </div>
                    <div class="col-1"></div>
                        
                    <div class="col-6 canva-inf-archive">
                        <p class="text">
                            Former undergraduate students from NEMO can be seen in the Grey Literature page, under the section Undergraduate Monographs. Note that some of the current members of Nemo also feature as alumni in the table below, as they have already concluded parts of their studies.
                        </p>
                    </div>

                    <div class="col-12">
                        <?php
                            foreach($prof as $p){
                        ?>
                            <a href="<?php echo get_permalink($p); ?>" >

                            <div class="card canva-card-former" style="max-width:160px; background-color: transparent;">
                                <img
                                    class="card-img-top canva-img-archive" 
                                    src="<?php echo the_field('foto',$p); ?>" 
                                    
                                >
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