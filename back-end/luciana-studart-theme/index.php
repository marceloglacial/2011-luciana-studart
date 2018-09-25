<?php get_header(); ?>


<!-- CONTEUDO -->
<div id="Conteudo">
    <!-- DESTAQUES -->
    <div id="Destaques">
        <h2>Destaques</h2>
        <div id="slider_container_2">

            <div id="SliderName_2" class="SliderName_2">

                <map name="img1map">
                    <area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
                    <area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
                </map>
                <img src="<?php bloginfo('template_url'); ?>/fotos/social.jpg" width="960" height="345" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
                <div class="SliderName_2Description"><h3><a href="/servicos/life-coaching/">Relacionamento Social</a></h3></div>
                <img src="<?php bloginfo('template_url'); ?>/fotos/comportamental.jpg" width="960" height="3450" alt="Demo2 second" title="Demo2 second" />
                <div class="SliderName_2Description"><h3><a href="/servicos/executive-coaching/">Resultados Eficazes</a></h3></div>

            </div>
            <div id="SliderNameNavigation_2"></div>

            <script type="text/javascript">
                effectsDemo2 = 'rain';
                var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 960, height: 345, effects: effectsDemo2,
                    display: {
                        autoplay: 3000,
                        loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
                        buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
                        description: {hide: false, background: 'none', opacity: 0, height: 345, position: 'top'},
                        navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
                    }
                });
            </script>
        </div>

    </div>
    <!-- /DESTAQUES -->
    <hr/>
    <!-- SERVICOS -->
    <div id="Servicos">
        <h2>Serviços</h2>
        <div class="executive">
            <h3><a href="/servicos/executive-coaching/">Executive Coaching</a></h3>
            <p><a href="/servicos/executive-coaching/">Desenvolvimento de competências voltadas para a área profissional</a></p>
        </div>
        <div class="life">
            <h3><a href="/servicos/life-coaching/">Life Coaching</a></h3>
            <p><a href="/servicos/life-coaching/">Desenvolvimento de competências voltadas para a área profissional</a></p>
        </div>
    </div>
    <!-- FIM DE SERVICOS -->
    <hr/>
    <!-- ULTIMAS NOTICIAS -->
    <div id="Ultimas">
        <h2><a href="http://www.lucianastudart.blogspot.com/">Últimas Notícias</a></h2>
        <ul>
	    <?php
	    query_posts('cat=3');
	    while (have_posts()) {
	        the_post(); ?>
	
	        <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
	
	    <?php 
	    } ?>
		</ul>
    </div>
    <!-- /ULTIMAS NOTICIAS -->
</div>
<!-- FIM DE CONTEUDO -->
<hr/>
<?php get_footer(); ?>