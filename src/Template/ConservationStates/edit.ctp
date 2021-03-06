<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConservationState $conservationState
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conservationState->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conservationState->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conservation States'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conservationStates form large-9 medium-8 columns content">
    <?= $this->Form->create($conservationState) ?>
    <fieldset>
        <legend><?= __('Edit Conservation State') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
