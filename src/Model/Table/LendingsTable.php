<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lendings Model
 *
 * @property \App\Model\Table\BooksTable|\Cake\ORM\Association\BelongsTo $Books
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SetLoanUsersTable|\Cake\ORM\Association\BelongsTo $SetLoanUsers
 * @property \App\Model\Table\SetReturnUsersTable|\Cake\ORM\Association\BelongsTo $SetReturnUsers
 * @property \App\Model\Table\LendingStatesTable|\Cake\ORM\Association\BelongsTo $LendingStates
 *
 * @method \App\Model\Entity\Lending get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lending newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lending[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lending|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lending patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lending[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lending findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LendingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('lendings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Books', [
            'foreignKey' => 'book_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('SetLoanUsers', [
            'foreignKey' => 'set_loan_user_id'
        ]);
        $this->belongsTo('SetReturnUsers', [
            'foreignKey' => 'set_return_user_id'
        ]);
        $this->belongsTo('LendingStates', [
            'foreignKey' => 'lending_state_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('date_taken')
            ->allowEmpty('date_taken');

        $validator
            ->date('date_return')
            ->allowEmpty('date_return');

        $validator
            ->date('date_real_return')
            ->allowEmpty('date_real_return');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['book_id'], 'Books'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['set_loan_user_id'], 'SetLoanUsers'));
        $rules->add($rules->existsIn(['set_return_user_id'], 'SetReturnUsers'));
        $rules->add($rules->existsIn(['lending_state_id'], 'LendingStates'));

        return $rules;
    }
}
