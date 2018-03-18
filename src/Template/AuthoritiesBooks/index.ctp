<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthoritiesBook[]|\Cake\Collection\CollectionInterface $authoritiesBooks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Authorities Book'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authorities'), ['controller' => 'Authorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Authority'), ['controller' => 'Authorities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authoritiesBooks index large-9 medium-8 columns content">
    <h3><?= __('Authorities Books') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('authority_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authoritiesBooks as $authoritiesBook): ?>
            <tr>
                <td><?= $this->Number->format($authoritiesBook->id) ?></td>
                <td><?= $authoritiesBook->has('authority') ? $this->Html->link($authoritiesBook->authority->id, ['controller' => 'Authorities', 'action' => 'view', $authoritiesBook->authority->id]) : '' ?></td>
                <td><?= $authoritiesBook->has('book') ? $this->Html->link($authoritiesBook->book->name, ['controller' => 'Books', 'action' => 'view', $authoritiesBook->book->id]) : '' ?></td>
                <td><?= h($authoritiesBook->created) ?></td>
                <td><?= h($authoritiesBook->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $authoritiesBook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authoritiesBook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authoritiesBook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authoritiesBook->id)]) ?>
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
