<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksLanguage $booksLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $booksLanguage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $booksLanguage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Books Languages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="booksLanguages form large-9 medium-8 columns content">
    <?= $this->Form->create($booksLanguage) ?>
    <fieldset>
        <legend><?= __('Edit Books Language') ?></legend>
        <?php
            echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
            echo $this->Form->control('language_id', ['options' => $languages, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
