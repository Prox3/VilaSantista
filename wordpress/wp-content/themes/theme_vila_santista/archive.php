<?php get_header(); ?>
	<div id="conteudo" class="left">
  	<div id="shadow_conteudo"></div>
    <div class="body_folhas left"></div>
    
    <div class="body_novidades left">
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <span class="title_content left"><?php echo single_cat_title(); ?></span>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink() ?>" target="_self">
        <div class="body_post_destaque left">
        	<?php the_post_thumbnail( $size, $attr ); ?>
          <div class="body_title_destaque">
          	<?php the_title(); ?>
          </div>
          <div class="body_content_part">
          	<?php the_excerpt(); ?>
          </div>
					<!--
					<p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
					<p><?php the_content(); ?></p>-->
				</div>
        </a>
			<?php endwhile?>
      <div class="navegacao">
        <div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
        <div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
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