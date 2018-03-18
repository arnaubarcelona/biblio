<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthoritiesBook $authoritiesBook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Authorities Book'), ['action' => 'edit', $authoritiesBook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Authorities Book'), ['action' => 'delete', $authoritiesBook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authoritiesBook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Authorities Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authorities Book'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authorities'), ['controller' => 'Authorities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authority'), ['controller' => 'Authorities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="authoritiesBooks view large-9 medium-8 columns content">
    <h3><?= h($authoritiesBook->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Authority') ?></th>
            <td><?= $authoritiesBook->has('authority') ? $this->Html->link($authoritiesBook->authority->id, ['controller' => 'Authorities', 'action' => 'view', $authoritiesBook->authority->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $authoritiesBook->has('book') ? $this->Html->link($authoritiesBook->book->name, ['controller' => 'Books', 'action' => 'view', $authoritiesBook->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($authoritiesBook->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($authoritiesBook->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($authoritiesBook->modified) ?></td>
        </tr>
    </table>
</div>
