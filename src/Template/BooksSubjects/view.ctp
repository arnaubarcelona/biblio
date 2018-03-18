<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksSubject $booksSubject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Books Subject'), ['action' => 'edit', $booksSubject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Books Subject'), ['action' => 'delete', $booksSubject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksSubject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books Subjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Books Subject'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="booksSubjects view large-9 medium-8 columns content">
    <h3><?= h($booksSubject->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $booksSubject->has('book') ? $this->Html->link($booksSubject->book->name, ['controller' => 'Books', 'action' => 'view', $booksSubject->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= $booksSubject->has('subject') ? $this->Html->link($booksSubject->subject->name, ['controller' => 'Subjects', 'action' => 'view', $booksSubject->subject->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($booksSubject->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($booksSubject->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($booksSubject->modified) ?></td>
        </tr>
    </table>
</div>
