<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lending $lending
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lendings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lending States'), ['controller' => 'LendingStates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lending State'), ['controller' => 'LendingStates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lendings form large-9 medium-8 columns content">
    <?= $this->Form->create($lending) ?>
    <fieldset>
        <legend><?= __('Add Lending') ?></legend>
        <?php
            echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('set_loan_user_id');
            echo $this->Form->control('set_return_user_id');
            echo $this->Form->control('date_taken', ['empty' => true]);
            echo $this->Form->control('date_return', ['empty' => true]);
            echo $this->Form->control('date_real_return', ['empty' => true]);
            echo $this->Form->control('lending_state_id', ['options' => $lendingStates, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
