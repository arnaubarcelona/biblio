<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AuthoritiesBook Entity
 *
 * @property int $id
 * @property int $authority_id
 * @property int $book_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Authority $authority
 * @property \App\Model\Entity\Book $book
 */
class AuthoritiesBook extends Entity
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
        'authority_id' => true,
        'book_id' => true,
        'created' => true,
        'modified' => true,
        'authority' => true,
        'book' => true
    ];
}
