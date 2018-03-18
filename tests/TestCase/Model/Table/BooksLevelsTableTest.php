<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BooksLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BooksLevelsTable Test Case
 */
class BooksLevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BooksLevelsTable
     */
    public $BooksLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.books_levels',
        'app.books',
        'app.cdus',
        'app.formats',
        'app.collections',
        'app.edition_places',
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
        $config = TableRegistry::exists('BooksLevels') ? [] : ['className' => BooksLevelsTable::class];
        $this->BooksLevels = TableRegistry::get('BooksLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BooksLevels);

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
