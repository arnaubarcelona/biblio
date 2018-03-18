<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksLanguage $booksLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Books Language'), ['action' => 'edit', $booksLanguage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Books Language'), ['action' => 'delete', $booksLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksLanguage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Books Language'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="booksLanguages view large-9 medium-8 columns content">
    <h3><?= h($booksLanguage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $booksLanguage->has('book') ? $this->Html->link($booksLanguage->book->name, ['controller' => 'Books', 'action' => 'view', $booksLanguage->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= $booksLanguage->has('language') ? $this->Html->link($booksLanguage->language->name, ['controller' => 'Languages', 'action' => 'view', $booksLanguage->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($booksLanguage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($booksLanguage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($booksLanguage->modified) ?></td>
        </tr>
    </table>
</div>
