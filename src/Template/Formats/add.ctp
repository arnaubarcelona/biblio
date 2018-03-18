<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Format $format
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Formats'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lending Policies'), ['controller' => 'LendingPolicies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lending Policy'), ['controller' => 'LendingPolicies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formats form large-9 medium-8 columns content">
    <?= $this->Form->create($format) ?>
    <fieldset>
        <legend><?= __('Add Format') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
