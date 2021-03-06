
<?php if (!defined('PLX_ROOT')) exit; 

# Control du token du formulaire
plxToken::validateFormToken($_POST);


if(!empty($_POST)) {
	$plxPlugin->setParam('facebook', $_POST['facebook'], 'cdata');
	$plxPlugin->setParam('twitter', $_POST['twitter'], 'cdata');
	$plxPlugin->setParam('google', $_POST['google'], 'cdata');
	$plxPlugin->setParam('logo', $_POST['logo'], 'cdata');
	$plxPlugin->setParam('image', $_POST['image'], 'cdata');
	$plxPlugin->setParam('about', $_POST['about'], 'cdata');
	$plxPlugin->setParam('newabout', $_POST['newabout'], 'cdata');
	$plxPlugin->saveParams();
	header('Location: parametres_plugin.php?p=colors');
	exit;
}

?>

<h2><?php echo $plxPlugin->getInfo("description") ?></h2>

<style>
	input, textarea {border-radius: 5px;width: 70%}
	textarea {min-height: 70px}
	label{font-style: italic}
</style>



<form action="parametres_plugin.php?p=colors" method="post">

	<!-- navigation sur la page configuration du plugin -->
<nav id="tabby-1" class="tabby-tabs" data-for="example-tab-content">
	<ul>
		<li><a data-target="tab1" class="active" href="#"><?php $plxPlugin->lang('L_NAV_LIEN1') ?></a></li>
		<li><a data-target="tab2" href="#"><?php $plxPlugin->lang('L_NAV_LIEN2') ?></a></li>
		<li><a data-target="tab3" href="#"><?php $plxPlugin->lang('L_NAV_LIEN3') ?></a></li>
		<li><a data-target="tab4" href="#"><?php $plxPlugin->lang('L_NAV_LIEN4') ?></a></li>
		<li><a data-target="tab5" href="#"><?php $plxPlugin->lang('L_NAV_LIEN5') ?></a></li>
		<li><a data-target="tab6" href="#"><?php $plxPlugin->lang('L_NAV_LIEN6') ?></a></li>

	</ul>
</nav>

<!-- contenu de la page configuration -->
<div class="tabby-content" id="example-tab-content">

<div data-tab="tab1">
	<h3>Configurer votre template</h3>

	<p>
		Ajoutez les liens vers vos réseaux sociaux, placez votre logo dans le header du site et ajoutez le contenu dans le footer.
	</p>

	<p>
		Le template utilise la technologie SASS, n'hésitez pas à me contacter pour plus d'info.
	</p>
	<p>
		<a href="http://libertea.fr">www.libertea.fr</a>
	</p>
</div>	




<!-- page pour afficher les témoignages -->
<div data-tab="tab2">

	<p>
		<label for="facebook"><?php $plxPlugin->lang('L_FORM_FACEBOOK') ?></label>
		<input id="facebook" name="facebook"  maxlength="255" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("facebook")) ?>">
	</p>	

	<p>
		<label for="twitter"><?php $plxPlugin->lang('L_FORM_TWITTER') ?></label>
		<input id="twitter" name="twitter"  maxlength="255" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("twitter")) ?>">
	</p>

	<p>
		<label for="google"><?php $plxPlugin->lang('L_FORM_GOOGLE') ?></label>
		<input id="google" name="google"  maxlength="255" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("google")) ?>">
	</p>

</div>


<div data-tab="tab3">

	<p>
		<label for="logo">
			<?php $plxPlugin->lang('L_FORM_LOGO') ?>
			<a id="toggler_thumbnail" href="javascript:void(0)" onclick="mediasManager.openPopup('logo', true)">+</a>
		</label>

		<input id="logo" name="logo"  maxlength="255" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("logo")) ?>">
	</p>

	<?php 

		$logo = $plxPlugin->getParam("logo");

			if (empty($logo)) {?>

			<img src="<?php echo PLX_PLUGINS ?>colors/app/AucuneImage.jpg" alt="logo">

				<?php
			}else{
				
				$imgUrl = PLX_ROOT.$logo;

				?>

			<img src="<?php echo $imgUrl; ?>" alt="logo">

		<?php
			 
		}
	?>

