<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorType $authorType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $authorType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $authorType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Author Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Authorities'), ['controller' => 'Authorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Authority'), ['controller' => 'Authorities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($authorType) ?>
    <fieldset>
        <legend><?= __('Edit Author Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
