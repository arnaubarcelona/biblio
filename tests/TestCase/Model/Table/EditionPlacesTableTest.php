<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EditionPlacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EditionPlacesTable Test Case
 */
class EditionPlacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EditionPlacesTable
     */
    public $EditionPlaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.edition_places',
        'app.countries',
        'app.books',
        'app.cdus',
        'app.formats',
        'app.collections',
        'app.locations',
        'app.catalogue_states',
        'app.conservation_states',
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
        $config = TableRegistry::exists('EditionPlaces') ? [] : ['className' => EditionPlacesTable::class];
        $this->EditionPlaces = TableRegistry::get('EditionPlaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EditionPlaces);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
