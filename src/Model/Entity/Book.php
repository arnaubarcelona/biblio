<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string $name
 * @property string $isbn
 * @property int $cdu_id
 * @property int $format_id
 * @property int $collection_id
 * @property int $collection_item
 * @property int $edition_place_id
 * @property string $edition_date
 * @property string $image
 * @property string $image_dir
 * @property int $image_size
 * @property string $image_type
 * @property string $abstract
 * @property string $notes
 * @property string $url
 * @property int $height
 * @property int $width
 * @property int $pagecount
 * @property int $location_id
 * @property int $catalogue_state_id
 * @property int $conservation_state_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Cdus $cdus
 * @property \App\Model\Entity\Format $format
 * @property \App\Model\Entity\Collection $collection
 * @property \App\Model\Entity\EditionPlace $edition_place
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\CatalogueState $catalogue_state
 * @property \App\Model\Entity\ConservationState $conservation_state
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\Lending[] $lendings
 * @property \App\Model\Entity\Authority[] $authorities
 * @property \App\Model\Entity\Editorial[] $editorials
 * @property \App\Model\Entity\Language[] $languages
 * @property \App\Model\Entity\Level[] $levels
 * @property \App\Model\Entity\Subject[] $subjects
 */
class Book extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'isbn' => true,
        'cdu_id' => true,
        'format_id' => true,
        'collection_id' => true,
        'collection_item' => true,
        'edition_place_id' => true,
        'edition_date' => true,
        'image' => true,
        'image_dir' => true,
        'image_size' => true,
        'image_type' => true,
        'abstract' => true,
        'notes' => true,
        'url' => true,
        'height' => true,
        'width' => true,
        'pagecount' => true,
        'location_id' => true,
        'catalogue_state_id' => true,
        'conservation_state_id' => true,
        'created' => true,
        'modified' => true,
        'cdus' => true,
        'format' => true,
        'collection' => true,
        'edition_place' => true,
        'location' => true,
        'catalogue_state' => true,
        'conservation_state' => true,
        'items' => true,
        'lendings' => true,
        'authorities' => true,
        'editorials' => true,
        'languages' => true,
        'levels' => true,
        'subjects' => true
    ];
}
