<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EditionPlace Entity
 *
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Book[] $books
 */
class EditionPlace extends Entity
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
        'country_id' => true,
        'created' => true,
        'modified' => true,
        'country' => true,
        'books' => true
    ];
}
