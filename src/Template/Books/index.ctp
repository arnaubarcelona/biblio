<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cdus'), ['controller' => 'Cdus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cdus'), ['controller' => 'Cdus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Formats'), ['controller' => 'Formats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Format'), ['controller' => 'Formats', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Edition Places'), ['controller' => 'EditionPlaces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Edition Place'), ['controller' => 'EditionPlaces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Catalogue States'), ['controller' => 'CatalogueStates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Catalogue State'), ['controller' => 'CatalogueStates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conservation States'), ['controller' => 'ConservationStates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conservation State'), ['controller' => 'ConservationStates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lendings'), ['controller' => 'Lendings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lending'), ['controller' => 'Lendings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authorities'), ['controller' => 'Authorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Authority'), ['controller' => 'Authorities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Editorials'), ['controller' => 'Editorials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Editorial'), ['controller' => 'Editorials', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="books index large-9 medium-8 columns content">
    <h3><?= __('Books') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cdu_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('format_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('collection_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('collection_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edition_place_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edition_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height') ?></th>
                <th scope="col"><?= $this->Paginator->sort('width') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagecount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catalogue_state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conservation_state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $this->Number->format($book->id) ?></td>
                <td><?= h($book->name) ?></td>
                <td><?= h($book->isbn) ?></td>
                <td><?= $book->has('cdus') ? $this->Html->link($book->cdus->name, ['controller' => 'Cdus', 'action' => 'view', $book->cdus->id]) : '' ?></td>
                <td><?= $book->has('format') ? $this->Html->link($book->format->name, ['controller' => 'Formats', 'action' => 'view', $book->format->id]) : '' ?></td>
                <td><?= $book->has('collection') ? $this->Html->link($book->collection->name, ['controller' => 'Collections', 'action' => 'view', $book->collection->id]) : '' ?></td>
                <td><?= $this->Number->format($book->collection_item) ?></td>
                <td><?= $book->has('edition_place') ? $this->Html->link($book->edition_place->name, ['controller' => 'EditionPlaces', 'action' => 'view', $book->edition_place->id]) : '' ?></td>
                <td><?= h($book->edition_date) ?></td>
                <td><?= h($book->image) ?></td>
                <td><?= h($book->image_dir) ?></td>
                <td><?= $this->Number->format($book->image_size) ?></td>
                <td><?= h($book->image_type) ?></td>
                <td><?= h($book->url) ?></td>
                <td><?= $this->Number->format($book->height) ?></td>
                <td><?= $this->Number->format($book->width) ?></td>
                <td><?= $this->Number->format($book->pagecount) ?></td>
                <td><?= $book->has('location') ? $this->Html->link($book->location->name, ['controller' => 'Locations', 'action' => 'view', $book->location->id]) : '' ?></td>
                <td><?= $book->has('catalogue_state') ? $this->Html->link($book->catalogue_state->name, ['controller' => 'CatalogueStates', 'action' => 'view', $book->catalogue_state->id]) : '' ?></td>
                <td><?= $book->has('conservation_state') ? $this->Html->link($book->conservation_state->name, ['controller' => 'ConservationStates', 'action' => 'view', $book->conservation_state->id]) : '' ?></td>
                <td><?= h($book->created) ?></td>
                <td><?= h($book->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $book->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
