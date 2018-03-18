<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthoritiesBook $authoritiesBook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Authorities Books'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Authorities'), ['controller' => 'Authorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Authority'), ['controller' => 'Authorities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authoritiesBooks form large-9 medium-8 columns content">
    <?= $this->Form->create($authoritiesBook) ?>
    <fieldset>
        <legend><?= __('Add Authorities Book') ?></legend>
        <?php
            echo $this->Form->control('authority_id', ['options' => $authorities, 'empty' => true]);
            echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
