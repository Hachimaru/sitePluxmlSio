<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<HEAD>

<meta charset="<?php $plxShow->charset('min'); ?>">
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css" media="screen"/>
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
<?php $plxShow->templateCss() ?>
<?php $plxShow->pluginsCss() ?>
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />	 
		 
<STYLE type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</STYLE>
 <LINK id="theme-css-css" href="<?php $plxShow->template(); ?>/r/style.css" 
rel="stylesheet" type="text/css" media="all"> <LINK id="font-awesome-css" href="<?php $plxShow->template(); ?>/r/font-awesome.css" 
rel="stylesheet" type="text/css" media="all"> <LINK id="custom-css-css" href="<?php $plxShow->template(); ?>/r/customcss.css" 
rel="stylesheet" type="text/css" media="all"> <LINK id="contact-form-7-css" 
href="<?php $plxShow->template(); ?>/r/styles.css" rel="stylesheet" type="text/css" 
media="all">

 <!-- / Google Analytics by MonsterInsights --> 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery-migrate.min.js" type="text/javascript"></SCRIPT>
 <LINK href="<?php $plxShow->template(); ?>/r/css.css" rel="stylesheet" type="text/css"> 
<SCRIPT src="<?php $plxShow->template(); ?>/r/webfont.js"></SCRIPT>
				 
<SCRIPT>
				if ("undefined" !== typeof WebFont) {
	  				WebFont.load({
	    				google: {
	      						families: ['Noto Sans:regular','Oxygen:300',]
	    					}
	  				});
      			}
				</SCRIPT>

<STYLE type="text/css">#cbackground {background-color:}</STYLE>
		
<STYLE type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</STYLE>
		 
</HEAD> 

<BODY class="home page-template-default page page-id-9 has_slider">
<DIV id="cbackground"></DIV>
<DIV id="container">
<DIV class="inner" id="container_inner"><SECTION id="overheader">
<DIV class="inner"></DIV></SECTION><SECTION class="page" id="page"><HEADER id="headline">
<DIV id="headmenu">
<DIV id="nav_gradient">
<DIV id="navline_wrap">
<DIV class="page" id="nav">
<DIV class="inner">
<DIV id="hautLogo">
<DIV class="two_third"><A href="http://sdimmobilier.fr/"><IMG class="logo" src="<?php $plxShow->template(); ?>/r/logo.png">										</A> 
									</DIV>
<DIV class="one_third_last">										 
<DIV class="clear"></DIV>
</DIV></DIV>
<DIV id="navleft"><NAV class="menu-menu-principal-container">
<UL class="main-menu main-menu-1 sf-menu sf-js-enabled sf-shadow" id="menu">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
</UL></NAV></DIV>
<DIV class="clear"></DIV></DIV></DIV></DIV></DIV></DIV></HEADER><!-- flex slider --> 
<DIV id="cycle_container">
<DIV id="cycleslider"><SECTION class="header custom_header cycleslider wait" id="cycle_header">
<DIV class="slideshow_cycle_container">
<DIV class="slideshow_cycle">
<DIV class="cycle_element"><IMG height="50" alt="" src="<?php $plxShow->template(); ?>/r/SITE-image6-final.jpg">
<DIV class="cylce_element_content pos_">
<P></P></DIV></DIV>
<DIV class="cycle_element"><IMG height="50" alt="" src="<?php $plxShow->template(); ?>/r/SITE-image1-final.jpg">
<DIV class="cylce_element_content pos_">
<P></P></DIV></DIV>
<DIV class="cycle_element"><IMG height="50" alt="" src="<?php $plxShow->template(); ?>/r/SITE-image2-final.jpg">
<DIV class="cylce_element_content pos_">
<P></P></DIV></DIV>
<DIV class="cycle_element"><IMG height="50" alt="" src="<?php $plxShow->template(); ?>/r/SITE-image3-final.jpg">
<DIV class="cylce_element_content pos_">
<P></P></DIV></DIV>
<DIV class="cycle_element"><IMG height="50" alt="" src="<?php $plxShow->template(); ?>/r/SITE-image4-final.jpg">
<DIV class="cylce_element_content pos_">
<P></P></DIV></DIV>
<DIV class="cycle_element"><IMG height="50" alt="" src="<?php $plxShow->template(); ?>/r/SITE-image5-final.jpg">
<DIV class="cylce_element_content pos_">
<P></P></DIV></DIV></DIV></DIV>
<UL class="flex-control-nav flex-control-paging" id="cycle_nav"></UL><A class="icon-chevron-left" 
id="cycle-prev" href="#"></A><A class="icon-chevron-right" 
id="cycle-next" href="#"></A>		 
<SCRIPT type="text/javascript">
		jQuery(window).load(function()
			{
			jQuery(".cycle_element").show();
			var ht = jQuery(".cycle_element").find("img").height();
			jQuery(".cycleslider").removeClass("wait").addClass("cycle_loaded");
			jQuery('.slideshow_cycle').animate({height: ht},500);
			jQuery(function() 
				{
			    	jQuery('.slideshow_cycle').cycle(
						{
				        		fx: "scrollLeft",
				        		speed:"2000",
						prev: 	"#cycle-prev",
						next:	"#cycle-next",
				        		timeout:  "4000",
				        		 pause:true, 				        		 auto: true,   
						pager:  '#cycle_nav',       
	 					pagerAnchorBuilder: function(idx, slide) 
							{ 
	        						return '<li><a href="#">GO</a></li>'; 
	    						} ,	 
	   					before: beforeSlide,
						after:    slideSlider,
						}); 
				});
				function onAfter(curr, next, opts, fwd) 
					{
					var ht = jQuery(".cycle_element").find("img").height();
					jQuery(this).parent().animate({height: ht});
					}	
			function slideSlider(oldSlide,slide)
				{ 
				jQuery(oldSlide).removeClass("aSlide"); //.animate({'background-position-x':'50%'},50); 
				jQuery(slide).addClass("aSlide"); //.animate({'background-position-x': '100%'}, 5000); 
				}
			function beforeSlide(oldSlide, slide)
				{
				jQuery(oldSlide).find("h2, h3, a").css("opacity","0");
				}
			    });
		</SCRIPT>
		 		 </SECTION></DIV></DIV>
<DIV class="mainsection">
<DIV class="inner"><!-- Page  -->		
<DIV id="page-sidebar-no-sidebar">
<DIV class="equal_height" id="contenu">
<header class="header sml-text-center med-text-left" role="banner">
	<h1 class="no-margin"><?php $plxShow->mainTitle('link'); ?></h1>
	<h2 class="h5 no-margin"><?php $plxShow->subTitle(); ?></h2>
</header>