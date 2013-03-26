<?php get_header(); ?>
	<div id="conteudo" class="left">
  	<div id="shadow_conteudo"></div>
    <div class="body_folhas left"></div>
    
    <div class="body_novidades left" style="height:auto !important">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<span class="title_content left"><?php the_title(); ?></span>
        <span class="info_author_post left">Postado por <?php the_author() ?> em <?php the_time('j \d\e F \d\e Y') ?></span>
				<span class="content_text left"><?php the_content(); ?></span>
			<?php endwhile; else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div>			
			<?php endif; ?>
		</div>
		
		<div class="sidebar right">
    	<div class="body_social left">
      	<a target="_blank" href="" id="social_facebook" title="Facebook">Facebook</a>
        <a target="_blank" href="" id="social_twitter" title="Twitter">Twitter</a>
        <a target="_blank" href="" id="social_rss" title="Feeds RSS">Feeds RSS</a>
      </div>
      <div class="body_patrocinio left"></div>
    	<?php get_sidebar(); ?>
      <?php dynamic_sidebar( 'sidebarNewsletter' ); ?>
    </div>
	</div>
<?php get_footer(); ?>