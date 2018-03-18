<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksLevel $booksLevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Books Level'), ['action' => 'edit', $booksLevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Books Level'), ['action' => 'delete', $booksLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksLevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Books Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="booksLevels view large-9 medium-8 columns content">
    <h3><?= h($booksLevel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $booksLevel->has('book') ? $this->Html->link($booksLevel->book->name, ['controller' => 'Books', 'action' => 'view', $booksLevel->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $booksLevel->has('level') ? $this->Html->link($booksLevel->level->name, ['controller' => 'Levels', 'action' => 'view', $booksLevel->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($booksLevel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($booksLevel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($booksLevel->modified) ?></td>
        </tr>
    </table>
</div>
