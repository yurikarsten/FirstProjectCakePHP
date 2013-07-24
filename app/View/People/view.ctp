<div class="people view">
<h2><?php  echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['User']['id'], array('controller' => 'users', 'action' => 'view', $person['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CorporateName'); ?></dt>
		<dd>
			<?php echo h($person['Person']['corporateName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($person['Person']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($person['Person']['cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($person['Person']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ie'); ?></dt>
		<dd>
			<?php echo h($person['Person']['ie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Im'); ?></dt>
		<dd>
			<?php echo h($person['Person']['im']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $person['Address']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo h($person['Person']['site']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($person['Person']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CellPhone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['cellPhone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HomePhone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['homePhone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BusinessPhone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['businessPhone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SkypeMsg'); ?></dt>
		<dd>
			<?php echo h($person['Person']['skypeMsg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GtalkMsg'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gtalkMsg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtherMsg'); ?></dt>
		<dd>
			<?php echo h($person['Person']['otherMsg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obs'); ?></dt>
		<dd>
			<?php echo h($person['Person']['obs']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
