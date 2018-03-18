<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LendingPolicy Entity
 *
 * @property int $id
 * @property int $group_id
 * @property int $format_id
 * @property int $lending_length
 * @property int $lending_max
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Format $format
 */
class LendingPolicy extends Entity
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
        'group_id' => true,
        'format_id' => true,
        'lending_length' => true,
        'lending_max' => true,
        'created' => true,
        'modified' => true,
        'group' => true,
        'format' => true
    ];
}
