<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lending Entity
 *
 * @property int $id
 * @property int $book_id
 * @property int $user_id
 * @property int $set_loan_user_id
 * @property int $set_return_user_id
 * @property \Cake\I18n\FrozenDate $date_taken
 * @property \Cake\I18n\FrozenDate $date_return
 * @property \Cake\I18n\FrozenDate $date_real_return
 * @property int $lending_state_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\SetLoanUser $set_loan_user
 * @property \App\Model\Entity\SetReturnUser $set_return_user
 * @property \App\Model\Entity\LendingState $lending_state
 */
class Lending extends Entity
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
        'user_id' => true,
        'set_loan_user_id' => true,
        'set_return_user_id' => true,
        'date_taken' => true,
        'date_return' => true,
        'date_real_return' => true,
        'lending_state_id' => true,
        'created' => true,
        'modified' => true,
        'book' => true,
        'user' => true,
        'set_loan_user' => true,
        'set_return_user' => true,
        'lending_state' => true
    ];
}
