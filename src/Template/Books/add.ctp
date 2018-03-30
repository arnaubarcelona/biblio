<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?></li>
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
<div class="books form large-9 medium-8 columns content">
    <?= $this->Form->create($book) ?>
    <fieldset>
        <legend><?= __('Add Book') ?></legend>
		
        <?php
            echo $this->Form->control('name');
            // Added by IV[14-03-2018]
            echo $this->Form->control('authority_ids', [
                'type' => 'select',
                'multiple' => true,
                'class' => 'multiple_autocomplete',
                'options' => $formattedAuthorities
            ]);
            echo $this->Form->control('cdu_id', [
                'type' => 'select',
                'class' => 'single_autocomplete',
                'options' => $formattedCdus
            ]);
            echo $this->Form->control('isbn');
            /*echo $this->Form->control('cdu_id', ['options' => $cdus, 'empty' => true]);*/
            echo $this->Form->control('format_id', ['options' => $formats, 'empty' => true]);
            echo $this->Form->control('collection_id', ['options' => $collections, 'empty' => true]);
            echo $this->Form->control('collection_item');
            echo $this->Form->control('edition_place_id', ['options' => $editionPlaces, 'empty' => true]);
            echo $this->Form->control('edition_date');
            echo $this->Form->control('image');
            echo $this->Form->control('image_dir');
            echo $this->Form->control('image_size');
            echo $this->Form->control('image_type');
            echo $this->Form->control('abstract');
            echo $this->Form->control('notes');
            echo $this->Form->control('url');
            echo $this->Form->control('height');
            echo $this->Form->control('width');
            echo $this->Form->control('pagecount');
            echo $this->Form->control('location_id', ['options' => $locations, 'empty' => true]);
            echo $this->Form->control('catalogue_state_id', ['options' => $catalogueStates, 'empty' => true]);
            echo $this->Form->control('conservation_state_id', ['options' => $conservationStates, 'empty' => true]);
            // echo $this->Form->control('authorities._ids', ['options' => $authorities, 'type' => 'text']);
            echo $this->Form->control('editorials._ids', ['options' => $editorials]);
            echo $this->Form->control('languages._ids', ['options' => $languages]);
            echo $this->Form->control('levels._ids', ['options' => $levels]);
            echo $this->Form->control('subjects._ids', [
                'multiple' => true,
                'type' => 'select',
                'class' => 'multi_subject_books',
                'options' => $subjects
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
