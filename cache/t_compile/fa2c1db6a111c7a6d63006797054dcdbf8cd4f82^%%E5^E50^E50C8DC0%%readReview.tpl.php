<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 10:54:13
         compiled from core:controllers/grid/users/reviewer/readReview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:controllers/grid/users/reviewer/readReview.tpl', 14, false),array('function', 'csrf', 'core:controllers/grid/users/reviewer/readReview.tpl', 15, false),array('function', 'translate', 'core:controllers/grid/users/reviewer/readReview.tpl', 25, false),array('function', 'load_url_in_div', 'core:controllers/grid/users/reviewer/readReview.tpl', 87, false),array('function', 'fbvFormButtons', 'core:controllers/grid/users/reviewer/readReview.tpl', 101, false),array('modifier', 'escape', 'core:controllers/grid/users/reviewer/readReview.tpl', 16, false),array('modifier', 'date_format', 'core:controllers/grid/users/reviewer/readReview.tpl', 31, false),array('modifier', 'strip_unsafe_html', 'core:controllers/grid/users/reviewer/readReview.tpl', 49, false),array('modifier', 'nl2br', 'core:controllers/grid/users/reviewer/readReview.tpl', 59, false),array('modifier', 'translate', 'core:controllers/grid/users/reviewer/readReview.tpl', 81, false),array('modifier', 'assign', 'core:controllers/grid/users/reviewer/readReview.tpl', 86, false),array('block', 'fbvFormSection', 'core:controllers/grid/users/reviewer/readReview.tpl', 21, false),array('block', 'iterate', 'core:controllers/grid/users/reviewer/readReview.tpl', 47, false),array('block', 'fbvFormArea', 'core:controllers/grid/users/reviewer/readReview.tpl', 84, false),)), $this); ?>


<form class="pkp_form" id="readReviewForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'reviewRead'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="reviewAssignmentId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getSubmissionId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getStageId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />


	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div id="reviewAssignment-<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
			<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getReviewerFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h2>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('class' => 'description')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.review.readConfirmation"), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php if ($this->_tpl_vars['reviewAssignment']->getDateCompleted()): ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<div class="pkp_controllers_informationCenter_itemLastEvent">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.completed.date",'dateCompleted' => ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort']))), $this);?>

					</div>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php if ($this->_tpl_vars['reviewAssignment']->getRecommendation()): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<div class="pkp_controllers_informationCenter_itemLastEvent">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.recommendation",'recommendation' => $this->_tpl_vars['reviewAssignment']->getLocalizedRecommendation()), $this);?>

						</div>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['reviewAssignment']->getReviewFormId()): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reviewer/review/reviewFormResponse.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['comments']->getCount() || $this->_tpl_vars['commentsPrivate']->getCount()): ?>
					<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.review.reviewerComments"), $this);?>
</h3>
					<?php $this->_tag_stack[] = array('iterate', array('from' => 'comments','item' => 'comment')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.canShareWithAuthor"), $this);?>
</h4>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/revealMore.tpl", 'smarty_include_vars' => array('content' => ((is_array($_tmp=$this->_tpl_vars['comment']->getComments())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php $this->_tag_stack[] = array('iterate', array('from' => 'commentsPrivate','item' => 'comment')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.cannotShareWithAuthor"), $this);?>
</h4>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/revealMore.tpl", 'smarty_include_vars' => array('content' => ((is_array($_tmp=$this->_tpl_vars['comment']->getComments())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['reviewAssignment']->getCompetingInterests()): ?>
					<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.submission.competingInterests"), $this);?>
</h3>
					<div class="review_competing_interests">
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getCompetingInterests())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

					</div>
				<?php endif; ?>

			<?php else: ?>
				<?php if ($this->_tpl_vars['reviewAssignment']->getDateCompleted()): ?>
					<span class="pkp_controllers_informationCenter_itemLastEvent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.completed.date",'dateCompleted' => ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort']))), $this);?>
</span>
				<?php elseif ($this->_tpl_vars['reviewAssignment']->getDateConfirmed()): ?>
					<span class="pkp_controllers_informationCenter_itemLastEvent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.confirmed.date",'dateConfirmed' => ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateConfirmed())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort']))), $this);?>
</span>
				<?php elseif ($this->_tpl_vars['reviewAssignment']->getDateReminded()): ?>
					<span class="pkp_controllers_informationCenter_itemLastEvent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.reminded.date",'dateReminded' => ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateReminded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort']))), $this);?>
</span>
				<?php elseif ($this->_tpl_vars['reviewAssignment']->getDateNotified()): ?>
					<span class="pkp_controllers_informationCenter_itemLastEvent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notified.date",'dateNotified' => ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort']))), $this);?>
</span>
				<?php elseif ($this->_tpl_vars['reviewAssignment']->getDateAssigned()): ?>
					<span class="pkp_controllers_informationCenter_itemLastEvent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.assigned.date",'dateAssigned' => ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateAssigned())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort']))), $this);?>
</span>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


	<div class="pkp_notification" id="noFilesWarning" style="display: none;">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'noFilesWarningContent','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="editor.review.noReviewFilesUploaded")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => ((is_array($_tmp="editor.review.noReviewFilesUploaded.details")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'readReview')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "reviewer.submission.reviewerFiles")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.attachment.EditorReviewAttachmentsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'reviewId' => $this->_tpl_vars['reviewAssignment']->getId(),'stageId' => $this->_tpl_vars['reviewAssignment']->getStageId(),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewAttachmentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewAttachmentsGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'readReviewAttachmentsGridContainer','url' => $this->_tpl_vars['reviewAttachmentsGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_tpl_vars['reviewerRecommendations']; ?>


		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "editor.review.rateReviewer",'description' => "editor.review.rateReviewer.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_from = $this->_tpl_vars['reviewerRatingOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value'] => $this->_tpl_vars['stars']):
?>
				<label class="pkp_star_selection">
					<input type="radio" name="quality" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['value'] == $this->_tpl_vars['reviewAssignment']->getQuality()): ?> checked<?php endif; ?>>
					<?php echo $this->_tpl_vars['stars']; ?>

				</label>
			<?php endforeach; endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'closeButton','hideCancel' => false,'submitText' => "common.confirm"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>