</div>

<div data-tab="tab4" ng-app="angularApp" ng-controller="appController">

	<p>
		<label for="about"><?php $plxPlugin->lang('L_FORM_ABOUT') ?></label>
		<textarea ng-model="content" id="about" rows="10"   name="about"><? echo $plxPlugin->getParam('about'); ?></textarea>

	</p>

	 <p>
        Vous pouvez ajouter les mises en forme du texte en HTML, <b>pensez à utliser des simples quotes.</b>
        <br>
	        <code>
	            &lt;a href='votre lien' title='votre titre'&gt;Votre lien&lt;/a&gt;, &lt;br&gt;, &lt;p&gt; &lt;/p&gt; ...
	        </code>
        <br>
        <b>Résultat :</b>
    </p>

		<p ng-bind-html="getHtml(content)"></div>


<div data-tab="tab5" ng-app="angularApp2" ng-controller="appController2">

	<p>
		<label for="newabout"><?php $plxPlugin->lang('L_FORM_NEWABOUT') ?></label>
		<textarea ng-model="content" id="newabout" rows="10"   name="newabout"><? echo $plxPlugin->getParam('newabout'); ?></textarea>

	</p>

	 <p>
        Vous pouvez ajouter les mises en forme du texte en HTML, <b>pensez à utliser des simples quotes.</b>
        <br>
	        <code>
	            &lt;a href='votre lien' title='votre titre'&gt;Votre lien&lt;/a&gt;, &lt;br&gt;, &lt;p&gt; &lt;/p&gt; ...
	        </code>
        <br>
        <b>Résultat :</b>
    </p>

		<p ng-bind-html="getHtml(content)"></div>

<div data-tab="tab6">

	<p>
		<label for="image">
			<?php $plxPlugin->lang('L_FORM_IMAGE') ?>
			<a id="toggler_thumbnail" href="javascript:void(0)" onclick="mediasManager.openPopup('image', true)">+</a>
		</label>

		<input id="image" name="image"  maxlength="255" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("image")) ?>">
	</p>

	<?php 

		$image = $plxPlugin->getParam("image");

			if (empty($image)) {?>

			<img src="<?php echo PLX_PLUGINS ?>colors/app/AucuneImage.jpg" alt="image">

				<?php
			}else{
				
				$imgUrl = PLX_ROOT.$image;

				?>

			<img src="<?php echo $imgUrl; ?>" alt="image">

		<?php
			 
		}
	?>

</div>

</div>

	<p class="in-action-bar">
		<?php echo plxToken::getTokenPostMethod() ?>
		<input type="submit" name="submit" value="<?php $plxPlugin->lang('L_FORM_BT') ?>" />
	</p>


</form>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo PLX_PLUGINS ?>colors/app/jquery.tabby.js"></script>
<script>
    $(document).ready(function(){
        $('#tabby-1').tabby();
    });
</script>	
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<script>
var app = angular.module("angularApp", []);
app.controller("appController", function($scope, $sce){
	$scope.content = "<? echo $plxPlugin->getParam('about'); ?>";
    $scope.getHtml = function(html){
        return $sce.trustAsHtml(html);
    };
});
app.filter('html', function($sce) {
    return function(val) {
        return $sce.trustAsHtml(val);
    };
});
</script>	
<script>
var app2 = angular.module("angularApp2", []);
app2.controller("appController2", function($scope2, $sce2){
	$scope2.content = "<? echo $plxPlugin->getParam('newabout'); ?>";
    $scope2.getHtml = function(html){
        return $sce2.trustAsHtml(html);
    };
});
app2.filter('html', function($sce2) {
    return function(val) {
        return $sce2.trustAsHtml(val);
    };
});
</script>
