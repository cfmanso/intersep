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
                            <h1 class="titulo-header">Publicações</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container text-sobre">
                <div class="body-sobre">
                                       
                    <p>
                    When available, you can find links to the publishers’ websites (through DOI) or to the author-submitted version of the paper (in PDF) at the right-hand side of the list. You can also view the full list of papers in BibTeX format.
                    </p>
                    <p>
                    All pdfs here are the author’s version of the work, posted here by permission of publishers for your personal use, not for re-distribution. The definitive version was published in the respective conference proceedings/journal issue.
                    </p>
                </div>

            </div>
        
        </div>
        <div class="site-cache" id="site-cache"></div>
    </div>
</div>
<?php get_footer(); ?>