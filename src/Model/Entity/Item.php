<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $book_id
 * @property int $location_id
 * @property int $lendable_state
 * @property int $lending_state
 * @property int $conservation_state_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\ConservationState $conservation_state
 */
class Item extends Entity
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
        'book_id' => true,
        'location_id' => true,
        'lendable_state' => true,
        'lending_state' => true,
        'conservation_state_id' => true,
        'created' => true,
        'modified' => true,
        'book' => true,
        'location' => true,
        'conservation_state' => true
    ];
}
