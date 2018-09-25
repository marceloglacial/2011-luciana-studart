<?php get_header(); ?>
<!-- CONTEUDO -->
<div id="Conteudo">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 id="post-<?php the_ID(); ?>" class="titulo"><?php the_title(); ?></h2>
            <?php the_content('<p class="serif">Ler mais &raquo;</p>'); ?>
        </div>

    <?php endwhile;
endif; ?>
<!-- FIM DE CONTEUDO -->
<hr/>
<?php get_footer(); ?>