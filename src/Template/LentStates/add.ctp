<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LentState $lentState
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lent States'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lentStates form large-9 medium-8 columns content">
    <?= $this->Form->create($lentState) ?>
    <fieldset>
        <legend><?= __('Add Lent State') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
