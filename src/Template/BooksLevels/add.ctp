<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksLevel $booksLevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Books Levels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="booksLevels form large-9 medium-8 columns content">
    <?= $this->Form->create($booksLevel) ?>
    <fieldset>
        <legend><?= __('Add Books Level') ?></legend>
        <?php
            echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
            echo $this->Form->control('level_id', ['options' => $levels, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
