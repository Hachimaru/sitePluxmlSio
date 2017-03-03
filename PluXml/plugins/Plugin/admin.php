<?php if (!defined('PLX_ROOT')) exit; 
# Control du token du formulaire
plxToken::validateFormToken($_POST);
	if(!empty($_POST)) {
		
		$plxPlugin->setParam('data', $_POST['data'], 'cdata');
		$plxPlugin->setParam('data2', $_POST['data2'], 'cdata');
		$plxPlugin->setParam('script', $_POST['script'], 'cdata');
		
		$plxPlugin->setParam('myfield', $_POST['myfield'], 'cdata');
		
		$plxPlugin->saveParams();
		header('Location: plugin.php?p=Plugin');
		exit;
	}
?>

<p>
	<h2><?php echo $plxPlugin->getInfo("description") ?></h2>
</p>

<p><?php $plxPlugin->lang('INFO') ?></p>

<code>&lt;?php eval($plxShow->callHook('Plugin')); ?&gt;</code>

<style>
	.nextum input, .nextum textarea{border-radius: 5px;width: 40%}
	.nextum input[type="submit"]{width: auto}
	.nextum textarea {min-height: 50px}
	.nextum label{font-style: italic}
</style>

<?php 

	$script = $plxPlugin->getParam('script');

?>


<form action="plugin.php?p=Plugin" method="post" class="nextum">

 	<?php echo plxToken::getTokenPostMethod() ?>

	<p>
		<label for="data">Exemple:</label>
		<input id="data" name="data"  maxlength="255" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("data")) ?>"/>
	</p>

	<p>
		
		<label for="script"><?php $plxPlugin->lang('LABEL_JQUERY') ?></label>
		<select name="script" id="select">
			<option value="true"  <?php if ($script == 'true') { echo'selected';}?> >Oui</option>
			<option value="false" <?php if ($script == 'false') { echo'selected';}?> >Non</option>
		</select>
	</p>
	
	<p class="in-action-bar">
		<input type="submit" name="submit" value="<?php $plxPlugin->lang('SUBMIT') ?>" />
	</p>
	
	<p
		<input type="email" name="user_email" />
	</p>
	
	<p>		<input type="date" name="stage" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("stage")) ?>"/>
	
	
	
	<p>
		<label for="data2">test:</label>
		<input id="data2" name="data2"  maxlength="255" value="<?php echo plxUtils::strCheck($plxPlugin->getParam("data2")) ?>"/>
	</p>
	
		<label for="script"><?php $plxPlugin->lang('LABEL_JQUERY') ?></label>
		<select name="script" id="ahah">
			<option value="true"  <?php if ($script == 'true') { echo'selected';}?> >je rie</option>
			<option value="false" <?php if ($script == 'false') { echo'selected';}?> >je ne rie pas</option>
			<option value="un peu juste" <?php if ($script == 'un peu juste') { echo'selected';}?> >je rie un peu</option>
		</select>
	</p>	
	
<textarea id="myfield" name="myfield" class="ckeditor">
	<?php echo plxUtils::strCheck($plxPlugin->getParam("myfield")) ?>
</textarea>
	
</form>








