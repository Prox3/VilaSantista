<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" href="<?= bloginfo( 'template_url' ) ?>/css/print.css" media="print" />
<!--[if IE]> <link href="<?= bloginfo( 'template_url' ) ?>/css/ie.css" media="screen" rel="stylesheet" type="text/css" ><![endif]-->
<link href="<?= bloginfo( 'template_url' ) ?>/css/screen.css" media="screen" rel="stylesheet" type="text/css" >
<link href="<?= bloginfo( 'template_url' ) ?>/style2.css" media="screen" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="<?= bloginfo( 'template_url' ) ?>/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $(".dropdown-horizontal-container").css("background-color", "none");
		
		var heightConteudo = $("#conteudo").height();
		$("#shadow_conteudo").height(heightConteudo);
  });
</script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>
<body>
<div class="container">
	<div id="header" class="left">
  	<div id="bg_header"></div>
  	<div id="bg_nuvens">
    	<a class="logo left" target="_self" href="">Logo Vila Santista</a>
      <div class="body_navigator right">
    		<?php dynamic_sidebar( 'sidebarMenu' ); ?>
    	</div>
      <div class="body_slogan right"></div>
      <div class="body_rotatorPhotos left">
      	<?php dynamic_sidebar( 'SidebarPhotos' ); ?>
      </div>
      <div class="body_convenio right">
      	<span id="convenio_title" class="left">Convênio de parceria Clube - Empresa</span>
        <span id="convenio_description" class="left">Mais qualidade de vida para seus funcionários</span>
        <a target="_self" href="" id="bt_saiba_mais" class="left">saiba mais</a>
      </div>
    </div>
	</div>
  <div class="body_seja_socio left">
  	<div id="bg_shadow_seja_socio"></div>
    <a target="_self" href="" class="bt_seja_socio right">Seja sócio</a>
  </div>