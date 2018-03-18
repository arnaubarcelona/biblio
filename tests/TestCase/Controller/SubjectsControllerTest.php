<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SubjectsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SubjectsController Test Case
 */
class SubjectsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subjects',
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
        'app.books_languages',
        'app.levels',
        'app.books_levels',
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
