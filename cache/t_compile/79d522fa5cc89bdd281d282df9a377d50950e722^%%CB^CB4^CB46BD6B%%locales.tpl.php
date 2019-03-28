<?php /* Smarty version 2.6.25-dev, created on 2019-03-18 14:42:49
         compiled from file:/srv/www/edicions.uib.es/web/ojs/plugins/generic/translator/templates/locales.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/srv/www/edicions.uib.es/web/ojs/plugins/generic/translator/templates/locales.tpl', 21, false),array('function', 'translate', 'file:/srv/www/edicions.uib.es/web/ojs/plugins/generic/translator/templates/locales.tpl', 21, false),)), $this); ?>
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#translationTabs').pkpHandler('$.pkp.controllers.TabHandler', {
			notScrollable: true
		});
	});
</script>

<div id="translationTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "plugins.generic.translator.controllers.grid.LocaleGridHandler",'op' => 'fetchGrid','escape' => false,'tabsSelector' => "#translationTabs"), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.translator.availableLocales"), $this);?>
</a></li>
	</ul>
</div>