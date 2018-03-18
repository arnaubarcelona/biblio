<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @property \App\Model\Table\CdusTable|\Cake\ORM\Association\BelongsTo $Cdus
 * @property \App\Model\Table\FormatsTable|\Cake\ORM\Association\BelongsTo $Formats
 * @property \App\Model\Table\CollectionsTable|\Cake\ORM\Association\BelongsTo $Collections
 * @property \App\Model\Table\EditionPlacesTable|\Cake\ORM\Association\BelongsTo $EditionPlaces
 * @property \App\Model\Table\LocationsTable|\Cake\ORM\Association\BelongsTo $Locations
 * @property \App\Model\Table\CatalogueStatesTable|\Cake\ORM\Association\BelongsTo $CatalogueStates
 * @property \App\Model\Table\ConservationStatesTable|\Cake\ORM\Association\BelongsTo $ConservationStates
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\HasMany $Items
 * @property \App\Model\Table\LendingsTable|\Cake\ORM\Association\HasMany $Lendings
 * @property \App\Model\Table\AuthoritiesTable|\Cake\ORM\Association\BelongsToMany $Authorities
 * @property \App\Model\Table\EditorialsTable|\Cake\ORM\Association\BelongsToMany $Editorials
 * @property \App\Model\Table\LanguagesTable|\Cake\ORM\Association\BelongsToMany $Languages
 * @property \App\Model\Table\LevelsTable|\Cake\ORM\Association\BelongsToMany $Levels
 * @property \App\Model\Table\SubjectsTable|\Cake\ORM\Association\BelongsToMany $Subjects
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BooksTable extends Table
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

        $this->setTable('books');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cdus', [
            'foreignKey' => 'cdu_id'
        ]);
        $this->belongsTo('Formats', [
            'foreignKey' => 'format_id'
        ]);
        $this->belongsTo('Collections', [
            'foreignKey' => 'collection_id'
        ]);
        $this->belongsTo('EditionPlaces', [
            'foreignKey' => 'edition_place_id'
        ]);
        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id'
        ]);
        $this->belongsTo('CatalogueStates', [
            'foreignKey' => 'catalogue_state_id'
        ]);
        $this->belongsTo('ConservationStates', [
            'foreignKey' => 'conservation_state_id'
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'book_id'
        ]);
        $this->hasMany('Lendings', [
            'foreignKey' => 'book_id'
        ]);
        $this->belongsToMany('Authorities', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'authority_id',
            'joinTable' => 'authorities_books'
        ]);
        $this->belongsToMany('Editorials', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'editorial_id',
            'joinTable' => 'books_editorials'
        ]);
        $this->belongsToMany('Languages', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'language_id',
            'joinTable' => 'books_languages'
        ]);
        $this->belongsToMany('Levels', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'level_id',
            'joinTable' => 'books_levels'
        ]);
        $this->belongsToMany('Subjects', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'subject_id',
            'joinTable' => 'books_subjects'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('isbn')
            ->maxLength('isbn', 20)
            ->allowEmpty('isbn');

        $validator
            ->integer('collection_item')
            ->allowEmpty('collection_item');

        $validator
            ->scalar('edition_date')
            ->allowEmpty('edition_date');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmpty('image');

        $validator
            ->scalar('image_dir')
            ->maxLength('image_dir', 255)
            ->allowEmpty('image_dir');

        $validator
            ->integer('image_size')
            ->allowEmpty('image_size');

        $validator
            ->scalar('image_type')
            ->maxLength('image_type', 255)
            ->allowEmpty('image_type');

        $validator
            ->scalar('abstract')
            ->allowEmpty('abstract');

        $validator
            ->scalar('notes')
            ->allowEmpty('notes');

        $validator
            ->scalar('url')
            ->maxLength('url', 2083)
            ->allowEmpty('url');

        $validator
            ->integer('height')
            ->allowEmpty('height');

        $validator
            ->integer('width')
            ->allowEmpty('width');

        $validator
            ->integer('pagecount')
            ->allowEmpty('pagecount');

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
        $rules->add($rules->existsIn(['cdu_id'], 'Cdus'));
        $rules->add($rules->existsIn(['format_id'], 'Formats'));
        $rules->add($rules->existsIn(['collection_id'], 'Collections'));
        $rules->add($rules->existsIn(['edition_place_id'], 'EditionPlaces'));
        $rules->add($rules->existsIn(['location_id'], 'Locations'));
        $rules->add($rules->existsIn(['catalogue_state_id'], 'CatalogueStates'));
        $rules->add($rules->existsIn(['conservation_state_id'], 'ConservationStates'));

        return $rules;
    }
}
