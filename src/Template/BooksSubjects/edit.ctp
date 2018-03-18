<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BooksSubject $booksSubject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $booksSubject->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $booksSubject->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Books Subjects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="booksSubjects form large-9 medium-8 columns content">
    <?= $this->Form->create($booksSubject) ?>
    <fieldset>
        <legend><?= __('Edit Books Subject') ?></legend>
        <?php
            echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
            echo $this->Form->control('subject_id', ['options' => $subjects, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
