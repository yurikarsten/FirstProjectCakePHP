<div class="people index">
	<h2><?php echo __('People'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('corporateName'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('cnpj'); ?></th>
			<th><?php echo $this->Paginator->sort('rg'); ?></th>
			<th><?php echo $this->Paginator->sort('ie'); ?></th>
			<th><?php echo $this->Paginator->sort('im'); ?></th>
			<th><?php echo $this->Paginator->sort('address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('site'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('cellPhone'); ?></th>
			<th><?php echo $this->Paginator->sort('homePhone'); ?></th>
			<th><?php echo $this->Paginator->sort('businessPhone'); ?></th>
			<th><?php echo $this->Paginator->sort('skypeMsg'); ?></th>
			<th><?php echo $this->Paginator->sort('gtalkMsg'); ?></th>
			<th><?php echo $this->Paginator->sort('otherMsg'); ?></th>
			<th><?php echo $this->Paginator->sort('obs'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($people as $person): ?>
	<tr>
		<td><?php echo h($person['Person']['id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($person['User']['id'], array('controller' => 'users', 'action' => 'view', $person['User']['id'])); ?>
		</td>
		<td><?php echo h($person['Person']['corporateName']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['cnpj']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['rg']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['ie']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['im']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($person['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $person['Address']['id'])); ?>
		</td>
		<td><?php echo h($person['Person']['email']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['site']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['contact']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['cellPhone']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['homePhone']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['businessPhone']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['skypeMsg']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['gtalkMsg']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['otherMsg']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['obs']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
