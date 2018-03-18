<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Format $format
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Format'), ['action' => 'edit', $format->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Format'), ['action' => 'delete', $format->id], ['confirm' => __('Are you sure you want to delete # {0}?', $format->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Formats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Format'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lending Policies'), ['controller' => 'LendingPolicies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lending Policy'), ['controller' => 'LendingPolicies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="formats view large-9 medium-8 columns content">
    <h3><?= h($format->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($format->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($format->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($format->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($format->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Books') ?></h4>
        <?php if (!empty($format->books)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Isbn') ?></th>
                <th scope="col"><?= __('Cdu Id') ?></th>
                <th scope="col"><?= __('Format Id') ?></th>
                <th scope="col"><?= __('Collection Id') ?></th>
                <th scope="col"><?= __('Collection Item') ?></th>
                <th scope="col"><?= __('Edition Place Id') ?></th>
                <th scope="col"><?= __('Edition Date') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Image Dir') ?></th>
                <th scope="col"><?= __('Image Size') ?></th>
                <th scope="col"><?= __('Image Type') ?></th>
                <th scope="col"><?= __('Abstract') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Height') ?></th>
                <th scope="col"><?= __('Width') ?></th>
                <th scope="col"><?= __('Pagecount') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('Catalogue State Id') ?></th>
                <th scope="col"><?= __('Conservation State Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($format->books as $books): ?>
            <tr>
                <td><?= h($books->id) ?></td>
                <td><?= h($books->name) ?></td>
                <td><?= h($books->isbn) ?></td>
                <td><?= h($books->cdu_id) ?></td>
                <td><?= h($books->format_id) ?></td>
                <td><?= h($books->collection_id) ?></td>
                <td><?= h($books->collection_item) ?></td>
                <td><?= h($books->edition_place_id) ?></td>
                <td><?= h($books->edition_date) ?></td>
                <td><?= h($books->image) ?></td>
                <td><?= h($books->image_dir) ?></td>
                <td><?= h($books->image_size) ?></td>
                <td><?= h($books->image_type) ?></td>
                <td><?= h($books->abstract) ?></td>
                <td><?= h($books->notes) ?></td>
                <td><?= h($books->url) ?></td>
                <td><?= h($books->height) ?></td>
                <td><?= h($books->width) ?></td>
                <td><?= h($books->pagecount) ?></td>
                <td><?= h($books->location_id) ?></td>
                <td><?= h($books->catalogue_state_id) ?></td>
                <td><?= h($books->conservation_state_id) ?></td>
                <td><?= h($books->created) ?></td>
                <td><?= h($books->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Books', 'action' => 'view', $books->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Books', 'action' => 'edit', $books->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Books', 'action' => 'delete', $books->id], ['confirm' => __('Are you sure you want to delete # {0}?', $books->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Lending Policies') ?></h4>
        <?php if (!empty($format->lending_policies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Format Id') ?></th>
                <th scope="col"><?= __('Lending Length') ?></th>
                <th scope="col"><?= __('Lending Max') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($format->lending_policies as $lendingPolicies): ?>
            <tr>
                <td><?= h($lendingPolicies->id) ?></td>
                <td><?= h($lendingPolicies->group_id) ?></td>
                <td><?= h($lendingPolicies->format_id) ?></td>
                <td><?= h($lendingPolicies->lending_length) ?></td>
                <td><?= h($lendingPolicies->lending_max) ?></td>
                <td><?= h($lendingPolicies->created) ?></td>
                <td><?= h($lendingPolicies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LendingPolicies', 'action' => 'view', $lendingPolicies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LendingPolicies', 'action' => 'edit', $lendingPolicies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LendingPolicies', 'action' => 'delete', $lendingPolicies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lendingPolicies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
