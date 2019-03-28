<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 10:40:23
         compiled from manager/reviewForms/previewReviewForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'manager/reviewForms/previewReviewForm.tpl', 11, false),array('block', 'iterate', 'manager/reviewForms/previewReviewForm.tpl', 13, false),)), $this); ?>
<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h3>
<p><?php echo $this->_tpl_vars['description']; ?>
</p>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'reviewFormElements','item' => 'reviewFormElement')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<p><?php echo $this->_tpl_vars['reviewFormElement']->getLocalizedQuestion(); ?>
<?php if ($this->_tpl_vars['reviewFormElement']->getRequired()): ?>*<?php endif; ?></p>
		<p>
				<?php if ($this->_tpl_vars['reviewFormElement']->getElementType() == REVIEW_FORM_ELEMENT_TYPE_SMALL_TEXT_FIELD): ?>
						<input type="text" size="10" maxlength="40" class="textField" />
				<?php elseif ($this->_tpl_vars['reviewFormElement']->getElementType() == REVIEW_FORM_ELEMENT_TYPE_TEXT_FIELD): ?>
						<input type="text" size="40" class="textField" />
				<?php elseif ($this->_tpl_vars['reviewFormElement']->getElementType() == REVIEW_FORM_ELEMENT_TYPE_TEXTAREA): ?>
						<textarea rows="4" cols="40" class="textArea"></textarea>
				<?php elseif ($this->_tpl_vars['reviewFormElement']->getElementType() == REVIEW_FORM_ELEMENT_TYPE_CHECKBOXES): ?>
						<?php $this->assign('possibleResponses', $this->_tpl_vars['reviewFormElement']->getLocalizedPossibleResponses()); ?>
						<?php $_from = $this->_tpl_vars['possibleResponses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['responses'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['responses']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['responseId'] => $this->_tpl_vars['responseItem']):
        $this->_foreach['responses']['iteration']++;
?>
								<input id="check-<?php echo ((is_array($_tmp=$this->_tpl_vars['responseId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" type="checkbox"/>
								<label for="check-<?php echo ((is_array($_tmp=$this->_tpl_vars['responseId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo $this->_tpl_vars['responseItem']; ?>
</label>
								<br/>
						<?php endforeach; endif; unset($_from); ?>
				<?php elseif ($this->_tpl_vars['reviewFormElement']->getElementType() == REVIEW_FORM_ELEMENT_TYPE_RADIO_BUTTONS): ?>
						<?php $this->assign('possibleResponses', $this->_tpl_vars['reviewFormElement']->getLocalizedPossibleResponses()); ?>
						<?php $_from = $this->_tpl_vars['possibleResponses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['responses'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['responses']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['responseId'] => $this->_tpl_vars['responseItem']):
        $this->_foreach['responses']['iteration']++;
?>
								<input id="radio-<?php echo ((is_array($_tmp=$this->_tpl_vars['responseId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" name="<?php echo $this->_tpl_vars['reviewFormElement']->getId(); ?>
" type="radio"/>
								<label for="radio-<?php echo ((is_array($_tmp=$this->_tpl_vars['responseId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo $this->_tpl_vars['responseItem']; ?>
</label>
								<br/>
						<?php endforeach; endif; unset($_from); ?>
				<?php elseif ($this->_tpl_vars['reviewFormElement']->getElementType() == REVIEW_FORM_ELEMENT_TYPE_DROP_DOWN_BOX): ?>
						<select size="1" class="selectMenu">
								<?php $this->assign('possibleResponses', $this->_tpl_vars['reviewFormElement']->getLocalizedPossibleResponses()); ?>
								<?php $_from = $this->_tpl_vars['possibleResponses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['responses'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['responses']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['responseId'] => $this->_tpl_vars['responseItem']):
        $this->_foreach['responses']['iteration']++;
?>
										<option><?php echo $this->_tpl_vars['responseItem']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
						</select>
				<?php endif; ?>
		</p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>