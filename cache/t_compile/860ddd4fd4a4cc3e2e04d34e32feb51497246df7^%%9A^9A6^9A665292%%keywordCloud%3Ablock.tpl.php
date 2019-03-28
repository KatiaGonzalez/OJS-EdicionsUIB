<?php /* Smarty version 2.6.25-dev, created on 2019-02-27 13:36:10
         compiled from plugins/plugins/blocks/keywordCloud/blocks/keywordCloud:block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'plugins/plugins/blocks/keywordCloud/blocks/keywordCloud:block.tpl', 12, false),array('function', 'url', 'plugins/plugins/blocks/keywordCloud/blocks/keywordCloud:block.tpl', 23, false),)), $this); ?>
<div class="pkp_block block_Keywordcloud">
	<span class="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.keywordCloud.title"), $this);?>
</span>
	<div class="content" id='wordcloud'></div>
	<script>
	document.addEventListener("DOMContentLoaded", function() {
		d3.wordcloud()
			.size([300, 200])
			.selector('#wordcloud')
			.scale('linear')
			.fill(d3.scale.ordinal().range([ "#953255","#AA9139", "#2F3F73" , "#257059"]))
			.words(<?php echo $this->_tpl_vars['keywords']; ?>
)
			.onwordclick(function(d, i) {
				window.location = "<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'search','query' => 'QUERY_SLUG'), $this);?>
".replace(/QUERY_SLUG/, encodeURIComponent('*'+d.text+'*'));
			})
			.start();
	});
	</script>
</div>