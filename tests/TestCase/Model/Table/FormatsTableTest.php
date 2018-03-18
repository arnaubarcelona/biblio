<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormatsTable Test Case
 */
class FormatsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FormatsTable
     */
    public $Formats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.formats',
        'app.books',
        'app.cdus',
        'app.collections',
        'app.edition_places',
        'app.countries',
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
        'app.books_subjects',
        'app.lending_policies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Formats') ? [] : ['className' => FormatsTable::class];
        $this->Formats = TableRegistry::get('Formats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Formats);

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
