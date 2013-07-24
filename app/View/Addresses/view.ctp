<div class="addresses view">
<h2><?php  echo __('Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($address['Address']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($address['Address']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($address['Address']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($address['Address']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PostalCode'); ?></dt>
		<dd>
			<?php echo h($address['Address']['postalCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($address['City']['name'], array('controller' => 'cities', 'action' => 'view', $address['City']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address'), array('action' => 'edit', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address'), array('action' => 'delete', $address['Address']['id']), null, __('Are you sure you want to delete # %s?', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<?php if (!empty($address['Person'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('CorporateName'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Cnpj'); ?></th>
		<th><?php echo __('Rg'); ?></th>
		<th><?php echo __('Ie'); ?></th>
		<th><?php echo __('Im'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Site'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('CellPhone'); ?></th>
		<th><?php echo __('HomePhone'); ?></th>
		<th><?php echo __('BusinessPhone'); ?></th>
		<th><?php echo __('SkypeMsg'); ?></th>
		<th><?php echo __('GtalkMsg'); ?></th>
		<th><?php echo __('OtherMsg'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($address['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id']; ?></td>
			<td><?php echo $person['name']; ?></td>
			<td><?php echo $person['user_id']; ?></td>
			<td><?php echo $person['corporateName']; ?></td>
			<td><?php echo $person['cpf']; ?></td>
			<td><?php echo $person['cnpj']; ?></td>
			<td><?php echo $person['rg']; ?></td>
			<td><?php echo $person['ie']; ?></td>
			<td><?php echo $person['im']; ?></td>
			<td><?php echo $person['address_id']; ?></td>
			<td><?php echo $person['email']; ?></td>
			<td><?php echo $person['site']; ?></td>
			<td><?php echo $person['contact']; ?></td>
			<td><?php echo $person['cellPhone']; ?></td>
			<td><?php echo $person['homePhone']; ?></td>
			<td><?php echo $person['businessPhone']; ?></td>
			<td><?php echo $person['skypeMsg']; ?></td>
			<td><?php echo $person['gtalkMsg']; ?></td>
			<td><?php echo $person['otherMsg']; ?></td>
			<td><?php echo $person['obs']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), null, __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
