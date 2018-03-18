<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LentStatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LentStatesTable Test Case
 */
class LentStatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LentStatesTable
     */
    public $LentStates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lent_states'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LentStates') ? [] : ['className' => LentStatesTable::class];
        $this->LentStates = TableRegistry::get('LentStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LentStates);

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
