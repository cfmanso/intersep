<?php
function console($msg){
	echo "<script>console.log(".json_encode($msg).")</script>";
}
//Adicionando suporte a menus
add_theme_support('menus');
//Registrat Menu
function register_navbar_menu() {
	register_nav_menu('navbar-menu',__( 'Navbar Menu' ));
}
add_action( 'init', 'register_navbar_menu' );
		

function custom_post_type_equipe(){
		register_post_type('equipe', array(
				'label' => 'Equipe',
				'description' => 'Equipe',
				'public' => true,
				'capability_type' => 'post',
				'show_in_menu' => true,
				'show_ui' => true,
				'has_archive' => true,
				'hierarchical' => true,
				// 'rewrite' => 

				'labels' => array(
						'parent_item_colon' => 'equipe',
						// 'name' => 'Equipe',
						// 'singular_name' => 'Equipe',
						// 'add_new' => 'Adicionar',
				),

				'supports' => array('title','editor','custom-fields'),

		));
}
add_action( 'init', 'custom_post_type_equipe' );

function custom_post_type_projeto(){
    register_post_type('projetos', array(
            'label' => 'Projetos',
            'description' => 'Projetos',
            'public' => true,
            'capability_type' => 'post',
            'show_in_menu' => true,
            'show_ui' => true,
            'has_archive' => true,
            'hierarchical' => true,
            // 'rewrite' => 


            'labels' => array(
                    'parent_item_colon' => 'projetos',
                    'name' => 'Projetos',
                    'singular_name' => 'Projeto',
                    // 'add_new' => 'Adicionar',
            ),

            'supports' => array('title','editor','custom-fields'),

    ));
}
add_action( 'init', 'custom_post_type_projeto' );

function change_default_title( $title ){
		$screen = get_current_screen();
		if  ( $screen->post_type == 'equipe' ) {
				return 'Digite o nome completo do membro da equipe aqui';
	 }
}
add_filter( 'enter_title_here', 'change_default_title' );

 
function create_taxonomy_vinculo() {
	$labels = array(
		'name' => 'Vínculos',
		'singular_name' => 'Vínculo',
	);
 
	register_taxonomy('vinculos',array('post'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'vinculo' ),
	));
 
}
add_action( 'init', 'create_taxonomy_vinculo', 0 );

function create_taxonomy_interesses() {
		$labels = array(
			'name' => 'Interesses',
			'singular_name' => 'Interesse',
		);
	 
		register_taxonomy('interesses',array('post'), array(
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array( 'slug' => 'interesses' ),
		));
	 
	}

add_action( 'init', 'create_taxonomy_interesses', 0 );

function create_taxonomy_categorias_projetos() {
	$labels = array(
		'name' => 'Categorias de Projetos',
		'singular_name' => 'Categoria',
	);
 
	register_taxonomy('categorias_projetos',array('post'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categorias_projetos' ),
	));
 
}
add_action( 'init', 'create_taxonomy_categorias_projetos', 0 );


function get_hansel_and_gretel_breadcrumbs(){
    // Set variables for later use
    $here_text        = __( 'You are currently here!' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<span typeof="v:Breadcrumb">';
    $link_after       = '</span>';
    $link_attr        = ' rel="v:url" property="v:title"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = ' <span class="breadcrumb-delimiter"> > </span>';              // Delimiter between crumbs
    $before           = '<span class="current">'; // Tag before the current crumb
    $after            = '</span>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) {

        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() ){
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }   

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<div class="breadcrumb"><div class="container">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            // $breadcrumb_output_link .= $here_text . $delimiter;
            $breadcrumb_output_link .= '<a href="' . $home_link . '">' . $home_text . '</a>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        // $breadcrumb_output_link .= $here_text . $delimiter;
        $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</div></div><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}


function getAtivosByVinculo($vinculo){
	$query = new WP_Query( array( 'post_type' => 'equipe' ) );
	$posts = $query->posts;
	// print_r($posts);

	$ret = array();

	foreach($posts as $post) {



		if(!get_field('membro_atual', $post->ID)) continue;
		$atual = get_field('vinculo_atual', $post->ID);

		if($atual['vinculo']->slug == $vinculo){
				array_push($ret, $post);
		}


	}
	
	return $ret;
}

function getInativos(){
	$query = new WP_Query( array( 'post_type' => 'equipe' ) );
	$posts = $query->posts;
	$ret = array();

	foreach($posts as $post) {
		if(get_field('membro_atual', $post->ID)) continue;
		$atual = get_field('vinculo_atual', $post->ID);
		array_push($ret, $post);
	}
	return $ret;
}