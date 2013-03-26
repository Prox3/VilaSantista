<?php get_header(); ?>
	<div id="conteudo" class="left">
  	<div id="shadow_conteudo"></div>
    <div class="body_folhas left"></div>
    
    <div class="body_novidades left">
    	<div class="body_title_novidades left">
      	<a target="_self" href="" class="right">[+] carregar mais notícias</a>
      </div>
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
		<div class="body_events left">
    	<div class="body_title_events left"></div>
      <?php dynamic_sidebar( 'sidebarEvento' ); ?>
      <a target="_self" href="" class="bt_agenda_eventos left">AGENDA COMPLETA</a>
    </div>
    <div class="box_location left">
    	<span>FAÇA SEU EVENTO NO VILA SANTISTA!<br />TODA ESTRUTURA PRONTA PARA VOCÊ</span>
      <a target="_self" href="">&raquo; clique aqui e veja mais detalhes</a>
    </div>
	</div>
<?php get_footer(); ?>