<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LendingPoliciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LendingPoliciesTable Test Case
 */
class LendingPoliciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LendingPoliciesTable
     */
    public $LendingPolicies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lending_policies',
        'app.groups',
        'app.users',
        'app.formats',
        'app.books',
        'app.cdus',
        'app.collections',
        'app.edition_places',
        'app.countries',
        'app.locations',
        'app.items',
        'app.conservation_states',
        'app.catalogue_states',
        'app.lendings',
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
        $config = TableRegistry::exists('LendingPolicies') ? [] : ['className' => LendingPoliciesTable::class];
        $this->LendingPolicies = TableRegistry::get('LendingPolicies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LendingPolicies);

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
