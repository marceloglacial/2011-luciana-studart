<?php
/*
  Template Name: Blog
 */
?>
<?php get_header(); ?>
<!-- CONTEUDO -->
<div id="Conteudo">
	<h2 id="post-<?php the_ID(); ?>" class="titulo"><?php the_title(); ?></h2>
    <div id="Posts">
	    <?php
	    query_posts('cat=3');
	    while (have_posts()) {
	        the_post(); ?>
	
	        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	        <p class="data">Escrito em <?php the_date() ?></p>
	        <?php the_content('<p class="serif">Ler mais &raquo;</p>'); ?>
	        <p class="comentarios"><?php comments_popup_link('Comente »', '1 coment&aacute;rio »', '% coment&aacute;rios »'); ?></p>
	
	    <?php 
	    } ?>
    </div>
	</div>
	<!-- FIM DE CONTEUDO -->
	<div id="Sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ){} ?>
	</ul>
	</div>

<hr/>
<?php get_footer(); ?>