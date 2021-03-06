<div class="jobResumes add form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
	<legend><?php echo __('Job Info'); ?></legend>
		<?php echo $this->Form->input('Job.name'); ?>
		<?php echo $this->Form->input('Job.description', array('type' => 'richtext')); ?>
		<?php
		echo $this->Form->input('is_featured', array('type' => 'radio', 'options' => array('1' => 'Yes', '0' => 'No')));
		?>
		
	</fieldset>
	<?php echo $this->Form->end('Save'); ?>	
</div>

<?php 
// set the contextual breadcrumb items
$this->set('context_crumbs', array('crumbs' => array(
	$this->Html->link(__('Admin Dashboard'), '/admin'),
	'Add Job',
)));
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Jobs',
		'items' => array(
			$this->Html->link(__('List Jobs'), array('action' => 'index')),
			)
		),
	)));