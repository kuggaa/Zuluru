<?php
$this->Html->addCrumb (__('Facilities', true));
if (isset ($add)) {
	$this->Html->addCrumb (__('Create', true));
} else {
	$this->Html->addCrumb ($this->data['Facility']['name']);
	$this->Html->addCrumb (__('Edit', true));
}
?>

<div class="facilities form">
<?php echo $this->Form->create('Facility', array('url' => Router::normalize($this->here)));?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Facility', true)); ?></legend>
		<?php
		if (!isset ($add)) {
			echo $this->Form->input('id');
		}

		echo $this->ZuluruForm->input('name');
		echo $this->ZuluruForm->input('code');
		echo $this->ZuluruForm->input('is_open');
		echo $this->ZuluruForm->input('location_street', array('label' => 'Address'));
		echo $this->ZuluruForm->input('location_city', array('label' => 'City'));
		echo $this->ZuluruForm->input('location_province', array(
				'label' => 'Province',
				'options' => $provinces,
				'empty' => '---',
		));
		echo $this->ZuluruForm->input('region_id');
		echo $this->ZuluruForm->input('driving_directions', array('cols' => 70, 'class' => 'mceSimple'));
		echo $this->ZuluruForm->input('parking_details', array('cols' => 70, 'class' => 'mceSimple'));
		echo $this->ZuluruForm->input('transit_directions', array('cols' => 70, 'class' => 'mceSimple'));
		echo $this->ZuluruForm->input('biking_directions', array('cols' => 70, 'class' => 'mceSimple'));
		echo $this->ZuluruForm->input('washrooms', array('cols' => 70, 'class' => 'mceSimple'));
		echo $this->ZuluruForm->input('public_instructions', array('cols' => 70, 'class' => 'mceSimple'));
		echo $this->ZuluruForm->input('site_instructions', array('cols' => 70, 'class' => 'mceSimple'));
		echo $this->ZuluruForm->input('sponsor', array('cols' => 70, 'class' => 'mceAdvanced'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php if (!isset ($add)): ?>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Add %s', true), __('Field', true)), array('controller' => 'fields', 'action' => 'add', 'facility' => $this->data['Facility']['id']));?></li>
	</ul>
</div>
<?php endif; ?>
<?php
if (Configure::read('feature.tiny_mce')) {
	$this->TinyMce->editor('simple');
	$this->TinyMce->editor('advanced');
}
?>