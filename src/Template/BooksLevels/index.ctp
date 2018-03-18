<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksLevel[]|\Cake\Collection\CollectionInterface $booksLevels
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Books Level'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="booksLevels index large-9 medium-8 columns content">
    <h3><?= __('Books Levels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($booksLevels as $booksLevel): ?>
            <tr>
                <td><?= $this->Number->format($booksLevel->id) ?></td>
                <td><?= $booksLevel->has('book') ? $this->Html->link($booksLevel->book->name, ['controller' => 'Books', 'action' => 'view', $booksLevel->book->id]) : '' ?></td>
                <td><?= $booksLevel->has('level') ? $this->Html->link($booksLevel->level->name, ['controller' => 'Levels', 'action' => 'view', $booksLevel->level->id]) : '' ?></td>
                <td><?= h($booksLevel->created) ?></td>
                <td><?= h($booksLevel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $booksLevel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booksLevel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booksLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksLevel->id)]) ?>
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
