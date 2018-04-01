<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cdus $cdus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cdus'), ['action' => 'edit', $cdus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cdus'), ['action' => 'delete', $cdus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cdus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cdus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cdus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cdus view large-9 medium-8 columns content">
    <h3><?= h($cdus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($cdus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($cdus->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cdus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cdus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cdus->modified) ?></td>
        </tr>
    </table>
</div>
