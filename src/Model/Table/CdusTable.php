<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cdus Model
 *
 * @method \App\Model\Entity\Cdus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cdus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cdus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cdus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cdus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cdus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cdus findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CdusTable extends Table
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

        $this->setTable('cdus');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('name')
            ->maxLength('name', 20)
            ->allowEmpty('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 300)
            ->allowEmpty('description');

        return $validator;
    }
}
