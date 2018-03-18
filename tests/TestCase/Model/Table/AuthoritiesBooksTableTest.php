<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthoritiesBooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthoritiesBooksTable Test Case
 */
class AuthoritiesBooksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthoritiesBooksTable
     */
    public $AuthoritiesBooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authorities_books',
        'app.authorities',
        'app.books'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AuthoritiesBooks') ? [] : ['className' => AuthoritiesBooksTable::class];
        $this->AuthoritiesBooks = TableRegistry::get('AuthoritiesBooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthoritiesBooks);

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
