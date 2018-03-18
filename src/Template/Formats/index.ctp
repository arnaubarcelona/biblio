<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Format[]|\Cake\Collection\CollectionInterface $formats
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Format'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lending Policies'), ['controller' => 'LendingPolicies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lending Policy'), ['controller' => 'LendingPolicies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formats index large-9 medium-8 columns content">
    <h3><?= __('Formats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formats as $format): ?>
            <tr>
                <td><?= $this->Number->format($format->id) ?></td>
                <td><?= h($format->name) ?></td>
                <td><?= h($format->created) ?></td>
                <td><?= h($format->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $format->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $format->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $format->id], ['confirm' => __('Are you sure you want to delete # {0}?', $format->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
