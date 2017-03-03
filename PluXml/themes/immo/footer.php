<?php if (!defined('PLX_ROOT')) exit; ?>

</DIV>
</DIV></DIV>
<!-- inner -->
</DIV>
<!-- mainsection -->
</SECTION>
<!-- page -->

<SECTION id="secondfooter">

	<footer class="footer" role="contentinfo">

		<p>
			&copy; 2016 <?php $plxShow->mainTitle('link'); ?> - 
			<?php $plxShow->subTitle(); ?> - 
			<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
			<?php $plxShow->httpEncoding() ?>
		</p>
		<ul class="menu">
			<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
			<li><a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
			<li><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
		</ul>

	</footer>

</SECTION>

</DIV><!-- container --> 

<LINK id="jquery-ui-style-css" href="<?php $plxShow->template(); ?>/r/jquery-ui.css"
rel="stylesheet" type="text/css" media="all">

<SCRIPT src="<?php $plxShow->template(); ?>/r/modernizr.custom.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/core.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/widget.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/mouse.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/draggable.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/tabs.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/accordion.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/sortable.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/selectable.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/resizable.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/button.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/position.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/dialog.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/datepicker.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT type="text/javascript">
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Fermer","currentText":"Aujourd\u2019hui","monthNames":["janvier","f\u00e9vrier","mars","avril","mai","juin","juillet","ao\u00fbt","septembre","octobre","novembre","d\u00e9cembre"],"monthNamesShort":["Jan","F\u00e9v","Mar","Avr","Mai","Juin","Juil","Ao\u00fbt","Sep","Oct","Nov","D\u00e9c"],"nextText":"Suivant","prevText":"Pr\u00e9c\u00e9dent","dayNames":["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],"dayNamesShort":["dim","lun","mar","mer","jeu","ven","sam"],"dayNamesMin":["D","L","M","M","J","V","S"],"dateFormat":"d MM yy","firstDay":1,"isRTL":false});});
</SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.easing.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.nivo.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.cycle.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/superfish.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.prettyPhoto.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.form.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.caroufredsel.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/cufon.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.adipoli.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/mouse.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.scrollbar.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.waitforimages.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.slabtext.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.wookmark.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.icon.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.flexslider-min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/mobile.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.hoverdir.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.tosrus.min.all.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.kinetic.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.smooth.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.nicescroll.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/function.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/custom.js.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/jquery.form.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"recaptcha":{"messages":{"empty":"Merci de confirmer que vous n\u2019\u00eates pas un robot."}}};
/* ]]> */
</SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/scripts.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/wp-embed.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/menu.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/wp-a11y.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT type="text/javascript">
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"Aucun r\u00e9sultat.","oneResult":"Un r\u00e9sultat trouv\u00e9. Utilisez les fl\u00e8ches haut et bas du clavier pour les parcourir. ","manyResults":"%d r\u00e9sultats trouv\u00e9s. Utilisez les fl\u00e8ches haut et bas du clavier pour les parcourir.","itemSelected":"\u00c9l\u00e9ment s\u00e9lectionn\u00e9."};
/* ]]> */
</SCRIPT>
 
<SCRIPT src="<?php $plxShow->template(); ?>/r/autocomplete.min.js" type="text/javascript"></SCRIPT>
 
 
   </BODY></HTML>
