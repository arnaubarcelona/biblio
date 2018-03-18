<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LendingPolicy $lendingPolicy
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lending Policies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Formats'), ['controller' => 'Formats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Format'), ['controller' => 'Formats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lendingPolicies form large-9 medium-8 columns content">
    <?= $this->Form->create($lendingPolicy) ?>
    <fieldset>
        <legend><?= __('Add Lending Policy') ?></legend>
        <?php
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('format_id', ['options' => $formats, 'empty' => true]);
            echo $this->Form->control('lending_length');
            echo $this->Form->control('lending_max');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
