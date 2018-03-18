<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksSubject[]|\Cake\Collection\CollectionInterface $booksSubjects
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Books Subject'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="booksSubjects index large-9 medium-8 columns content">
    <h3><?= __('Books Subjects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($booksSubjects as $booksSubject): ?>
            <tr>
                <td><?= $this->Number->format($booksSubject->id) ?></td>
                <td><?= $booksSubject->has('book') ? $this->Html->link($booksSubject->book->name, ['controller' => 'Books', 'action' => 'view', $booksSubject->book->id]) : '' ?></td>
                <td><?= $booksSubject->has('subject') ? $this->Html->link($booksSubject->subject->name, ['controller' => 'Subjects', 'action' => 'view', $booksSubject->subject->id]) : '' ?></td>
                <td><?= h($booksSubject->created) ?></td>
                <td><?= h($booksSubject->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $booksSubject->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booksSubject->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booksSubject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksSubject->id)]) ?>
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
