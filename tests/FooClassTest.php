<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-02-26 at 01:45:52.
 */
class FooClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var FooClass
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new FooClass;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers FooClass::foo
     * @todo   Implement testFoo().
     */
    public function testFoo()
    {
	$this->assertEquals(100,$this->object->foo());
    }
}
