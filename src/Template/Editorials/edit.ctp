<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editorial $editorial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $editorial->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $editorial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Editorials'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="editorials form large-9 medium-8 columns content">
    <?= $this->Form->create($editorial) ?>
    <fieldset>
        <legend><?= __('Edit Editorial') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('books._ids', ['options' => $books]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
