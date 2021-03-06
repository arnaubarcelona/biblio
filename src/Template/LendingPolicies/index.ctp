<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LendingPolicy[]|\Cake\Collection\CollectionInterface $lendingPolicies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lending Policy'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Formats'), ['controller' => 'Formats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Format'), ['controller' => 'Formats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lendingPolicies index large-9 medium-8 columns content">
    <h3><?= __('Lending Policies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('format_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lending_length') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lending_max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lendingPolicies as $lendingPolicy): ?>
            <tr>
                <td><?= $this->Number->format($lendingPolicy->id) ?></td>
                <td><?= $lendingPolicy->has('group') ? $this->Html->link($lendingPolicy->group->name, ['controller' => 'Groups', 'action' => 'view', $lendingPolicy->group->id]) : '' ?></td>
                <td><?= $lendingPolicy->has('format') ? $this->Html->link($lendingPolicy->format->name, ['controller' => 'Formats', 'action' => 'view', $lendingPolicy->format->id]) : '' ?></td>
                <td><?= $this->Number->format($lendingPolicy->lending_length) ?></td>
                <td><?= $this->Number->format($lendingPolicy->lending_max) ?></td>
                <td><?= h($lendingPolicy->created) ?></td>
                <td><?= h($lendingPolicy->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lendingPolicy->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lendingPolicy->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lendingPolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lendingPolicy->id)]) ?>
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
