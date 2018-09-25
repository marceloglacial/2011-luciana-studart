
<?php get_header("blog"); ?>
<!-- CONTEUDO -->
<div id="Conteudo">
	<h2 class="titulo">Blog</h2>
    <div id="Posts">
	    <?php the_post(); ?>
	
	        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	        <p class="data">Escrito em <?php the_date() ?></p>
	        <?php the_content('<p class="serif">Ler mais &raquo;</p>'); ?>
	        <p class="comentarios"><a href="#">Comentários</a></p>
	        <?php comments_template( '', true ); ?>
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