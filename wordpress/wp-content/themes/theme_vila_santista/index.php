<?php get_header(); ?>
	<div id="conteudo" class="left">
  	<div id="shadow_conteudo"></div>
    <div class="body_folhas left"></div>
    
    <div class="body_novidades left">
    	<div class="body_title_novidades left">
      	<a target="_self" href="" class="right">[+] carregar mais notícias</a>
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="body_post_destaque left">
        	<?php the_post_thumbnail( $size, $attr ); ?>
					<!--<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
					<p><?php the_content(); ?></p>-->
				</div>			
			<?php endwhile?>
			<?php endif; ?>
    </div>
		
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>