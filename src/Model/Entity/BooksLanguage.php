<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BooksLanguage Entity
 *
 * @property int $id
 * @property int $book_id
 * @property int $language_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\Language $language
 */
class BooksLanguage extends Entity
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
        'language_id' => true,
        'created' => true,
        'modified' => true,
        'book' => true,
        'language' => true
    ];
}