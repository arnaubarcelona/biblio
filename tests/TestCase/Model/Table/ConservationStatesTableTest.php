<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConservationStatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConservationStatesTable Test Case
 */
class ConservationStatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConservationStatesTable
     */
    public $ConservationStates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conservation_states',
        'app.books',
        'app.cdus',
        'app.formats',
        'app.collections',
        'app.edition_places',
        'app.locations',
        'app.catalogue_states',
        'app.items',
        'app.lendings',
        'app.authorities',
        'app.authors',
        'app.author_types',
        'app.authorities_books',
        'app.editorials',
        'app.books_editorials',
        'app.languages',
        'app.books_languages',
        'app.levels',
        'app.books_levels',
        'app.subjects',
        'app.books_subjects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ConservationStates') ? [] : ['className' => ConservationStatesTable::class];
        $this->ConservationStates = TableRegistry::get('ConservationStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConservationStates);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
