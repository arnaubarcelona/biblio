<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BooksLanguagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BooksLanguagesTable Test Case
 */
class BooksLanguagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BooksLanguagesTable
     */
    public $BooksLanguages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.books_languages',
        'app.books',
        'app.cdus',
        'app.formats',
        'app.lending_policies',
        'app.collections',
        'app.edition_places',
        'app.countries',
        'app.locations',
        'app.items',
        'app.conservation_states',
        'app.catalogue_states',
        'app.lendings',
        'app.users',
        'app.set_loan_users',
        'app.set_return_users',
        'app.lending_states',
        'app.authorities',
        'app.authors',
        'app.author_types',
        'app.authorities_books',
        'app.editorials',
        'app.books_editorials',
        'app.languages',
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
        $config = TableRegistry::exists('BooksLanguages') ? [] : ['className' => BooksLanguagesTable::class];
        $this->BooksLanguages = TableRegistry::get('BooksLanguages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BooksLanguages);

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
