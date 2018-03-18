<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LendingPolicy $lendingPolicy
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lending Policy'), ['action' => 'edit', $lendingPolicy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lending Policy'), ['action' => 'delete', $lendingPolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lendingPolicy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lending Policies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lending Policy'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Formats'), ['controller' => 'Formats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Format'), ['controller' => 'Formats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lendingPolicies view large-9 medium-8 columns content">
    <h3><?= h($lendingPolicy->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $lendingPolicy->has('group') ? $this->Html->link($lendingPolicy->group->name, ['controller' => 'Groups', 'action' => 'view', $lendingPolicy->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Format') ?></th>
            <td><?= $lendingPolicy->has('format') ? $this->Html->link($lendingPolicy->format->name, ['controller' => 'Formats', 'action' => 'view', $lendingPolicy->format->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lendingPolicy->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lending Length') ?></th>
            <td><?= $this->Number->format($lendingPolicy->lending_length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lending Max') ?></th>
            <td><?= $this->Number->format($lendingPolicy->lending_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lendingPolicy->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lendingPolicy->modified) ?></td>
        </tr>
    </table>
</div>
