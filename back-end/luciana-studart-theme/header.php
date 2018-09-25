<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Luciana Studart <?php wp_title('-'); ?></title>
        <link href="<?php bloginfo('template_url'); ?>/css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:100' rel='stylesheet' type='text/css'>        
            <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
                <!--[if IE]>
                    <link href="css/estilos-ie.css" rel="stylesheet" type="text/css" media="screen" />
                <![endif]-->
                <!-- sliderman.js -->
                <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/sliderman.1.3.6.js"></script>
                <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/sliderman.css" />
                <!-- /sliderman.js -->

                <?php
                /* We add some JavaScript to pages with the comment form
                 * to support sites with threaded comments (when in use).
                 */
                if (is_singular() && get_option('thread_comments'))
                    wp_enqueue_script('comment-reply');

                /* Always have wp_head() just before the closing </head>
                 * tag of your theme, or you will break many plugins, which
                 * generally use this hook to add elements to <head> such
                 * as styles, scripts, and meta tags.
                 */
                wp_head();
                ?>


                </head>
                <body id="LucianaStudart" class="<?php echo $post->post_name; ?> <?php
                $slug = $post->post_name;
                $post_data = get_post($post->post_parent);
                $slug = $post_data->post_name;

                echo $slug;
                ?>"> 
                    <!-- SITE -->
                    <div id="Site">
                        <!-- CABECALHO -->
                        <div id="Cabecalho">
                            <h1><a href="/" title="Ir para a página inicial">Luciana Studart</a></h1>
                            <p>Executive and Life Coaching</p>
                        </div>
                        <!-- FIM DE CABECALHO -->
                        <hr/>
                        <!-- MENU -->
                        <div id="Menu">
                            <h2>Menu</h2>
                            <?php wp_page_menu('sort_column=menu_order'); ?>                           
                        </div>
                        <!-- FIM DE MENU -->
                        <hr/>