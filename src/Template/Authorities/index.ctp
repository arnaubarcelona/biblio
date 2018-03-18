<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authority[]|\Cake\Collection\CollectionInterface $authorities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Authority'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Author Types'), ['controller' => 'AuthorTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author Type'), ['controller' => 'AuthorTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorities index large-9 medium-8 columns content">
    <h3><?= __('Authorities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authorities as $authority): ?>
            <tr>
                <td><?= $this->Number->format($authority->id) ?></td>
                <td><?= $authority->has('author') ? $this->Html->link($authority->author->name, ['controller' => 'Authors', 'action' => 'view', $authority->author->id]) : '' ?></td>
                <td><?= $authority->has('author_type') ? $this->Html->link($authority->author_type->name, ['controller' => 'AuthorTypes', 'action' => 'view', $authority->author_type->id]) : '' ?></td>
                <td><?= h($authority->created) ?></td>
                <td><?= h($authority->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $authority->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authority->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authority->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authority->id)]) ?>
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
