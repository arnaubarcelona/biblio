<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EditorialsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EditorialsController Test Case
 */
class EditorialsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.editorials',
        'app.books',
        'app.cdus',
        'app.formats',
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
        'app.books_editorials',
        'app.languages',
        'app.books_languages',
        'app.levels',
        'app.books_levels',
        'app.subjects',
        'app.books_subjects'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}