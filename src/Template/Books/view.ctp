<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cdus'), ['controller' => 'Cdus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cdus'), ['controller' => 'Cdus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Formats'), ['controller' => 'Formats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Format'), ['controller' => 'Formats', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Edition Places'), ['controller' => 'EditionPlaces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Edition Place'), ['controller' => 'EditionPlaces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Catalogue States'), ['controller' => 'CatalogueStates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catalogue State'), ['controller' => 'CatalogueStates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conservation States'), ['controller' => 'ConservationStates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conservation State'), ['controller' => 'ConservationStates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lendings'), ['controller' => 'Lendings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lending'), ['controller' => 'Lendings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authorities'), ['controller' => 'Authorities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authority'), ['controller' => 'Authorities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Editorials'), ['controller' => 'Editorials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Editorial'), ['controller' => 'Editorials', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($book->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= h($book->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cdus') ?></th>
            <td><?= $book->has('cdus') ? $this->Html->link($book->cdus->name, ['controller' => 'Cdus', 'action' => 'view', $book->cdus->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Format') ?></th>
            <td><?= $book->has('format') ? $this->Html->link($book->format->name, ['controller' => 'Formats', 'action' => 'view', $book->format->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collection') ?></th>
            <td><?= $book->has('collection') ? $this->Html->link($book->collection->name, ['controller' => 'Collections', 'action' => 'view', $book->collection->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edition Place') ?></th>
            <td><?= $book->has('edition_place') ? $this->Html->link($book->edition_place->name, ['controller' => 'EditionPlaces', 'action' => 'view', $book->edition_place->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edition Date') ?></th>
            <td><?= h($book->edition_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($book->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Dir') ?></th>
            <td><?= h($book->image_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Type') ?></th>
            <td><?= h($book->image_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($book->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $book->has('location') ? $this->Html->link($book->location->name, ['controller' => 'Locations', 'action' => 'view', $book->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catalogue State') ?></th>
            <td><?= $book->has('catalogue_state') ? $this->Html->link($book->catalogue_state->name, ['controller' => 'CatalogueStates', 'action' => 'view', $book->catalogue_state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conservation State') ?></th>
            <td><?= $book->has('conservation_state') ? $this->Html->link($book->conservation_state->name, ['controller' => 'ConservationStates', 'action' => 'view', $book->conservation_state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collection Item') ?></th>
            <td><?= $this->Number->format($book->collection_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Size') ?></th>
            <td><?= $this->Number->format($book->image_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height') ?></th>
            <td><?= $this->Number->format($book->height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Width') ?></th>
            <td><?= $this->Number->format($book->width) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagecount') ?></th>
            <td><?= $this->Number->format($book->pagecount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($book->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($book->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Abstract') ?></h4>
        <?= $this->Text->autoParagraph(h($book->abstract)); ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($book->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Authorities') ?></h4>
        <?php if (!empty($book->authorities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Author Id') ?></th>
                <th scope="col"><?= __('Author Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->authorities as $authorities): ?>
            <tr>
                <td><?= h($authorities->id) ?></td>
                <td><?= h($authorities->author_id) ?></td>
                <td><?= h($authorities->author_type_id) ?></td>
                <td><?= h($authorities->created) ?></td>
                <td><?= h($authorities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Authorities', 'action' => 'view', $authorities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Authorities', 'action' => 'edit', $authorities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Authorities', 'action' => 'delete', $authorities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Editorials') ?></h4>
        <?php if (!empty($book->editorials)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->editorials as $editorials): ?>
            <tr>
                <td><?= h($editorials->id) ?></td>
                <td><?= h($editorials->name) ?></td>
                <td><?= h($editorials->created) ?></td>
                <td><?= h($editorials->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Editorials', 'action' => 'view', $editorials->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Editorials', 'action' => 'edit', $editorials->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Editorials', 'action' => 'delete', $editorials->id], ['confirm' => __('Are you sure you want to delete # {0}?', $editorials->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Languages') ?></h4>
        <?php if (!empty($book->languages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->languages as $languages): ?>
            <tr>
                <td><?= h($languages->id) ?></td>
                <td><?= h($languages->name) ?></td>
                <td><?= h($languages->created) ?></td>
                <td><?= h($languages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Languages', 'action' => 'view', $languages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Languages', 'action' => 'edit', $languages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Languages', 'action' => 'delete', $languages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Levels') ?></h4>
        <?php if (!empty($book->levels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->levels as $levels): ?>
            <tr>
                <td><?= h($levels->id) ?></td>
                <td><?= h($levels->name) ?></td>
                <td><?= h($levels->created) ?></td>
                <td><?= h($levels->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Levels', 'action' => 'view', $levels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Levels', 'action' => 'edit', $levels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Levels', 'action' => 'delete', $levels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subjects') ?></h4>
        <?php if (!empty($book->subjects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->subjects as $subjects): ?>
            <tr>
                <td><?= h($subjects->id) ?></td>
                <td><?= h($subjects->name) ?></td>
                <td><?= h($subjects->created) ?></td>
                <td><?= h($subjects->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subjects', 'action' => 'view', $subjects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subjects', 'action' => 'edit', $subjects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subjects', 'action' => 'delete', $subjects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subjects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($book->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('Lendable State') ?></th>
                <th scope="col"><?= __('Lending State') ?></th>
                <th scope="col"><?= __('Conservation State Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->book_id) ?></td>
                <td><?= h($items->location_id) ?></td>
                <td><?= h($items->lendable_state) ?></td>
                <td><?= h($items->lending_state) ?></td>
                <td><?= h($items->conservation_state_id) ?></td>
                <td><?= h($items->created) ?></td>
                <td><?= h($items->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Lendings') ?></h4>
        <?php if (!empty($book->lendings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Set Loan User Id') ?></th>
                <th scope="col"><?= __('Set Return User Id') ?></th>
                <th scope="col"><?= __('Date Taken') ?></th>
                <th scope="col"><?= __('Date Return') ?></th>
                <th scope="col"><?= __('Date Real Return') ?></th>
                <th scope="col"><?= __('Lending State Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->lendings as $lendings): ?>
            <tr>
                <td><?= h($lendings->id) ?></td>
                <td><?= h($lendings->book_id) ?></td>
                <td><?= h($lendings->user_id) ?></td>
                <td><?= h($lendings->set_loan_user_id) ?></td>
                <td><?= h($lendings->set_return_user_id) ?></td>
                <td><?= h($lendings->date_taken) ?></td>
                <td><?= h($lendings->date_return) ?></td>
                <td><?= h($lendings->date_real_return) ?></td>
                <td><?= h($lendings->lending_state_id) ?></td>
                <td><?= h($lendings->created) ?></td>
                <td><?= h($lendings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lendings', 'action' => 'view', $lendings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lendings', 'action' => 'edit', $lendings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lendings', 'action' => 'delete', $lendings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lendings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
