<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('corporateName');
		echo $this->Form->input('cpf');
		echo $this->Form->input('cnpj');
		echo $this->Form->input('rg');
		echo $this->Form->input('ie');
		echo $this->Form->input('im');
		echo $this->Form->input('address_id');
		echo $this->Form->input('email');
		echo $this->Form->input('site');
		echo $this->Form->input('contact');
		echo $this->Form->input('cellPhone');
		echo $this->Form->input('homePhone');
		echo $this->Form->input('businessPhone');
		echo $this->Form->input('skypeMsg');
		echo $this->Form->input('gtalkMsg');
		echo $this->Form->input('otherMsg');
		echo $this->Form->input('obs');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
